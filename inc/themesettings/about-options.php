<?php
// About Page Theme Options (Settings API)
add_action('admin_init', function() {
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_hero_title');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_hero_subtitle');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_info');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_skills_languages');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_skills_other');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_skills_tools');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_skills_databases');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_skills_frameworks');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_about_fun_facts');

    add_settings_section('my_portfolio_about_section', __('About Page', 'my-portfolio'), null, 'my_portfolio_theme_settings');
    add_settings_field('my_portfolio_about_hero_title', __('Hero Title', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_hero_title', 'Who am i?');
        echo '<input type="text" name="my_portfolio_about_hero_title" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_hero_subtitle', __('Hero Subtitle', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_hero_subtitle', "Hello, i'm Xitiz!");
        echo '<input type="text" name="my_portfolio_about_hero_subtitle" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_info', __('About Info', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_info', "I'm a self-taught front-end developer based in Kathmandu, Nepal. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences. Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.");
        echo '<textarea name="my_portfolio_about_info" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_skills_languages', __('Skills: Languages', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_skills_languages', 'TypeScript Lua\nPython JavaScript');
        echo '<textarea name="my_portfolio_about_skills_languages" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_skills_other', __('Skills: Other', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_skills_other', 'HTML CSS EJS SCSS\nREST Jinja');
        echo '<textarea name="my_portfolio_about_skills_other" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_skills_tools', __('Skills: Tools', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_skills_tools', 'VSCode Neovim Linux\nFigma XFCE Arch\nGit Font Awesome\nKDE fish');
        echo '<textarea name="my_portfolio_about_skills_tools" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_skills_databases', __('Skills: Databases', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_skills_databases', 'SQLite PostgreSQL\nMongo');
        echo '<textarea name="my_portfolio_about_skills_databases" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_skills_frameworks', __('Skills: Frameworks', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_skills_frameworks', "React \n Vue \n Disnake Discord.js \n Flask Express.js \n Next.js \n Tailwind CSS \n Bootstrap \n Material UI \n Ant Design \n Chakra UI \n MUI \n Tailwind CSS \n Bootstrap \n Material UI \n Ant Design \n Chakra UI \n MUI");
        echo '<textarea name="my_portfolio_about_skills_frameworks" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
    add_settings_field('my_portfolio_about_fun_facts', __('Fun Facts (one per line)', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_about_fun_facts', "I like winter more than summer\nI often bike with my friends\nI like pizza and pasta\nI was in Egypt, Poland and Turkey\nMy favorite movie is The Green Mile\nI am a huge soccer fan\nI don't have any siblings");
        echo '<textarea name="my_portfolio_about_fun_facts" class="large-text" rows="4">' . esc_textarea($value) . '</textarea>';
    }, 'my_portfolio_theme_settings', 'my_portfolio_about_section');
});

/**
 * Helper: Get About page options as array
 */
function my_portfolio_get_about_options() {
    return array(
        'hero_title' => get_option('my_portfolio_about_hero_title', 'Who am i?'),
        'hero_subtitle' => get_option('my_portfolio_about_hero_subtitle', "Hello, i'm Xitiz!"),
        'info' => get_option('my_portfolio_about_info', ''),
        'skills_languages' => get_option('my_portfolio_about_skills_languages', ''),
        'skills_other' => get_option('my_portfolio_about_skills_other', ''),
        'skills_tools' => get_option('my_portfolio_about_skills_tools', ''),
        'skills_databases' => get_option('my_portfolio_about_skills_databases', ''),
        'skills_frameworks' => get_option('my_portfolio_about_skills_frameworks', ''),
        'fun_facts' => get_option('my_portfolio_about_fun_facts', ''),
    );
} 