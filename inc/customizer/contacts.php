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
    $wp_customize->add_section( 'contacts_methods_section', array(
        'title'    => __( 'Contact Methods', 'my-portfolio' ),
        'panel'    => 'contacts_panel',
        'priority' => 20,
    ) );
    // Discord
    $wp_customize->add_setting( 'contacts_discord', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_discord', array(
        'label'    => __( 'Discord URL', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // Email
    $wp_customize->add_setting( 'contacts_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_email', array(
        'label'    => __( 'Email Address (mailto:... link)', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // X
    $wp_customize->add_setting( 'contacts_twitter', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_twitter', array(
        'label'    => __( 'X URL', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // GitHub
    $wp_customize->add_setting( 'contacts_github', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_github', array(
        'label'    => __( 'GitHub URL', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // LinkedIn
    $wp_customize->add_setting( 'contacts_linkedin', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_linkedin', array(
        'label'    => __( 'LinkedIn URL', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // Instagram
    $wp_customize->add_setting( 'contacts_instagram', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_instagram', array(
        'label'    => __( 'Instagram URL', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
    // WhatsApp
    $wp_customize->add_setting( 'contacts_whatsapp', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'contacts_whatsapp', array(
        'label'    => __( 'WhatsApp URL (wa.me link)', 'my-portfolio' ),
        'section'  => 'contacts_methods_section',
        'type'     => 'url',
    ) );
}
add_action( 'customize_register', 'my_portfolio_customize_contacts', 12 );
} 