<?php
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
            <h1>
                Xitiz is a <span class="accent">web designer</span> and <span class="accent">front-end developer</span>
            </h1>
            <p class="hero-sub">He crafts responsive websites where technologies<br>meet creativity</p>
            <a class="btn hero-btn" href="#contacts">Contact me !!</a>
        </div>
        <div class="hero-image-block">
            <div class="hero-geo-svg">
                <svg width="120" height="90" viewBox="0 0 120 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="10" y="10" width="40" height="40" stroke="#b983ff" stroke-width="2"/>
                  <rect x="40" y="30" width="60" height="40" stroke="#b983ff" stroke-width="2"/>
                </svg>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hooded.png" alt="Xitiz" class="hero-img" />
            <div class="status-bar">
                <span class="status-dot"></span> Currently working on <b>Portfolio</b>
            </div>
        </div>
    </section>
    <section class="quote-section">
      <div class="quote-box-minimal">
        <div class="quote-mark-minimal">“</div>
        <div class="quote-text-minimal">With great power comes great electricity bill</div>
        <div class="quote-author-minimal">
          <span class="quote-mark-minimal">”</span>
          <span>- Dr. Who</span>
        </div>
      </div>
    </section>
    <div class="geo-decoration geo-decoration-1"></div>
    <div class="geo-decoration geo-decoration-2"></div>
</main>

<!-- Projects Section -->
<section class="projects" id="projects">
        <div class="projects-header">
                <h2>#projects</h2>
                <span class="divider-line"></span>                  
                <h3 href="#" class="btn">View all →</h3>
        </div>
    <div class="project-list">    
        <!-- Project 1 -->
        <div class="project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project1.png" alt="project1" />
            <div class="project-info">
                <div class="tech">HTML SCSS Python Flask</div>
                <h3>ChertNodes</h3>
                <p>Minecraft servers hosting</p>
                <a class="btn" href="#">Live</a>
                <a class="btn secondary" href="#">Cached</a>
            </div>
        </div>
        <!-- Project 2 -->
        <div class="project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project2.jpg" alt="Protect2" />
            <div class="project-info">
                <div class="tech">React Express Discord.js Node.js</div>
                <h3>ProtectX</h3>
                <p>Discord anti-crash bot</p>
                <a class="btn" href="#">Live</a>
            </div>
        </div>
        <!-- Project 3 -->
        <div class="project-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/project3.png" alt="project3" />
            <div class="project-info">
                <div class="tech">CSS Express Node.js</div>
                <h3>Kahoot Answers Viewer</h3>
                <p>Get answers to your kahoot quiz</p>
                <a class="btn" href="#">Live</a>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section (Figma accurate) -->
<section id="skills">
    <div class="skills-title-row">
      <span class="skills-title">#skills</span>
      <span class="skills-title-line"></span>
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
  <div class="aboutme-left">
    <div class="aboutme-title-row">
      <span class="aboutme-title">#about-me</span>
      <span class="aboutme-title-line"></span>
    </div>
    <div class="aboutme-text">
      <p class="aboutme-intro">Hello, I'm Xitiz!</p>
      <p>I'm a self-taught front-end developer based in Kyiv, Ukraine. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.</p>
      <p>Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.</p>
    </div>
    <a class="aboutme-btn" href="#">Read more →</a>
  </div>
  <div class="aboutme-right">
    <div class="aboutme-img-wrap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hooded1.png" alt="Xitiz" class="aboutme-img" />
      <div class="aboutme-dotgrid aboutme-dotgrid-1">
        <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
      </div>
      <div class="aboutme-dotgrid aboutme-dotgrid-2">
        <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
      </div>
      <div class="aboutme-square"></div>
    </div>
  </div>
</section>

<!-- Contacts Section (Figma accurate) -->
<section id="contacts">
  <div class="contacts-header-row">
    <span class="contacts-title">#contacts</span>
    <span class="contacts-title-line"></span>
  </div>
  <div class="contacts-main-row">
    <div class="contacts-left">
      <div class="contacts-dotgrid">
        <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
      </div>
      <div class="contacts-text">
        <?php echo nl2br(esc_html(get_theme_mod('home_contacts_text'))); ?>
      </div>
    </div>
    <div class="contacts-right">
      <div class="contacts-box">
        <div class="contacts-box-title">Message me here</div>
        <?php
        $contacts = [
          [ 'icon' => 'fab fa-discord',   'url' => get_theme_mod('contacts_discord'),   'label' => 'Discord' ],
          [ 'icon' => 'fas fa-envelope',  'url' => get_theme_mod('contacts_email'),    'label' => 'Email' ],
          [ 'icon' => 'fab fa-twitter',   'url' => get_theme_mod('contacts_twitter'),  'label' => 'Twitter' ],
          [ 'icon' => 'fab fa-github',    'url' => get_theme_mod('contacts_github'),   'label' => 'GitHub' ],
          [ 'icon' => 'fab fa-linkedin',  'url' => get_theme_mod('contacts_linkedin'), 'label' => 'LinkedIn' ],
          [ 'icon' => 'fab fa-instagram', 'url' => get_theme_mod('contacts_instagram'),'label' => 'Instagram' ],
          [ 'icon' => 'fab fa-whatsapp',  'url' => get_theme_mod('contacts_whatsapp'), 'label' => 'WhatsApp' ],
        ];
        foreach ($contacts as $c) {
          if (!empty($c['url'])) {
            $url = $c['url'];
            if ($c['label'] === 'Email' && strpos($url, 'mailto:') !== 0) {
              $url = 'mailto:' . $url;
            }
            echo '<div class="contacts-box-row"><a href="' . esc_url($url) . '" target="_blank"><i class="' . esc_attr($c['icon']) . '"></i> ' . esc_html($c['label']) . '</a></div>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?> 