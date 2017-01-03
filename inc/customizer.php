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
function cyberbility_starter_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'cyberbility_starter_customize_register' );

function cyberbility_starter_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'cyberbility_starter_theme_slider_options', array(
        'title'          => __( 'Slider Settings', 'cyberbility-starter' )
    ) );

    $wp_customize->add_setting( 'cyberbility_starter_theme_slider_count_setting', array(
        'default'        => '1',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'cyberbility_starter_theme_slider_count', array(
        'label'      => __( 'Number of slides displaying at once', 'cyberbility-starter' ),
        'section'    => 'cyberbility_starter_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'cyberbility_starter_theme_slider_count_setting'
    ) );

    $wp_customize->add_setting( 'cyberbility_starter_theme_slider_time_setting', array(
        'default'        => '5000',
        'sanitize_callback' => 'absint'
    ) );

    $wp_customize->add_control( 'cyberbility_starter_theme_slider_time', array(
        'label'      => __( 'Slider Time (in ms)', 'cyberbility-starter' ),
        'section'    => 'cyberbility_starter_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'cyberbility_starter_theme_slider_time_setting'
    ) );

    $wp_customize->add_setting( 'cyberbility_starter_theme_slider_loop_setting', array(
        'default'        => 'true',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'cyberbility_starter_theme_loop', array(
        'label'      => __( 'Loop Slider Content', 'cyberbility-starter' ),
        'section'    => 'cyberbility_starter_theme_slider_options',
        'type'     => 'radio',
        'choices'  => array(
            'true'  => 'yes',
            'false' => 'no',
        ),
        'settings'   => 'cyberbility_starter_theme_slider_loop_setting'
    ) );



    // New Customizer Settings

    $wp_customize->add_section( 'header_layout', array(
        'title'          => __( 'Header Layout', 'cyberbility-starter' ),
        'priority'      => 105,
        ) );

    $wp_customize->add_setting( 'header_layout_choice', array(
      'default' => 'aardvark',      
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
      ) );

    $wp_customize->add_control( 'header_layout_options', array(
      'label'   => __( 'Layout Options', 'cyberbility-starter' ),
      'section' => 'header_layout',
      'type'     => 'radio',
      'choices'  => array(
        'default'  => 'Default',
        'aardvark'  => 'Aardvark',
        'badger'    => 'Badger',
        'caribou'   => 'Caribou',
        'dingo'     => 'Dingo',
        ),        
      'settings'   => 'header_layout_choice'
      ) );

}
add_action( 'customize_register', 'cyberbility_starter_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cyberbility_starter_customize_preview_js() {
	wp_enqueue_script( 'cyberbility_starter_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'cyberbility_starter_customize_preview_js' );
