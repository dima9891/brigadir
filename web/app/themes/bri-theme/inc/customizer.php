<?php
/**
 * bri-theme Theme Customizer
 *
 * @package bri-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bri_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'bri_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'bri_theme_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_setting('footer_logo');
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
	array(
		'label' => 'Лого для футера',
		'section' => 'title_tagline',
		'settings' => 'footer_logo',
	) ) );
 
	 $wp_customize->add_setting( 'copyright_text' );
	 $wp_customize->add_control( 'copyright_text', array(
		 'id'=> 'id',
		 'label' => __( 'Текст копирайта', 'TextDomain' ),
		 'section' => 'title_tagline'
	 ) );
}
add_action( 'customize_register', 'bri_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bri_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bri_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bri_theme_customize_preview_js() {
	wp_enqueue_script( 'bri-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'bri_theme_customize_preview_js' );
