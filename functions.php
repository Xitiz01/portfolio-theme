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
