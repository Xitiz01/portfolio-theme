<?php
// Contacts Page Theme Options (Settings API)
add_action('admin_init', function() {
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_hero_title');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_hero_text');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_support');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_discord');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_email');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_media_list');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_whatsapp');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_linkedin');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_twitter');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_github');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_instagram');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_support_label');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_message_label');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_testimonials');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_upwork');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_contacts_fiverr');

    add_settings_section('my_portfolio_contacts_section', __('Contacts Page', 'my-portfolio'), null, 'my_portfolio_theme_settings');


    // Hero Section
    add_settings_field('my_portfolio_contacts_hero_title', __('Hero Title', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_hero_title', 'Who am i?');
        echo '<input type="text" name="my_portfolio_contacts_hero_title" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Hero Text
    add_settings_field('my_portfolio_contacts_hero_text', __('Hero Text', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_hero_text', "I am actively seeking freelance opportunities and welcome a conversation to discuss how I can add value to your team. Please feel free to reach out with any potential projects or questions.");
        echo '<textarea name="my_portfolio_contacts_hero_text" class="large-text" rows="2">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Support Card
    add_settings_field('my_portfolio_contacts_support', __('Support Card (number or text)', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_support', 'https://wise.com/invite/dic/kshitijk112');
        echo '<input type="text" name="my_portfolio_contacts_support" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Upwork
    add_settings_field('my_portfolio_contacts_upwork', __('Upwork Profile URL', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_upwork', 'https://upwork.com/freelancers/~0168965e70dbc40f44');
        echo '<input type="url" name="my_portfolio_contacts_upwork" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    
    // Fiverr
    add_settings_field('my_portfolio_contacts_fiverr', __('Fiverr Profile URL', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_fiverr', 'https://www.fiverr.com/sellers/xitizkhanal/edit');
        echo '<input type="url" name="my_portfolio_contacts_fiverr" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');


    // Discord
    add_settings_field('my_portfolio_contacts_discord', __('Discord', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_discord', 'https://discord.com/users/644489674580033566');
        echo '<input type="text" name="my_portfolio_contacts_discord" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');


    // Email
    add_settings_field('my_portfolio_contacts_email', __('Email', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_email', 'kshitizkhanal0138@gmail.com');
        echo '<input type="email" name="my_portfolio_contacts_email" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');


    // Support Card Label
    add_settings_field('my_portfolio_contacts_support_label', __('Support Card Label', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_support_label', 'Support me here');
        echo '<input type="text" name="my_portfolio_contacts_support_label" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Message Card Label
    add_settings_field('my_portfolio_contacts_message_label', __('Message Card Label', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_message_label', 'Message me here');
        echo '<input type="text" name="my_portfolio_contacts_message_label" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // WhatsApp
    add_settings_field('my_portfolio_contacts_whatsapp', __('WhatsApp', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_whatsapp', 'https://wa.me/9840368838');
        echo '<input type="text" name="my_portfolio_contacts_whatsapp" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // LinkedIn
    add_settings_field('my_portfolio_contacts_linkedin', __('LinkedIn', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_linkedin', 'https://www.linkedin.com/in/kshitiz-khanal-0138/');
        echo '<input type="text" name="my_portfolio_contacts_linkedin" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Twitter/X
    add_settings_field('my_portfolio_contacts_twitter', __('Twitter/X', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_twitter', 'https://x.com/khanal_xitiz');
        echo '<input type="text" name="my_portfolio_contacts_twitter" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // GitHub
    add_settings_field('my_portfolio_contacts_github', __('GitHub', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_github', 'https://github.com/Xitiz01');
        echo '<input type="text" name="my_portfolio_contacts_github" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Instagram
    add_settings_field('my_portfolio_contacts_instagram', __('Instagram', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_instagram', 'https://www.instagram.com/xitiz_khanal/');
        echo '<input type="text" name="my_portfolio_contacts_instagram" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_contacts_section');

    // Testimonials
    add_settings_field('my_portfolio_contacts_testimonials', __('Testimonials (one per line: Name | Role | Testimonial)', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_contacts_testimonials', "Kushal Koirala | Project Manager NTH | Great to work with! 
Raman Shrestha | Saphire Events/ Glam House | Highly recommended!\n
Aman Dhakal | Ezeekart Nepal | He Customizer My WooCommerce store\n 
Prashant Dhungana | Developer Ekegant Media Australia | Top-notch work and great communication.\n
Barsha Upadhyay | HR CMS Hospitality | A true professional. Always delivers on time\n
Upu Adhikari | Developer Cedar Gate | Quickly grasps complex problems and finds solutions\n
E.r Gaurav Raj Poudel | Buddha Air | Reliable, dependable, and a pleasure to work with\n");
        echo '<textarea name="my_portfolio_contacts_testimonials" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
        echo '<p class="description">Format: Name | Role | Testimonial (one per line)</p>';
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
        'upwork' => get_option('my_portfolio_contacts_upwork', ''),
        'fiverr' => get_option('my_portfolio_contacts_fiverr', ''),
        'support_label' => get_option('my_portfolio_contacts_support_label', 'Support me here'),
        'message_label' => get_option('my_portfolio_contacts_message_label', 'Message me here'),
        'discord' => get_option('my_portfolio_contacts_discord', ''),
        'email' => get_option('my_portfolio_contacts_email', ''),
        'whatsapp' => get_option('my_portfolio_contacts_whatsapp', ''),
        'linkedin' => get_option('my_portfolio_contacts_linkedin', ''),
        'twitter' => get_option('my_portfolio_contacts_twitter', ''),
        'github' => get_option('my_portfolio_contacts_github', ''),
        'instagram' => get_option('my_portfolio_contacts_instagram', ''),
        'media_list' => get_option('my_portfolio_contacts_media_list', ''),
        'testimonials' => get_option('my_portfolio_contacts_testimonials', ''),
    );
} 