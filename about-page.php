<?php
/* Template Name: About */
get_header();
$options = function_exists('my_portfolio_get_about_options') ? my_portfolio_get_about_options() : array();
?>
<main class="about-main">
    <section class="about-hero">
        <h2 class="section-title"><span class="slash">/</span>about-me</h2>
        <p class="subtitle"><?php echo esc_html($options['hero_title'] ?? 'Who am i?'); ?></p>
        <div class="about-flex">
            <div class="about-info">
                <p><?php echo esc_html($options['hero_subtitle'] ?? "Hello, i'm Xitiz!"); ?></p>
                <p><?php echo nl2br(esc_html($options['info'] ?? '')); ?></p>
            </div>
            <div class="about-img-deco">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/me.jpg" alt="Xitiz" /> 
                <div class="dot-grid">
                    <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section (Figma accurate, but using about-options.php settings) -->
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
                <div class="skill-card-title">Languages</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($options['skills_languages'] ?? '')); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Databases</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($options['skills_databases'] ?? '')); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Tools</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($options['skills_tools'] ?? '')); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Other</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($options['skills_other'] ?? '')); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Frameworks</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($options['skills_frameworks'] ?? '')); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="fun-facts">
        <h2 class="section-title">#my-fun-facts</h2>
        <div class="facts-list">
            <?php foreach (explode("\n", $options['fun_facts'] ?? '') as $fact) : if (trim($fact)) : ?>
                <span class="fact"><?php echo esc_html($fact); ?></span>
            <?php endif; endforeach; ?>
        </div>
        <div class="dot-grid" style="right:5%;top:80%;position:absolute;">
            <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 