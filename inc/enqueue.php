<?php 

/**
 * Enqueue scripts and styles.
 */
function new_theme_scripts() {
	wp_enqueue_style( 'new-theme-style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script('jquery'); 
	wp_enqueue_script( 'new-theme-js', get_template_directory_uri() . '/js/theme.js', array(), '0.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_theme_scripts' );