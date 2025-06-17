<?php
/**
 * Projects Page Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}   
    
if ( ! function_exists( 'my_portfolio_customize_projects' ) ) {
function my_portfolio_customize_projects( $wp_customize ) {
    // Projects Page Panel
    $wp_customize->add_panel( 'projects_panel', array(
        'title'    => __( 'Projects Page', 'my-portfolio' ),
        'priority' => 30,
    ) );
    $wp_customize->add_section( 'projects_hero_section', array(
        'title'    => __( 'Projects Hero', 'my-portfolio' ),
        'panel'    => 'projects_panel',
        'priority' => 10,
    ) );
    $wp_customize->add_setting( 'projects_hero_title', array(
        'default'           => 'List of my projects',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'projects_hero_title', array(
        'label'    => __( 'Projects Hero Title', 'my-portfolio' ),
        'section'  => 'projects_hero_section',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'my_portfolio_customize_projects', 11 );
} 