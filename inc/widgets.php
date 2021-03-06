<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cyberbility_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cyberbility-starter' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cyberbility-starter' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

        register_sidebar( array(
        'name'          => __( 'Footer Full', 'cyberbility-starter' ),
        'id'            => 'footerfull',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

        register_sidebar( array(
        'name'          => __( 'Header One', 'cyberbility-starter' ),
        'id'            => 'header-one',
        'description'   => 'Widget area below main content and above footer',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
}
add_action( 'widgets_init', 'cyberbility_starter_widgets_init' );
?>