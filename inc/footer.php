<?php
// Footer Customizer Settings
if ( ! function_exists( 'add_footer_customizer_settings' ) ) {
    function add_footer_customizer_settings( $wp_customize ) {
    
    // Footer Panel
    $wp_customize->add_panel( 'footer_panel', array(
        'title'    => __( 'Footer Settings', 'my-portfolio' ),
        'priority' => 160,
    ) );
    
    // Footer Identity Section
    $wp_customize->add_section( 'footer_identity_section', array(
        'title'    => __( 'Footer Identity', 'my-portfolio' ),
        'panel'    => 'footer_panel',
        'priority' => 10,
    ) );
    
    // Footer Name
    $wp_customize->add_setting( 'footer_name', array(
        'default'           => 'Xitiz',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_name', array(
        'type'        => 'text',
        'section'     => 'footer_identity_section',
        'label'       => __( 'Footer Name', 'my-portfolio' ),
        'description' => __( 'Your name displayed in the footer', 'my-portfolio' ),
    ) );
    
    // Footer Email
    $wp_customize->add_setting( 'footer_email', array(
        'default'           => 'xitiz@xitiz-dev.ml',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_email', array(
        'type'        => 'email',
        'section'     => 'footer_identity_section',
        'label'       => __( 'Footer Email', 'my-portfolio' ),
        'description' => __( 'Your email address displayed in the footer', 'my-portfolio' ),
    ) );
    
    // Footer Role
    $wp_customize->add_setting( 'footer_role', array(
        'default'           => 'Web designer and front-end developer',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_role', array(
        'type'        => 'text',
        'section'     => 'footer_identity_section',
        'label'       => __( 'Footer Role/Title', 'my-portfolio' ),
        'description' => __( 'Your professional role or title', 'my-portfolio' ),
    ) );

    
    // Footer Copyright Section
    $wp_customize->add_section( 'footer_copyright_section', array(
        'title'    => __( 'Footer Copyright', 'my-portfolio' ),
        'panel'    => 'footer_panel',
        'priority' => 30,
    ) );
    
    // Copyright Year
    $wp_customize->add_setting( 'footer_copyright_year', array(
        'default'           => date('Y'),
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_copyright_year', array(
        'type'        => 'number',
        'section'     => 'footer_copyright_section',
        'label'       => __( 'Copyright Year', 'my-portfolio' ),
        'description' => __( 'Year for copyright notice', 'my-portfolio' ),
        'input_attrs' => array(
            'min'  => 2020,
            'max'  => date('Y') + 10,
            'step' => 1,
        ),
    ) );
    
    // Copyright Text
    $wp_customize->add_setting( 'footer_copyright_text', array(
        'default'           => 'Made by Xitiz',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_copyright_text', array(
        'type'        => 'text',
        'section'     => 'footer_copyright_section',
        'label'       => __( 'Copyright Text', 'my-portfolio' ),
        'description' => __( 'Additional copyright text (without the year)', 'my-portfolio' ),
    ) );
    }
}

add_action( 'customize_register', 'add_footer_customizer_settings' );
