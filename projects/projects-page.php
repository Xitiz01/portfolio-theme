<?php
/* Template Name: Projects */
get_header();

// Get options with proper error handling
$hero_subtitle = get_option('my_portfolio_projects_hero_subtitle', 'List of my projects');
$complete_title = get_option('my_portfolio_projects_complete_title', '#complete-apps');
$small_title = get_option('my_portfolio_projects_small_title', '#small-projects');
?>
<main class="projects-main">
    <section class="projects-hero">
    <h2 class="section-title"><span class="slash">/</span>projects</h2>
        <?php if (!empty($hero_subtitle)): ?>
            <p class="subtitle"><?php echo esc_html($hero_subtitle); ?></p>
        <?php endif; ?>
    </section>
    <section class="complete-apps">
        <?php if (!empty($complete_title)): ?>
            <h2 class="section-title"><?php echo esc_html($complete_title); ?></h2>
        <?php endif; ?>
        <div class="project-list">
            <?php
            $project_ids = array();
            if (function_exists('my_portfolio_get_projects_section_ids')) {
                $project_ids = my_portfolio_get_projects_section_ids('complete');
            }
            
            if (!empty($project_ids)) {
                $args = array(
                    'post_type' => 'projects',
                    'post__in' => $project_ids,
                    'orderby' => 'post__in',
                    'posts_per_page' => -1,
                );
                $projects_query = new WP_Query($args);
                if ($projects_query->have_posts()) :
                    while ($projects_query->have_posts()) : $projects_query->the_post();
                        $project_id = get_the_ID();
                        $image_id = get_post_meta($project_id, '_project_image', true);
                        $image = $image_id ? wp_get_attachment_url($image_id) : '';
                        $tech = get_post_meta($project_id, '_project_tech', true);
                        $description = get_post_meta($project_id, '_project_description', true);
                        $live_link = get_post_meta($project_id, '_project_live_link', true);
                        $github_link = get_post_meta($project_id, '_project_github_link', true);
            ?>
            <div class="project-card">
                <?php if ($image): ?>
                    <div class="project-image-container">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" />
                    </div>
                <?php endif; ?>
                <div class="project-info">
                    <?php if ($tech): ?>
                        <div class="tech"><?php echo esc_html($tech); ?></div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <?php if ($description): ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                    <?php if ($live_link): ?>
                        <a class="btn" href="<?php echo esc_url($live_link); ?>" target="_blank">Live</a>
                    <?php endif; ?>
                    <?php if ($github_link): ?>
                        <a class="btn secondary" href="<?php echo esc_url($github_link); ?>" target="_blank">Github</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No projects selected or found.</p>';
                endif;
            } else {
                echo '<p>No projects selected.</p>';
            }
            ?>
        </div>
    </section>
    <section class="small-projects">
        <?php if (!empty($small_title)): ?>
            <h2 class="section-title"><?php echo esc_html($small_title); ?></h2>
        <?php endif; ?>
        <div class="project-list">
            <?php
            $project_ids = array();
            if (function_exists('my_portfolio_get_projects_section_ids')) {
                $project_ids = my_portfolio_get_projects_section_ids('small');
            }
            
            if (!empty($project_ids)) {
                $args = array(
                    'post_type' => 'projects',
                    'post__in' => $project_ids,
                    'orderby' => 'post__in',
                    'posts_per_page' => -1,
                );
                $projects_query = new WP_Query($args);
                if ($projects_query->have_posts()) :
                    while ($projects_query->have_posts()) : $projects_query->the_post();
                        $project_id = get_the_ID();
                        $image_id = get_post_meta($project_id, '_project_image', true);
                        $image = $image_id ? wp_get_attachment_url($image_id) : '';
                        $tech = get_post_meta($project_id, '_project_tech', true);
                        $description = get_post_meta($project_id, '_project_description', true);
                        $live_link = get_post_meta($project_id, '_project_live_link', true);
                        $github_link = get_post_meta($project_id, '_project_github_link', true);
            ?>
            <div class="project-card">
                <?php if ($image): ?>
                    <div class="project-image-container">
                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" />
                    </div>
                <?php endif; ?>
                <div class="project-info">
                    <?php if ($tech): ?>
                        <div class="tech"><?php echo esc_html($tech); ?></div>
                    <?php endif; ?>
                    <h3><?php the_title(); ?></h3>
                    <?php if ($description): ?>
                        <p><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                    <?php if ($live_link): ?>
                        <a class="btn" href="<?php echo esc_url($live_link); ?>" target="_blank">Live</a>
                    <?php endif; ?>
                    <?php if ($github_link): ?>
                        <a class="btn secondary" href="<?php echo esc_url($github_link); ?>" target="_blank">Github</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>No projects selected or found.</p>';
                endif;
            } else {
                echo '<p>No projects selected.</p>';
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 