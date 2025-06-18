<?php
/**
 * Template functions for the theme
 */

// Wise logo
if (!function_exists('my_portfolio_svg_wise')) {
    /**
     * Generates a Wise (formerly TransferWise) logo SVG.
     *
     * @param string $class Custom CSS class.
     * @param int    $size  Size of the icon (width and height).
     * @return string The SVG HTML.
     */
    function my_portfolio_svg_wise($class = '', $size = 24) {
        // This is the path for the official Wise logo.
        $svg_path = 'M16.92 6.284l-4.243 7.844-1.697-3.14-.636 1.176 2.333 4.314L18 6.284h-1.08zM6 6.284v11.432h1.08V9.59l2.844 5.258h.936l2.844-5.257v8.127h1.08V6.284H13.6l-2.76 5.1-2.844-5.1H6z';

        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="' . $svg_path . '"/></svg>';
    }
}
// A generic "Buy me a coffee" cup icon
if (!function_exists('my_portfolio_svg_buy_me_a_coffee')) {
    /**
     * Generates a generic coffee cup icon SVG.
     *
     * @param string $class Custom CSS class to add to the SVG tag.
     * @param int    $size  The width and height of the icon in pixels.
     * @return string The complete SVG HTML.
     */
    function my_portfolio_svg_buy_me_a_coffee($class = '', $size = 24) {
        // SVG path data for a classic coffee cup.
        $svg_path = 'M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.9 2-2V5c0-1.11-.89-2-2-2zm0 5h-2V5h2v3zM4 19h16v2H4v-2z';
        
        // Construct the full SVG tag with accessibility attributes.
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="red" role="img" aria-label="Coffee Cup Icon"><path d="' . $svg_path . '"/></svg>';
    }
}
        // Github logo
if (!function_exists('my_portfolio_svg_github')) {
    function my_portfolio_svg_github($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577v-2.234c-3.338.726-4.033-1.415-4.033-1.415-.546-1.387-1.333-1.757-1.333-1.757-1.089-.745.084-.729.084-.729 1.205.084 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.3-5.466-1.334-5.466-5.93 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.625-5.475 5.921.43.372.823 1.102.823 2.222v3.293c0 .322.218.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>';
    }
}

// Discord logo
if (!function_exists('my_portfolio_svg_discord')) {
    function my_portfolio_svg_discord($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.369a19.791 19.791 0 0 0-4.885-1.515.07.07 0 0 0-.073.035c-.211.375-.444.864-.608 1.249-1.844-.276-3.68-.276-5.486 0-.163-.393-.405-.874-.617-1.249a.077.077 0 0 0-.073-.035A19.736 19.736 0 0 0 3.677 4.369a.064.064 0 0 0-.03.027C.533 9.045-.32 13.579.099 18.057a.082.082 0 0 0 .031.056c2.052 1.507 4.041 2.422 5.992 3.029a.077.077 0 0 0 .084-.027c.461-.63.873-1.295 1.226-1.994a.076.076 0 0 0-.041-.104c-.652-.247-1.27-.549-1.872-.892a.077.077 0 0 1-.008-.127c.126-.094.252-.192.371-.291a.074.074 0 0 1 .077-.01c3.927 1.793 8.18 1.793 12.061 0a.073.073 0 0 1 .078.009c.12.099.245.198.372.292a.077.077 0 0 1-.006.127 12.298 12.298 0 0 1-1.873.891.076.076 0 0 0-.04.105c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028c1.961-.607 3.95-1.522 6.002-3.029a.077.077 0 0 0 .03-.055c.5-5.177-.838-9.673-3.548-13.661a.061.061 0 0 0-.03-.028zM8.02 15.331c-1.183 0-2.156-1.085-2.156-2.419 0-1.333.955-2.418 2.156-2.418 1.21 0 2.175 1.095 2.156 2.418 0 1.334-.955 2.419-2.156 2.419zm7.974 0c-1.183 0-2.156-1.085-2.156-2.419 0-1.333.955-2.418 2.156-2.418 1.21 0 2.175 1.095 2.156 2.418 0 1.334-.946 2.419-2.156 2.419Z"/></svg>';
    }
}

// X logo
if (!function_exists('my_portfolio_svg_x')) {
    function my_portfolio_svg_x($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M17.53 2.47a.75.75 0 0 1 1.06 1.06L13.06 9l5.53 5.47a.75.75 0 1 1-1.06 1.06L12 10.06l-5.47 5.53a.75.75 0 1 1-1.06-1.06L10.94 9 5.41 3.53a.75.75 0 1 1 1.06-1.06L12 7.94l5.53-5.47Z"/></svg>';
    }
}

// Linkedin logo
if (!function_exists('my_portfolio_svg_linkedin')) {
                function my_portfolio_svg_linkedin($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.28c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm15.5 11.28h-3v-5.6c0-1.337-.026-3.063-1.867-3.063-1.868 0-2.154 1.459-2.154 2.967v5.696h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.6v5.596z"/></svg>';
    }
}
// User icon (Smooth Outline Style)
if (!function_exists('my_portfolio_svg_user')) {
    function my_portfolio_svg_user($class = '', $size = 24) {   
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>';
    }
}

// Instagram logo (Smooth Filled Style)
if (!function_exists('my_portfolio_svg_instagram')) {
    function my_portfolio_svg_instagram($class = '', $size = 24) {
        // Note: For this complex filled icon, we create the shapes and then "punch out" the middle using fill-rule.
        // The outer path defines the frame, and the inner two paths define the holes.
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C8.74 2 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.784.305-1.455.75-2.123 1.417C1.333 2.715.89 3.386.583 4.17c-.305.784-.507 1.654-.564 2.932C.015 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06.126.128.25.198.372.057 1.278.26 2.148.562 2.932.308.784.75 1.455 1.418 2.123.667.667 1.338 1.11 2.122 1.417.785.305 1.655.507 2.933.564C8.333 23.985 8.74 24 12 24s3.667-.015 4.947-.072c1.278-.057 2.148-.26 2.932-.564.784-.307 1.455-.75 2.123-1.417.667-.668 1.11-1.338 1.417-2.123.305-.784.507-1.654.564-2.932.057-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.057-1.278-.26-2.148-.564-2.932-.307-.784-.75-1.455-1.417-2.123C21.285.89 20.614.447 19.83.14c-.784-.305-1.654-.507-2.932-.564C15.667 2.015 15.26 2 12 2zM12 7a5 5 0 100 10 5 5 0 000-10zm-3 5a3 3 0 116 0 3 3 0 01-6 0zm10.5-5.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                </svg>';
    }
}


// Email logo (Smooth Outline Style)
if (!function_exists('my_portfolio_svg_email')) {
    function my_portfolio_svg_email($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>';
    }
}

// WhatsApp logo
if (!function_exists('my_portfolio_svg_whatsapp')) {
    function my_portfolio_svg_whatsapp($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 24 24" fill="currentColor"><path d="M12.004 2.003c-5.523 0-10 4.477-10 10 0 1.768.464 3.432 1.27 4.872l-1.337 4.89 5.012-1.316A9.953 9.953 0 0 0 12.004 22c5.523 0 10-4.477 10-10s-4.477-10-10-10zm0 18.197a8.19 8.19 0 0 1-4.163-1.153l-.297-.176-2.975.78.793-2.91-.193-.3A8.18 8.18 0 0 1 3.81 12c0-4.522 3.672-8.197 8.194-8.197 4.522 0 8.197 3.675 8.197 8.197 0 4.522-3.675 8.197-8.197 8.197zm4.472-6.348c-.245-.123-1.453-.718-1.678-.799-.225-.082-.389-.123-.553.123-.163.245-.633.799-.776.964-.143.163-.286.184-.531.061-.245-.123-1.033-.381-1.967-1.215-.727-.647-1.218-1.447-1.362-1.692-.143-.245-.015-.377.108-.5.112-.112.245-.286.367-.429.123-.143.163-.245.245-.408.082-.163.041-.306-.02-.429-.061-.123-.553-1.337-.757-1.832-.2-.48-.404-.415-.553-.423l-.47-.008c-.163 0-.429.061-.653.306-.224.245-.857.837-.857 2.037 0 1.2.877 2.36 1 2.525.123.163 1.726 2.635 4.187 3.595.586.202 1.043.322 1.399.412.588.15 1.125.129 1.549.078.472-.056 1.453-.594 1.658-1.168.204-.574.204-1.066.143-1.168-.061-.102-.224-.163-.47-.286z"/></svg>';
    }
}

// Upwork logo
if (!function_exists('my_portfolio_svg_upwork')) {
    function my_portfolio_svg_upwork($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="0 0 32 32" fill="currentColor"><path d="M24.75 17.542c-1.469 0-2.849-0.62-4.099-1.635l0.302-1.432 0.010-0.057c0.276-1.521 1.13-4.078 3.786-4.078 1.99 0 3.604 1.615 3.604 3.604 0 1.984-1.615 3.599-3.604 3.599zM24.75 6.693c-3.385 0-6.016 2.198-7.083 5.818-1.625-2.443-2.865-5.38-3.583-7.854h-3.646v9.484c-0.005 1.875-1.521 3.391-3.396 3.396-1.875-0.005-3.391-1.526-3.396-3.396v-9.484h-3.646v9.484c0 3.885 3.161 7.068 7.042 7.068 3.885 0 7.042-3.182 7.042-7.068v-1.589c0.708 1.474 1.578 2.974 2.635 4.297l-2.234 10.495h3.729l1.62-7.615c1.417 0.906 3.047 1.479 4.917 1.479 4 0 7.25-3.271 7.25-7.266 0-4-3.25-7.25-7.25-7.25z"/></svg>';
    }
}

// Fiverr logo
if (!function_exists('my_portfolio_svg_fiverr')) {
    function my_portfolio_svg_fiverr($class = '', $size = 24) {
        return '<svg class="' . esc_attr($class) . '" width="' . intval($size) . '" height="' . intval($size) . '" viewBox="-2 -2 24 24" fill="#000000"><circle cx="10" cy="10" r="10" fill="currentColor"/><path d="M13.427 13.148v-5h-5v-.312c0-.517.42-.938.938-.938h.937V5.023h-.937a2.816 2.816 0 0 0-2.813 2.813v.312h-1.25v1.875h1.25v3.125h-1.25v1.875h4.375v-1.875h-1.25v-3.125h3.143v3.125h-1.268v1.875h4.375v-1.875h-1.25z"/><circle cx="12.402" cy="5.971" r="1.001"/></svg>';
    }
}

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

