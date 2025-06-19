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