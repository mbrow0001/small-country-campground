<?php 

/**
 * Enqueue scripts and styles.
 */
function cyberbility_starter_scripts() {
	wp_enqueue_style( 'cyberbility-starter-style', get_template_directory_uri() . '/css/style.css', '0.0.1');
	wp_enqueue_style( 'matt-css', get_template_directory_uri() . '/css/matt.css', '0.0.1');
	wp_enqueue_script('jquery'); 
	wp_enqueue_script( 'cyberbility-starter-js', get_template_directory_uri() . '/js/theme.js', array(), '0.0.1', true );
	wp_enqueue_script( 'youtube-api',  'https://www.youtube.com/iframe_api', array(), '0.0.1', true );

	 // Template Header - Caribou
	wp_enqueue_style( 'header-dingo', get_template_directory_uri() . '/css/header-dingo.css', array(), '0.0.1' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cyberbility_starter_scripts' );