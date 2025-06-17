<?php
/**
 * Helper functions for the theme
 */

// Enqueue theme assets
function my_portfolio_enqueue_assets() {
    // Google Fonts
    // wp_enqueue_style('my-portfolio-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&display=swap', false);
    // Main CSS
    wp_enqueue_style('my-portfolio-style', MY_PORTFOLIO_URI . '/assets/css/style.css', array(), MY_PORTFOLIO_VERSION);
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_assets');

// Register Projects Custom Post Type
function register_projects_cpt() {
    $args = array(
        'public' => true,
        'label'  => 'Projects',
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No projects found',
            'not_found_in_trash' => 'No projects found in Trash'
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-portfolio',
        'has_archive' => true,
        'rewrite' => array('slug' => 'project'),
        'show_in_rest' => true,
    );
    register_post_type('projects', $args);
}
add_action('init', 'register_projects_cpt');

// Add Meta Boxes for Projects
function add_projects_meta_boxes() {
    add_meta_box(
        'project_details',
        'Project Details',
        'project_details_callback',
        'projects',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_projects_meta_boxes');

// Save Meta Box Data
function save_project_details($post_id) {
    if (!isset($_POST['project_details_nonce']) || !wp_verify_nonce($_POST['project_details_nonce'], 'save_project_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $fields = array('project_image', 'project_tech', 'project_description', 'project_live_link', 'project_github_link');
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'save_project_details');

// Enqueue media scripts for meta box
function enqueue_media_scripts($hook) {
    if ('post.php' == $hook || 'post-new.php' == $hook) {
        global $post_type;
        if ('projects' == $post_type) {
            wp_enqueue_media();
        }
    }
}
add_action('admin_enqueue_scripts', 'enqueue_media_scripts');