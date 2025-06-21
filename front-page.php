<?php
$options = function_exists('my_portfolio_get_contacts_options') ? my_portfolio_get_contacts_options() : array();
get_header();
?>
<div class="sidebar">
    <div class="sidebar-line"></div>
    <div class="sidebar-icons">
        <?php if ($github = get_theme_mod('home_sidebar_github')): ?>
            <a href="<?php echo esc_url($github); ?>" target="_blank"><i class="fab fa-github"></i></a>
        <?php endif; ?>
        <?php if ($dribbble = get_theme_mod('home_sidebar_dribbble')): ?>
            <a href="<?php echo esc_url($dribbble); ?>" target="_blank"><i class="fab fa-dribbble"></i></a>
        <?php endif; ?>
        <?php if ($portfolio = get_theme_mod('home_sidebar_portfolio')): ?>
            <a href="<?php echo esc_url($portfolio); ?>" target="_blank"><i class="fas fa-key"></i></a>
        <?php endif; ?>
    </div>
</div>
<main class="home-main">
    <section class="hero" id="home">
        <div class="hero-content">
            <div class="hero-text">
                <h4>
                    <?php echo wp_kses_post(get_theme_mod('home_hero_title', 'I am a <span class="accent">web designer</span> and <span class="accent">front-end developer</span>')); ?>
                </h4>
            </div>
      
            <div class="hero-subtext"> 
              <p><?php echo wp_kses_post(get_theme_mod('home_hero_subtitle', 'I am actively seeking freelance opportunities and welcome a conversation to discuss how I can add value to your team. Please feel free to reach out with any potential projects or questions.')); ?></p>
            </div>
            <div class="hero-buttons"> 
                <a class="btn hero-btn" href="<?php echo esc_url(get_theme_mod('home_hero_button_link', site_url( '/contacts/' ))); ?>"><?php echo esc_html(get_theme_mod('home_hero_button_text', 'Contact me !!')); ?></a>
                <a class="btn hero-btn" href="<?php echo esc_url(get_theme_mod('home_hero_download_cv_link', '#')); ?>"><?php echo esc_html(get_theme_mod('home_hero_download_cv', 'Download CV')); ?></a>    
            </div>
        </div>
        <div class="hero-image-block">
            <div class="hero-geo-svg">
                <svg width="120" height="90" viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="10" y="10" width="40" height="40" stroke="#b983ff" stroke-width="2"/>
                  <rect x="40" y="30" width="60" height="40" stroke="#b983ff" stroke-width="2"/>
                </svg>
            </div>
            <img src="<?php echo esc_url( get_theme_mod('home_hero_image', get_template_directory_uri() . '/assets/img/hooded.png') ); ?>" alt="Xitiz" class="hero-img" />
            <div class="status-bar">
                <span class="status-dot"></span><b><?php echo wp_kses_post(get_theme_mod('home_hero_status', '  Currently working on  My Self')); ?></b>
            </div>
        </div>
    </section>
    <section class="quote-section">
      <div class="quote-box-minimal">
        <div class="quote-mark-minimal">“</div>
        <div class="quote-text-minimal"><?php echo esc_html(get_theme_mod('home_quote_text', 'With great power comes great electricity bill')); ?></div> 
        <div class="quote-author-minimal">
          <span class="quote-mark-minimal">”</span>
          <span>- <?php echo esc_html(get_theme_mod('home_quote_author', 'Dr. Who')); ?></span> 
        </div>
      </div>
    </section>
    <div class="geo-decoration geo-decoration-1"></div>
    <div class="geo-decoration geo-decoration-2"></div>
</main>

<!-- Projects Section -->
<section class="projects" id="projects">
    <div class="projects-header">
        <h2><?php echo esc_html(get_theme_mod('home_projects_title', '#projects')); ?></h2>
        <span class="divider-line"></span>                  
        <h3>
            <a href="<?php echo esc_url( get_theme_mod( 'home_projects_button_link', site_url( '/projects/' ) ) ); ?>" class="btn"><?php echo esc_html(get_theme_mod('home_projects_button_text', 'View all →')); ?></a>
        </h3>    
    </div>
    <div class="project-list">
        <?php
        $selected_projects = get_theme_mod('home_projects_repeater');
        $project_ids = array();
        if ($selected_projects) {
            $decoded = json_decode($selected_projects, true);
            if (is_array($decoded)) {
                $project_ids = array_map('absint', $decoded);
            }
        }
        if (!empty($project_ids)) {
            $args = array(
                'post_type' => 'projects',
                'post__in' => $project_ids,
                'orderby' => 'post__in',
                'posts_per_page' => 6,
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

<!-- Skills Section (Figma accurate) -->
<section id="skills">
    <div class="skills-title-row">
      <span class="skills-title"><?php echo esc_html(get_theme_mod('home_skills_title', 'Skills')); ?></span>   
      <span class="skills-title-line"></span>
      <h3>
          <a href="<?php echo esc_url( get_theme_mod( 'home_skills_button_link', site_url( '/skills/' ) ) ); ?>" class="btn"><?php echo esc_html(get_theme_mod('home_skills_button_text', 'View all →')); ?></a>
      </h3>  
      
    </div>
    <div class="skills-flex">
        <div class="skills-left">
            
            <div class="skills-geo">
            <div class="skills-dotgrid skills-dotgrid-1">
                <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
            </div>
            <div class="skills-dotgrid skills-dotgrid-2">
                <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
            </div>
            <div class="skills-square skills-square-1"></div>
            <div class="skills-square skills-square-2"></div>
            <div class="skills-square skills-square-3"></div>
            </div>
        </div>
        <div class="skills-right">
            <div class="skill-card">
            <div class="skill-card-title"><?php echo esc_html(get_theme_mod('home_skills_languages_title', 'Languages')); ?></div>
            <div class="skill-card-list"><?php echo nl2br(esc_html(get_theme_mod('home_skills_languages'))); ?></div>
            </div>
            <div class="skill-card">
            <div class="skill-card-title"><?php echo esc_html(get_theme_mod('home_skills_databases_title', 'Databases')); ?></div>
            <div class="skill-card-list"><?php echo nl2br(esc_html(get_theme_mod('home_skills_databases'))); ?></div>
            </div>
            <div class="skill-card">
            <div class="skill-card-title"><?php echo esc_html(get_theme_mod('home_skills_tools_title', 'Tools')); ?></div>
            <div class="skill-card-list"><?php echo nl2br(esc_html(get_theme_mod('home_skills_tools'))); ?></div>
            </div>
            <div class="skill-card">
            <div class="skill-card-title"><?php echo esc_html(get_theme_mod('home_skills_other_title', 'Other')); ?></div>
            <div class="skill-card-list"><?php echo nl2br(esc_html(get_theme_mod('home_skills_other'))); ?></div>
            </div>
            <div class="skill-card">
            <div class="skill-card-title"><?php echo esc_html(get_theme_mod('home_skills_frameworks_title', 'Frameworks')); ?></div>
            <div class="skill-card-list"><?php echo nl2br(esc_html(get_theme_mod('home_skills_frameworks'))); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- About Me Section (Figma accurate) -->
<section id="about-me">
  <div class="aboutme-title-row">
    <span class="aboutme-title"><?php echo esc_html(get_theme_mod('home_about_me_title', '#about-me')); ?> </span>
    <span class="aboutme-title-line"></span>
    <h3>
        <a href="<?php echo esc_url( get_theme_mod( 'home_about_me_button_link', site_url( '/about/' ) ) ); ?>" class="btn"><?php echo esc_html(get_theme_mod('home_aboutme_button_text', 'Read more →')); ?></a>
    </h3> 
  </div>
  <div class="aboutme-flex">
    <div class="aboutme-left">
      
      <div class="aboutme-text">
        <p class="aboutme-intro"><?php echo esc_html(get_theme_mod('home_about_me_intro', 'Hello, I\'m Xitiz!')); ?></p>     
        <p><?php echo esc_html(get_theme_mod('home_about_me_description', 'I\'m a self-taught front-end developer based in Kathmandu, Nepal. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.')); ?></p>
        <p><?php echo esc_html(get_theme_mod('home_about_me_description_2', 'Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.')); ?></p>
      </div>
      <a class="aboutme-btn" href="<?php echo esc_url(get_theme_mod('home_about_me_button_link', site_url( '/about/' ))); ?>"><?php echo esc_html(get_theme_mod('home_aboutme_button_text', 'Read more →')); ?></a>
    </div>
    <div class="aboutme-right">
      <div class="aboutme-img-wrap">
        <img src="<?php echo esc_url( get_theme_mod('home_aboutme_image', get_template_directory_uri() . '/assets/img/hooded1.png') ); ?>" alt="Xitiz" class="aboutme-img" />
        <div class="aboutme-dotgrid aboutme-dotgrid-1">
          <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
        </div>
        <div class="aboutme-dotgrid aboutme-dotgrid-2">
          <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
        </div>
        <div class="aboutme-square"></div>
      </div>
    </div>
  </div>
</section>

<!-- Contacts Section (Figma accurate) -->
<section id="contacts">
  <div class="contacts-header-row">
    <span class="contacts-title"><?php echo esc_html(get_theme_mod('home_contacts_title', 'Contacts')); ?></span>
    <span class="contacts-title-line"></span>
    <h3>
      <a class="btn" href="<?php echo esc_url(get_theme_mod('home_contacts_button_link', site_url( '/contacts/' ))); ?>"><?php echo esc_html(get_theme_mod('home_contacts_button_text', 'Contact me !!')); ?></a>
    </h3>

  </div>
  <div class="contacts-main-row">
    <div class="contacts-left">
      <div class="contacts-dotgrid">
        <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
      </div>
      <div class="contacts-text">
          <?php echo nl2br(esc_html(get_theme_mod('home_contacts_description', 'I am actively seeking freelance opportunities and welcome a conversation to discuss how I can add value to your team. Please feel free to reach out with any potential projects or questions.'))); ?>
      </div>
    </div>
    <div class="home-contacts-right">
      <?php if (!empty($options['support']) || !empty($options['upwork']) || !empty($options['fiverr'])): ?>
      <div class="contacts-box">
        <div class="contacts-box-title"><?php echo esc_html($options['support_label'] ?? 'Support me here'); ?></div>
        <?php if (!empty($options['support'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['support']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_buy_me_a_coffee(); ?> Buy-me-a-coffee
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['upwork'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['upwork']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_upwork('footer-svg-icon', 20); ?> Upwork
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['fiverr'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['fiverr']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_fiverr('footer-svg-icon', 20); ?> Fiverr
            </a>
          </div>
        <?php endif; ?>
      </div>
      <?php endif; ?> 
      <?php if (!empty($options['discord']) || !empty($options['email']) || !empty($options['whatsapp']) || !empty($options['linkedin']) || !empty($options['twitter']) || !empty($options['github']) || !empty($options['instagram'])): ?>
      <div class="contacts-box">
        <div class="contacts-box-title"><?php echo esc_html($options['message_label'] ?? 'lets get connected'); ?></div>
        <?php if (!empty($options['discord'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['discord']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_discord('footer-svg-icon', 20); ?> Discord
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['email'])): ?>
          <div class="contacts-box-row">
            <a href="mailto:<?php echo esc_attr($options['email']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_email('footer-svg-icon', 20); ?> Email
            </a>
          </div>
        <?php endif; ?> 
        <?php if (!empty($options['whatsapp'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['whatsapp']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_whatsapp('footer-svg-icon', 20); ?> WhatsApp
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['linkedin'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['linkedin']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_linkedin('footer-svg-icon', 20); ?> LinkedIn
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['twitter'])): ?>  
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['twitter']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_x('footer-svg-icon', 20); ?> X
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['github'])): ?>
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['github']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_github('footer-svg-icon', 20); ?> GitHub  
            </a>
          </div>
        <?php endif; ?>
        <?php if (!empty($options['instagram'])): ?>  
          <div class="contacts-box-row">
            <a href="<?php echo esc_url($options['instagram']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
              <?php echo my_portfolio_svg_instagram('footer-svg-icon', 20); ?> Instagram
            </a>
          </div>  
        <?php endif; ?>         
      </div>
      <?php endif; ?>
    </div> 
  </div>
</section>


<?php
get_footer();
?>   