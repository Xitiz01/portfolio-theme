<?php
// Contacts Page Theme Options (Settings API)
add_action('admin_init', function() {
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_hero_title');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_hero_text');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_support');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_discord');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_email');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_media_list');

    add_settings_section('my_portfolio_contacts_section', __('Contacts Page', 'my-portfolio'), null, 'my_portfolio_theme_settings');
    add_settings_field('my_portfolio_contacts_hero_title', __('Hero Title', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_hero_title', 'Who am i?');
        echo '<input type="text" name="my_portfolio_contacts_hero_title" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
    add_settings_field('my_portfolio_contacts_hero_text', __('Hero Text', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_hero_text', "I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me");
        echo '<textarea name="my_portfolio_contacts_hero_text" class="large-text" rows="2">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
    add_settings_field('my_portfolio_contacts_support', __('Support Card (number or text)', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_support', '4149500120690030');
        echo '<input type="text" name="my_portfolio_contacts_support" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
    add_settings_field('my_portfolio_contacts_discord', __('Discord', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_discord', 'Xitiz#1234');
        echo '<input type="text" name="my_portfolio_contacts_discord" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
    add_settings_field('my_portfolio_contacts_email', __('Email', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_email', 'xitiz@xitiz-dev.ml');
        echo '<input type="email" name="my_portfolio_contacts_email" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
    add_settings_field('my_portfolio_contacts_media_list', __('All Media (one per line)', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_media_list', "@xitiz\n@xitiz");
        echo '<textarea name="my_portfolio_contacts_media_list" class="large-text" rows="2">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');
});

/**
 * Helper: Get Contacts page options as array
 */
function my_portfolio_get_contacts_options() {
    return array(
        'hero_title' => get_option('my_portfolio_contacts_hero_title', 'Who am i?'),
        'hero_text' => get_option('my_portfolio_contacts_hero_text', ''),
        'support' => get_option('my_portfolio_contacts_support', ''),
        'discord' => get_option('my_portfolio_contacts_discord', ''),
        'email' => get_option('my_portfolio_contacts_email', ''),
        'media_list' => get_option('my_portfolio_contacts_media_list', ''),
    );
} 