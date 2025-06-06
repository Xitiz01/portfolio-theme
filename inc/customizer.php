<?php
/**
 * Theme Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Only keep global settings and controls here (colors, layout, footer, social links)
// Require page-specific customizer files
require_once get_template_directory() . '/inc/home.php';
require_once get_template_directory() . '/inc/about.php';
require_once get_template_directory() . '/inc/projects.php';
require_once get_template_directory() . '/inc/contacts.php';

function my_portfolio_customize_register( $wp_customize ) {
    // Site Title & Description
    $wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    // Logo (handled by custom-logo support)

    // Colors
    $wp_customize->add_setting( 'primary_color', array(
        'default'   => '#22223b',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
        'label'    => __( 'Primary Color', 'my-portfolio' ),
        'section'  => 'colors',
        'settings' => 'primary_color',
    ) ) );

    $wp_customize->add_setting( 'accent_color', array(
        'default'   => '#4a4e69',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
        'label'    => __( 'Accent Color', 'my-portfolio' ),
        'section'  => 'colors',
        'settings' => 'accent_color',
    ) ) );

    // Layout Options
    $wp_customize->add_section( 'layout_options', array(
        'title'    => __( 'Layout Options', 'my-portfolio' ),
        'priority' => 30,
    ) );
    $wp_customize->add_setting( 'container_width', array(
        'default'           => '1200px',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'container_width', array(
        'label'    => __( 'Container Width', 'my-portfolio' ),
        'section'  => 'layout_options',
        'type'     => 'text',
    ) );

    // Footer Text
    $wp_customize->add_section( 'footer_options', array(
        'title'    => __( 'Footer', 'my-portfolio' ),
        'priority' => 160,
    ) );
    $wp_customize->add_setting( 'footer_text', array(
        'default'           => __( '© ' . date('Y') . ' My Portfolio. All rights reserved.', 'my-portfolio' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'footer_text', array(
        'label'    => __( 'Footer Text', 'my-portfolio' ),
        'section'  => 'footer_options',
        'type'     => 'text',
    ) );

    // Social Links
    $wp_customize->add_section( 'social_links', array(
        'title'    => __( 'Social Links', 'my-portfolio' ),
        'priority' => 170,
    ) );
    $wp_customize->add_setting( 'facebook_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'facebook_url', array(
        'label'    => __( 'Facebook URL', 'my-portfolio' ),
        'section'  => 'social_links',
        'type'     => 'url',
    ) );
    $wp_customize->add_setting( 'twitter_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'twitter_url', array(
        'label'    => __( 'Twitter URL', 'my-portfolio' ),
        'section'  => 'social_links',
        'type'     => 'url',
    ) );
    $wp_customize->add_setting( 'linkedin_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'linkedin_url', array(
        'label'    => __( 'LinkedIn URL', 'my-portfolio' ),
        'section'  => 'social_links',
        'type'     => 'url',
    ) );
}
add_action( 'customize_register', 'my_portfolio_customize_register' );

// Live Preview for Site Title & Description
function my_portfolio_customize_preview_js() {
    wp_enqueue_script( 'my-portfolio-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'my_portfolio_customize_preview_js' ); 