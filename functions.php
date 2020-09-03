<?php

function twentynineteen_child_setup() {
	// prepare theme for translation
	load_child_theme_textdomain( 'twentynineteen-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'twentynineteen_child_setup' );

function twentynineteen_child_scripts() {
	wp_enqueue_style( 'tweentynineteen-child-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_child_scripts' );
