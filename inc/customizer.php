<?php
/**
 * cyberbility-starter Theme Customizer
 *
 * @package cyberbility-starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function new_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'new_theme_customize_register' );

function new_theme_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'new_theme_theme_slider_options', array(
        'title'          => __( 'Slider Settings', 'cyberbility-starter' )
    ) );

    $wp_customize->add_setting( 'new_theme_theme_slider_count_setting', array(
        'default'        => '1',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'new_theme_theme_slider_count', array(
        'label'      => __( 'Number of slides displaying at once', 'cyberbility-starter' ),
        'section'    => 'new_theme_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'new_theme_theme_slider_count_setting'
    ) );

    $wp_customize->add_setting( 'new_theme_theme_slider_time_setting', array(
        'default'        => '5000',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'new_theme_theme_slider_time', array(
        'label'      => __( 'Slider Time (in ms)', 'cyberbility-starter' ),
        'section'    => 'new_theme_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'new_theme_theme_slider_time_setting'
    ) );

    $wp_customize->add_setting( 'new_theme_theme_slider_loop_setting', array(
        'default'        => 'true',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'new_theme_theme_loop', array(
        'label'      => __( 'Loop Slider Content', 'cyberbility-starter' ),
        'section'    => 'new_theme_theme_slider_options',
        'type'     => 'radio',
        'choices'  => array(
            'true'  => 'yes',
            'false' => 'no',
        ),
        'settings'   => 'new_theme_theme_slider_loop_setting'
    ) );

}
add_action( 'customize_register', 'new_theme_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function new_theme_customize_preview_js() {
	wp_enqueue_script( 'new_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'new_theme_customize_preview_js' );
