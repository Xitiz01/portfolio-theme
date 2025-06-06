<?php
/**
 * Contacts Page Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'my_portfolio_customize_contacts' ) ) {
function my_portfolio_customize_contacts( $wp_customize ) {
    // Contacts Page Panel
    $wp_customize->add_panel( 'contacts_panel', array(
        'title'    => __( 'Contacts Page', 'my-portfolio' ),
        'priority' => 40,
    ) );
    $wp_customize->add_section( 'contacts_hero_section', array(
        'title'    => __( 'Contacts Hero', 'my-portfolio' ),
        'panel'    => 'contacts_panel',
        'priority' => 10,
    ) );
    $wp_customize->add_setting( 'contacts_hero_title', array(
        'default'           => 'Who am i?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contacts_hero_title', array(
        'label'    => __( 'Contacts Hero Title', 'my-portfolio' ),
        'section'  => 'contacts_hero_section',
        'type'     => 'text',
    ) );
    $wp_customize->add_setting( 'contacts_hero_text', array(
        'default'           => "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me",
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contacts_hero_text', array(
        'label'    => __( 'Contacts Hero Text', 'my-portfolio' ),
        'section'  => 'contacts_hero_section',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'my_portfolio_customize_contacts', 12 );
} 