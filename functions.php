<?php
// Remove core block patterns
remove_theme_support('core-block-patterns');

// enqueue styles
function enqueue_styles() {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// enqueue scripts
function enqueue_scripts() {
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');  