<?php
function my_portfolio_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('my-portfolio-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&display=swap', false);
    // Main CSS
    wp_enqueue_style('my-portfolio-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    // Font Awesome (optional)
    wp_enqueue_style('my-portfolio-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', false);
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_assets'); 

require_once get_template_directory() . '/inc/customizer.php'; 

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

// Meta Box Callback Function
function project_details_callback($post) {
    wp_nonce_field('save_project_details', 'project_details_nonce');
    
    $image_id = get_post_meta($post->ID, '_project_image', true);
    $tech = get_post_meta($post->ID, '_project_tech', true);
    $description = get_post_meta($post->ID, '_project_description', true);
    $live_link = get_post_meta($post->ID, '_project_live_link', true);
    $github_link = get_post_meta($post->ID, '_project_github_link', true);
    
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    ?>
    <table class="form-table">
        <tr>
            <th><label for="project_image">Project Image</label></th>
            <td>
                <div class="project-image-container">
                    <input type="hidden" id="project_image" name="project_image" value="<?php echo esc_attr($image_id); ?>" />
                    <button type="button" class="button" id="upload_image_button">
                        <?php echo $image_url ? 'Change Image' : 'Upload Image'; ?>
                    </button>
                    <button type="button" class="button" id="remove_image_button" style="<?php echo $image_url ? '' : 'display:none;'; ?>">Remove Image</button>
                    <div id="image_preview" style="margin-top: 10px;">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" style="max-width: 300px; height: auto;" />
                        <?php endif; ?>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <th><label for="project_tech">Tech Stack</label></th>
            <td>
                <input type="text" id="project_tech" name="project_tech" value="<?php echo esc_attr($tech); ?>" style="width: 100%;" />
                <p class="description">e.g., "HTML SCSS Python Flask" or "React Express Discord.js Node.js"</p>
            </td>
        </tr>
        <tr>
            <th><label for="project_description">Description</label></th>
            <td>
                <textarea id="project_description" name="project_description" rows="3" style="width: 100%;"><?php echo esc_textarea($description); ?></textarea>
                <p class="description">Brief description of the project</p>
            </td>
        </tr>
        <tr>
            <th><label for="project_live_link">Live Demo URL</label></th>
            <td>
                <input type="url" id="project_live_link" name="project_live_link" value="<?php echo esc_attr($live_link); ?>" style="width: 100%;" />
                <p class="description">URL to live demo (optional)</p>
            </td>
        </tr>
        <tr>
            <th><label for="project_github_link">GitHub/Code URL</label></th>
            <td>
                <input type="url" id="project_github_link" name="project_github_link" value="<?php echo esc_attr($github_link); ?>" style="width: 100%;" />
                <p class="description">URL to GitHub repository or code (optional)</p>
            </td>
        </tr>
    </table>
    
    <script>
    jQuery(document).ready(function($) {
        var mediaUploader;
        
        $('#upload_image_button').click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            mediaUploader = wp.media({
                title: 'Choose Project Image',
                button: {
                    text: 'Choose Image'
                },
                multiple: false
            });
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#project_image').val(attachment.id);
                $('#image_preview').html('<img src="' + attachment.url + '" style="max-width: 300px; height: auto;" />');
                $('#upload_image_button').text('Change Image');
                $('#remove_image_button').show();
            });
            mediaUploader.open();
        });
        
        $('#remove_image_button').click(function(e) {
            e.preventDefault();
            $('#project_image').val('');
            $('#image_preview').html('');
            $('#upload_image_button').text('Upload Image');
            $(this).hide();
        });
    });
    </script>
    <?php
}

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