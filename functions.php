<?php
/**
 * My Portfolio Theme functions and definitions
 *
 * @package My_Portfolio
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define theme constants
define('MY_PORTFOLIO_VERSION', '1.0.0');
define('MY_PORTFOLIO_DIR', get_template_directory());
define('MY_PORTFOLIO_URI', get_template_directory_uri());

// Include required files
require_once MY_PORTFOLIO_DIR . '/inc/helper-function.php'; 
require_once MY_PORTFOLIO_DIR . '/inc/template-function.php'; 
require_once MY_PORTFOLIO_DIR . '/inc/admin-functions.php'; 
require_once MY_PORTFOLIO_DIR . '/inc/customizer/customizer.php';
require_once MY_PORTFOLIO_DIR . '/inc/themesettings/about-options.php'; 
require_once MY_PORTFOLIO_DIR . '/inc/themesettings/contacts-options.php';
require_once MY_PORTFOLIO_DIR . '/inc/themesettings/projects-options.php';
require_once MY_PORTFOLIO_DIR . '/inc/customizer/home.php';
require_once MY_PORTFOLIO_DIR . '/inc/sitemap-generator.php';

// Initialize customizer
add_action('customize_register', 'my_portfolio_customize_home');

/**
 * Theme setup and supports
 */
function my_portfolio_setup() {
    // Add theme support for navigation menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-portfolio' ),
    ) );

    // Add theme support for title tag, custom logo, etc.
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
}
add_action( 'after_setup_theme', 'my_portfolio_setup' );

/**
 * Enqueue theme assets
 */
function my_portfolio_enqueue_assets() {
    // Main CSS
    wp_enqueue_style('my-portfolio-style', MY_PORTFOLIO_URI . '/assets/css/style.css', array(), MY_PORTFOLIO_VERSION);
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_assets');

/**
 * Enqueue admin scripts
 */
function my_portfolio_admin_scripts($hook) {
    // Enqueue for theme settings page and post edit pages
    if ($hook === 'settings_page_my_portfolio_theme_settings' || 
        $hook === 'post.php' || 
        $hook === 'post-new.php') {
        wp_enqueue_script('jquery');
        wp_enqueue_media();
        wp_enqueue_script(
            'my-portfolio-admin-repeater',
            MY_PORTFOLIO_URI . '/assets/js/admin-repeater.js',
            array('jquery'),
            MY_PORTFOLIO_VERSION,
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'my_portfolio_admin_scripts');

/**
 * Enqueue custom login styles.
 */
function my_portfolio_login_styles() {
    wp_enqueue_style( 'my-portfolio-login-style', MY_PORTFOLIO_URI . '/assets/css/login-style.css', array(), MY_PORTFOLIO_VERSION );
}
add_action( 'login_enqueue_scripts', 'my_portfolio_login_styles' );

/**
 * Change the login logo URL.
 *
 * @return string
 */
function my_portfolio_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_portfolio_login_logo_url' );

/**
 * Change the login logo title.
 *
 * @return string
 */
function my_portfolio_login_logo_url_title() {
    $name = get_bloginfo( 'name' );
    $url = home_url();
    return '<a href="' . $url . '">' . $name . '</a>';
}
add_filter( 'login_headertext', 'my_portfolio_login_logo_url_title' );

/**
 * Add a custom login message.
 */
function my_portfolio_login_message() {
    $name = get_bloginfo( 'name' );
    $url = home_url();
    return '<p class="login-message" style="text-align: center;">' . __('Developed by ' . '<a href="' . $url . '">' . $name . '</a>' . '   | 2025' . '</p> <br>', 'my-portfolio');
}
add_filter( 'login_message', 'my_portfolio_login_message' );

/**
 * Clean up the WordPress login page by removing unnecessary elements.
 */

// 1. Remove the "Lost Your Password?" link.
// The 'lostpassword_url' filter controls the URL for the password reset link.
// By returning an empty string, we effectively make the link disappear.
add_filter( 'lostpassword_url', '__return_false' );

// 2. Remove the "← Go to [Site Name]" link and the language switcher.
// Both of these elements are within the <p id="nav"> and <p id="backtoblog"> paragraphs.
// The easiest and most reliable way to remove them with hooks is to add some inline CSS to the login page header.
function my_custom_login_header_style() {
    echo '<style>
        /* Hides the "Go to Site" and "Lost Password" links container */
        .login #nav { 
            display: none !important; 
        }
        
        /* Hides the "Back to Site" link */
        .login #backtoblog { 
            display: none !important; 
        }

        /* Hides the language switcher */
        .language-switcher {
            display: none !important;
        }
    </style>';
}
add_action( 'login_head', 'my_custom_login_header_style' );

add_filter( 'login_display_language_dropdown', '__return_false' );
