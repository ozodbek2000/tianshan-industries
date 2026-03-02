<?php

/*
 * Enqueue scripts and styles.
 */

function tianshan_scripts() {

	wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css", array(), 1 );
	wp_enqueue_style( 'style-map', get_template_directory_uri() . "/assets/css/style.css.map", array(), 1 );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . "/assets/js/index.js", array(), 1, );

}
add_action( 'wp_enqueue_scripts', 'tianshan_scripts' );
