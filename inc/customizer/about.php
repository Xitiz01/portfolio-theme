<?php
/**
 * About Page Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'my_portfolio_customize_about' ) ) {
function my_portfolio_customize_about( $wp_customize ) {
    // About Page Panel
    $wp_customize->add_panel( 'about_panel', array(
        'title'    => __( 'About Page', 'my-portfolio' ),
        'priority' => 20,
    ) );
    $wp_customize->add_section( 'about_hero_section', array(
        'title'    => __( 'About Hero', 'my-portfolio' ),
        'panel'    => 'about_panel',
        'priority' => 10,
    ) );
    $wp_customize->add_setting( 'about_hero_title', array(
        'default'           => 'Who am i?',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_title', array(
        'label'    => __( 'About Hero Title', 'my-portfolio' ),
        'section'  => 'about_hero_section',
        'type'     => 'text',
    ) );
    $wp_customize->add_setting( 'about_hero_text', array(
        'default'           => "I'm a self-taught front-end developer based in Kyiv, Ukraine. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.",
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'about_hero_text', array(
        'label'    => __( 'About Hero Text', 'my-portfolio' ),
        'section'  => 'about_hero_section',
        'type'     => 'textarea',
    ) );
    $wp_customize->add_section( 'about_fun_facts_section', array(
        'title'    => __( 'Fun Facts', 'my-portfolio' ),
        'panel'    => 'about_panel',
        'priority' => 20,
    ) );
    $wp_customize->add_setting( 'about_fun_facts', array(
        'default'           => "I like winter more than summer\nI often bike with my friends\nI like pizza and pasta\nI was in Egypt, Poland and Turkey\nMy favorite movie is The Green Mile\nI am still in school\nI don't have any siblings",
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'about_fun_facts', array(
        'label'    => __( 'Fun Facts (one per line)', 'my-portfolio' ),
        'section'  => 'about_fun_facts_section',
        'type'     => 'textarea',
    ) );
}
add_action( 'customize_register', 'my_portfolio_customize_about', 10 );
} 