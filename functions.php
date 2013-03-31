<?php

/**
 * Rewrite internal URLs (links, assets etc.) to use the host name requested by
 * the client, not the "siteurl" option.
 *
 * Useful for debugging, when "siteurl" is set to "localhost", but you want to
 * access the site from another machine.
 *
 * Requires the "pecl_http" PECL extension.
 */
function om13_rewrite_siteurls($url) {
	if (!(WP_DEBUG && function_exists('http_build_url'))) {
		return $url;
	}
	return http_build_url($url, array(
		'host' => $_SERVER['HTTP_HOST']
	));
}
add_filter('option_siteurl', 'om13_rewrite_siteurls');
add_filter('theme_root_uri', 'om13_rewrite_siteurls');

function om13_setup() {
	add_theme_support('post-formats', array(
		'quote',
	));
	register_nav_menu('primary', 'Kopfbereich'); // TODO: __
}
add_action('after_setup_theme', 'om13_setup');

function om13_wait_for_going_live() {
	// Go live automatically on 2013-04-08 21:00 CEST.
	if (time() < 1365447600 && !is_user_logged_in()) {
		wp_die('Die Website der #om13 ist demnächst verfügbar. Bei Fragen kannst du gern den Twitteraccount <a href="https://twitter.com/openmindkonf">@openmindkonf</a> kontaktieren. Wir freuen uns auf dich!'); // TODO: __
	}
}
add_action('get_header', 'om13_wait_for_going_live');

function om13_enqueue() {
	$tpldir = get_template_directory_uri();
	wp_enqueue_style(
		'om13-normalize',
		"$tpldir/css/normalize-1.1.0.css"
	);
	wp_enqueue_style('om13-style', get_stylesheet_uri());
	wp_enqueue_script(
		'om13-modernizr',
		"$tpldir/js/modernizr-2.6.2-54684.min.js"
	);
	wp_enqueue_script(
		'om13-jquery',
		"$tpldir/js/jquery-1.9.1.min.js",
		array(),
		false,
		true
	);
	wp_enqueue_script(
		'om13-js',
		"$tpldir/js/om13.js",
		array('om13-jquery'),
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'om13_enqueue');

function om13_filter_posts($query) {
	if (is_home()) { // TODO: This should probably apply to more request types.
		$query->set('tax_query', array(
			array(
				'taxonomy' => 'post_format',
				'field'    => 'slug',
				'operator' => 'NOT IN',
				'terms'    => array('post-format-quote'),
			),
		));
	}
	return $query;
}
add_filter('pre_get_posts', 'om13_filter_posts');
