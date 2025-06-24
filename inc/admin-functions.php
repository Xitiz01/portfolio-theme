<?php
/**
 * Admin-specific functions for the theme
 */

// Theme Settings Page
function my_portfolio_theme_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php _e('Theme Settings', 'my-portfolio'); ?></h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('my_portfolio_theme_settings_group');
            do_settings_sections('my_portfolio_theme_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register Theme Settings
function register_theme_settings() {
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_home_hero_title');
    add_settings_section('my_portfolio_home_section', __('Home Page', 'my-portfolio'), null, 'my_portfolio_theme_settings');
    add_settings_field(
        'my_portfolio_home_hero_title',
        __('Hero Title', 'my-portfolio'),
        function() {
            $value = get_option('my_portfolio_home_hero_title', '');
            echo '<input type="text" name="my_portfolio_home_hero_title" value="' . esc_attr($value) . '" class="regular-text">';
        },
        'my_portfolio_theme_settings',
        'my_portfolio_home_section'
    );
}
add_action('admin_init', 'register_theme_settings');

// Add Theme Settings Menu
function add_theme_settings_menu() {
    add_menu_page(
        __('Theme Settings', 'my-portfolio'),
        __('Theme Settings', 'my-portfolio'),
        'manage_options',
        'my_portfolio_theme_settings',
        'my_portfolio_theme_settings_page',
        'dashicons-admin-generic',
        2
    );
}
add_action('admin_menu', 'add_theme_settings_menu'); 