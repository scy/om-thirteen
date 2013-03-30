<?php

function om13_setup() {
	add_theme_support('post-formats', array(
		'quote',
	));
}
add_action('after_setup_theme', 'om13_setup');

function om13_enqueue() {
	wp_enqueue_style(
		'om13-normalize',
		get_template_directory_uri() . '/css/normalize-1.1.0.css'
	);
	wp_enqueue_style('om13-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'om13_enqueue');
