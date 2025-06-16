<?php
/* Template Name: Projects */
get_header();
?>
<main class="projects-main">
    <section class="projects-hero">
        <h2 class="section-title"><span class="slash">/</span>projects</h2>
        <p class="subtitle"><?php echo esc_html(get_option('my_portfolio_projects_hero_title', 'List of my projects')); ?></p>
    </section>
    <section class="complete-apps">
        <h2 class="section-title">#complete-apps</h2>
        <div class="project-list">
            <?php
            $project_ids = function_exists('my_portfolio_get_projects_section_ids') ? my_portfolio_get_projects_section_ids('complete') : array();
            if (!empty($project_ids)) {
                $args = array(
                    'post_type' => 'projects',
                    'post__in' => $project_ids,
                    'orderby' => 'post__in',
                    'posts_per_page' => 12,
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
                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" />
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
        <h2 class="section-title">#small-projects</h2>
        <div class="project-list">
            <?php
            $project_ids = function_exists('my_portfolio_get_projects_section_ids') ? my_portfolio_get_projects_section_ids('small') : array();
            if (!empty($project_ids)) {
                $args = array(
                    'post_type' => 'projects',
                    'post__in' => $project_ids,
                    'orderby' => 'post__in',
                    'posts_per_page' => 12,
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
                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" />
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
                echo '<p>No projects selected.';
            }
            ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 