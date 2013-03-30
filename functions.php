<?php

function om13_setup() {
	add_theme_support('post-formats', array(
		'quote',
	));
}
add_action('after_setup_theme', 'om13_setup');

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
}
add_action('wp_enqueue_scripts', 'om13_enqueue');
