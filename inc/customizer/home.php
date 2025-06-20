<?php
/**
 * Home Page Customizer settings and controls
 *
 * @package My_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! function_exists( 'my_portfolio_customize_home' ) ) {
    function my_portfolio_customize_home( $wp_customize ) {
        // Home Panel
        $wp_customize->add_panel( 'home_panel', array(
            'title'    => __( 'Home Page', 'my-portfolio' ),
            'priority' => 10,
        ) );
        // Hero Section (add hero image control)
        $wp_customize->add_section( 'home_hero_section', array(
            'title'    => __( 'Hero Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 10,
        ) );
        // Hero Title
        $wp_customize->add_setting( 'home_hero_title', array(
            'default'           => 'I am a <span class="accent">web designer</span> and <span class="accent">front-end developer</span>',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_title', array(
            'label'    => __( 'Hero Title', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        // Hero Subtitle
        $wp_customize->add_setting( 'home_hero_subtitle', array(
            'default'           => 'I am actively seeking freelance opportunities and welcome a conversation to discuss how I can add value to your team. Please feel free to reach out with any potential projects or questions.',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_subtitle', array(
            'label'    => __( 'Hero Subtitle', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        // Hero Button Text
        $wp_customize->add_setting( 'home_hero_button_text', array(
            'default'           => 'Contact me !!',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_hero_button_text', array(
            'label'    => __( 'Hero Button Text', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'text',
        ) );
        // Hero Button Link
        $wp_customize->add_setting( 'home_hero_button_link', array(
            'default'           => '#contacts',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_hero_button_link', array(
            'label'    => __( 'Hero Button Link', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'url',
        ) );

        // DOWNLOAD CV
        $wp_customize->add_setting( 'home_hero_download_cv', array(
            'default'           => 'Download CV',
            'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( 'home_hero_download_cv', array(
            'label'    => __( 'Download CV', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'text',
        ) );
        // Download CV Link
        $wp_customize->add_setting( 'home_hero_download_cv_link', array(
            'default'           => 'https://drive.google.com/file/d/1-_0000000000000000000000000000000000000000/view?usp=sharing',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_hero_download_cv_link', array(
            'label'    => __( 'Download CV Link', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'url',
        ) );

        // Hero Image
        $wp_customize->add_setting( 'home_hero_image', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_hero_image', array(
            'label'    => __( 'Hero Image', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'settings' => 'home_hero_image',
        ) ) );
        // Hero Status
        $wp_customize->add_setting( 'home_hero_status', array(
            'default'           => 'Currently working on my self',
            'sanitize_callback' => 'wp_kses_post',
        ) );
        $wp_customize->add_control( 'home_hero_status', array(
            'label'    => __( 'Hero Status', 'my-portfolio' ),
            'section'  => 'home_hero_section',
            'type'     => 'textarea',
        ) );
        // Quote Section (add quote text and author controls)
        $wp_customize->add_section( 'home_quote_section', array(
            'title'    => __( 'Quote Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 20,
        ) );
        // Quote Text
        $wp_customize->add_setting( 'home_quote_text', array(
            'default'           => 'With great power comes great electricity bill',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_quote_text', array(
            'label'    => __( 'Quote Text', 'my-portfolio' ),
            'section'  => 'home_quote_section',
            'type'     => 'text',
        ) );
        // Quote Author
        $wp_customize->add_setting( 'home_quote_author', array(
            'default'           => 'Dr. Who',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_quote_author', array(
            'label'    => __( 'Quote Author', 'my-portfolio' ),
            'section'  => 'home_quote_section',
            'type'     => 'text',
        ) );
        // Projects Button Text
        $wp_customize->add_setting( 'home_projects_button_text', array(
            'default'           => 'View all →',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_projects_button_text', array(
            'label'    => __( 'Projects Button Text', 'my-portfolio' ),
            'section'  => 'home_projects_section',
            'type'     => 'text',
        ) );
        // Projects Button Link
        $wp_customize->add_setting( 'home_projects_button_link', array(
            'default'           => '#projects',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_projects_button_link', array(
            'label'    => __( 'Projects Button Link', 'my-portfolio' ),
            'section'  => 'home_projects_section',
            'type'     => 'url',
        ) );



        // Skills Section (add skills repeater control) 
        $wp_customize->add_section( 'home_skills_section', array(
            'title'    => __( 'Skills Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 40,
        ) );

        // Skills Title
        $wp_customize->add_setting( 'home_skills_title', array(
            'default'           => 'Skills',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_title', array(
            'label'    => __( 'Skills Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Skills Button Text
        $wp_customize->add_setting( 'home_skills_button_text', array(
            'default'           => 'View all →',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_button_text', array(
            'label'    => __( 'Skills Button Text', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Skills Button Link
        $wp_customize->add_setting( 'home_skills_button_link', array(
            'default'           => site_url( '/skills/' ),
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_skills_button_link', array(
            'label'    => __( 'Skills Button Link', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'url',
        ) );

        // Languages Card Title
        $wp_customize->add_setting( 'home_skills_languages_title', array(
            'default'           => 'Languages',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_languages_title', array(
            'label'    => __( 'Languages Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );
        // Databases Card Title
        $wp_customize->add_setting( 'home_skills_databases_title', array(
            'default'           => 'Databases',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_databases_title', array(
            'label'    => __( 'Databases Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Tools Card Title
        $wp_customize->add_setting( 'home_skills_tools_title', array(
            'default'           => 'Tools',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_tools_title', array(
            'label'    => __( 'Tools Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Other Card Title
        $wp_customize->add_setting( 'home_skills_other_title', array(
            'default'           => 'Other',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_other_title', array(
            'label'    => __( 'Other Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Frameworks Card Title
        $wp_customize->add_setting( 'home_skills_frameworks_title', array(
            'default'           => 'Frameworks',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_skills_frameworks_title', array(
            'label'    => __( 'Frameworks Card Title', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'text',
        ) );

        // Languages
        $wp_customize->add_setting( 'home_skills_languages', array(
            'default'           => 'PHP\nJavascript',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_languages', array(
            'label'    => __( 'Languages', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );

        // Databases
        $wp_customize->add_setting( 'home_skills_databases', array(
            'default'           => 'SQLite\nPostgreSQL\nMongo',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_databases', array(
            'label'    => __( 'Databases', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );

        // Tools
        $wp_customize->add_setting( 'home_skills_tools', array(
            'default'           => 'VSCode\nCursor\nGithub\nFigma\nSlack\nDiscord\nWhatsApp\nC-Panel\nWHM',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_tools', array(
            'label'    => __( 'Tools', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );

        // Other
        $wp_customize->add_setting( 'home_skills_other', array(
            'default'           => 'HTML\nCSS\nEJS\nSCSS\nREST\nJinja\nPHP\nJavascript',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_other', array(
            'label'    => __( 'Other', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );

        // Frameworks
        $wp_customize->add_setting( 'home_skills_frameworks', array(
            'default'           => 'Underscore\nGeneratePress\nBlockbase\nBlankSlate\nLaravel\nWordPress',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_skills_frameworks', array(
            'label'    => __( 'Frameworks', 'my-portfolio' ),
            'section'  => 'home_skills_section',
            'type'     => 'textarea',
        ) );

        // About Me Section
        $wp_customize->add_section( 'home_aboutme_section', array(
            'title'    => __( 'About Me Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 50,
        ) );

        // About Me Intro
        $wp_customize->add_setting( 'home_aboutme_intro', array(
            'default'           => "Hello, I'm Xitiz!",
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_intro', array(
            'label'    => __( 'About Me Intro', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'text',
        ) );

        // About Me Text
        $wp_customize->add_setting( 'home_aboutme_text', array(
            'default'           => "I'm a self-taught front-end developer based in Kathmandu, Nepal. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences. Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.",
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_text', array(
            'label'    => __( 'About Me Text', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'textarea',
        ) );

        // About Me Image
        $wp_customize->add_setting( 'home_aboutme_image', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home_aboutme_image', array(
            'label'    => __( 'About Me Image', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'settings' => 'home_aboutme_image',
        ) ) );

        // About Me Button Text
        $wp_customize->add_setting( 'home_aboutme_button_text', array(
            'default'           => 'Read more →',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_aboutme_button_text', array(
            'label'    => __( 'About Me Button Text', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',
            'type'     => 'text',
        ) );

        // About Me Button Link
        $wp_customize->add_setting( 'home_aboutme_button_link', array(
            'default'           => site_url( '/about/' ),
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_aboutme_button_link', array(
            'label'    => __( 'About Me Button Link', 'my-portfolio' ),
            'section'  => 'home_aboutme_section',   
            'type'     => 'url',
        ) );


        // Contacts Section (add left-side description control)

        // Contacts Title
        $wp_customize->add_setting( 'home_contacts_title', array(
            'default'           => 'Contacts',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_contacts_title', array(
            'label'    => __( 'Contacts Title', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'text',
        ) );
        // Contacts Button Text
        $wp_customize->add_setting( 'home_contacts_button_text', array(
            'default'           => 'Contact me !!',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'home_contacts_button_text', array(
            'label'    => __( 'Contacts Button Text', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'text',
        ) );

        // Contacts Description
        $wp_customize->add_section( 'home_contacts_section', array(
            'title'    => __( 'Contacts Section', 'my-portfolio' ),
            'panel'    => 'home_panel',
            'priority' => 60,
        ) );
        // Contacts Description
        $wp_customize->add_setting( 'home_contacts_description', array(
            'default'           => "I am actively seeking freelance opportunities and welcome a conversation to discuss how I can add value to your team. Please feel free to reach out with any potential projects or questions.",
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'home_contacts_description', array(
            'label'    => __( 'Contacts Description', 'my-portfolio' ),
            'section'  => 'home_contacts_section',
            'type'     => 'textarea',
        ) );

        // Sidebar Social Links Section
        $wp_customize->add_section( 'home_sidebar_social_section', array(
            'title'    => __( 'Sidebar Social Links', 'my-portfolio' ),
            'priority' => 70,
        ) );
        // GitHub URL
        $wp_customize->add_setting( 'home_sidebar_github_url', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_github', array(
            'label'    => __( 'GitHub URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
        // Dribbble URL
        $wp_customize->add_setting( 'home_sidebar_dribbble', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_dribbble', array(
            'label'    => __( 'Dribbble URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
        // Portfolio/Key URL
        $wp_customize->add_setting( 'home_sidebar_portfolio', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'home_sidebar_portfolio', array(
            'label'    => __( 'Portfolio/Key URL', 'my-portfolio' ),
            'section'  => 'home_sidebar_social_section',
            'type'     => 'url',
        ) );
    }
}
add_action( 'customize_register', 'my_portfolio_customize_home' );  