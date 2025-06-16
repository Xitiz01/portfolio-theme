<?php
// Projects Page Theme Options (Settings API)
add_action('admin_init', function() {
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_projects_hero_title');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_projects_hero_subtitle');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_projects_complete_ids');
    register_setting('my_portfolio_theme_settings_group', 'my_portfolio_projects_small_ids');

    add_settings_section('my_portfolio_projects_section', __('Projects Page', 'my-portfolio'), null, 'my_portfolio_theme_settings');
    add_settings_field('my_portfolio_projects_hero_title', __('Hero Title', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_projects_hero_title', 'List of my projects');
        echo '<input type="text" name="my_portfolio_projects_hero_title" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_projects_section');
    add_settings_field('my_portfolio_projects_hero_subtitle', __('Hero Subtitle', 'my-portfolio'), function() {
        $value = get_option('my_portfolio_projects_hero_subtitle', 'List of my projects');
        echo '<input type="text" name="my_portfolio_projects_hero_subtitle" value="' . esc_attr($value) . '" class="regular-text">';
    }, 'my_portfolio_theme_settings', 'my_portfolio_projects_section');
   
    add_settings_field('my_portfolio_projects_complete_ids', __('Complete Apps: Select Projects', 'my-portfolio'), function() {
        $selected = get_option('my_portfolio_projects_complete_ids', array());
        if (!is_array($selected)) $selected = array();
        my_portfolio_projects_repeater_control('my_portfolio_projects_complete_ids', $selected);
    }, 'my_portfolio_theme_settings', 'my_portfolio_projects_section');
    add_settings_field('my_portfolio_projects_small_ids', __('Small Projects: Select Projects', 'my-portfolio'), function() {
        $selected = get_option('my_portfolio_projects_small_ids', array());
        if (!is_array($selected)) $selected = array();
        my_portfolio_projects_repeater_control('my_portfolio_projects_small_ids', $selected);
    }, 'my_portfolio_theme_settings', 'my_portfolio_projects_section');
});

/**
 * Helper: Get Projects page options as array
 */
function my_portfolio_get_projects_options() {
    return array(
        'hero_title' => get_option('my_portfolio_projects_hero_title', 'List of my projects'),
        'hero_subtitle' => get_option('my_portfolio_projects_hero_subtitle', 'List of my projects'),
        'complete_apps' => get_option('my_portfolio_projects_complete_apps', ''),
        'small_projects' => get_option('my_portfolio_projects_small_projects', ''),
    );
}

// Helper: Render a repeater control for selecting projects
if (!function_exists('my_portfolio_projects_repeater_control')) {
    function my_portfolio_projects_repeater_control($name, $value) {
        $projects = get_posts(['post_type' => 'projects', 'numberposts' => -1]);
        $selected = is_array($value) ? $value : (array) json_decode($value, true);
        if (!is_array($selected)) $selected = array();
        echo '<div class="my-portfolio-repeater-list">';
        if (count($selected) === 0) {
            // Always render at least one empty item
            echo '<div class="my-portfolio-repeater-item">';
            echo '<select name="' . esc_attr($name) . '[]">';
            echo '<option value="">-- Select Project --</option>';
            foreach ($projects as $project) {
                echo '<option value="' . esc_attr($project->ID) . '">' . esc_html($project->post_title) . '</option>';
            }
            echo '</select> ';
            echo '<button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>';
            echo '</div>';
        } else {
            for ($i = 0; $i < count($selected); $i++) {
                echo '<div class="my-portfolio-repeater-item">';
                echo '<select name="' . esc_attr($name) . '[]">';
                echo '<option value="">-- Select Project --</option>';
                foreach ($projects as $project) {
                    $sel = ($selected[$i] == $project->ID) ? 'selected' : '';
                    echo '<option value="' . esc_attr($project->ID) . '" ' . $sel . '>' . esc_html($project->post_title) . '</option>';
                }
                echo '</select> ';
                echo '<button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>';
                echo '</div>';
            }
        }
        // Hidden template for JS
        echo '<div class="my-portfolio-repeater-item my-portfolio-repeater-template" style="display:none;">';
        echo '<select name="' . esc_attr($name) . '[]">';
        echo '<option value="">-- Select Project --</option>';
        foreach ($projects as $project) {
            echo '<option value="' . esc_attr($project->ID) . '">' . esc_html($project->post_title) . '</option>';
        }
        echo '</select> ';
        echo '<button type="button" class="button-link my-portfolio-repeater-remove">Remove</button>';
        echo '</div>';
        echo '</div>';
        echo '<button type="button" class="button my-portfolio-repeater-add">Add Project</button>';
    }
}

// Helper: Get selected project IDs for each section
function my_portfolio_get_projects_section_ids($section = 'complete') {
    $option = $section === 'small' ? 'my_portfolio_projects_small_ids' : 'my_portfolio_projects_complete_ids';
    $ids = get_option($option, '');
    $arr = is_array($ids) ? $ids : json_decode($ids, true);
    return is_array($arr) ? array_map('absint', $arr) : array();
}

add_action('admin_enqueue_scripts', function($hook) {
    if ($hook === 'settings_page_my_portfolio_theme_settings') {
        wp_enqueue_script('my-portfolio-admin-repeater', get_template_directory_uri() . '/assets/js/admin-repeater.js', array('jquery'), '1.0', true);
    }
}); 