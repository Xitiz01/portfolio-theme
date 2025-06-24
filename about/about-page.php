<?php
/* Template Name: About */
get_header();

// Get options with proper error handling
$options = array();
if (function_exists('my_portfolio_get_about_options')) {
    $options = my_portfolio_get_about_options();
}

// Ensure we have default values
$hero_title = isset($options['hero_title']) ? $options['hero_title'] : 'Who am i?';
$hero_subtitle = isset($options['hero_subtitle']) ? $options['hero_subtitle'] : "Hello, i'm Xitiz!";
$info = isset($options['info']) ? $options['info'] : '';
$skills_languages = isset($options['skills_languages']) ? $options['skills_languages'] : '';
$skills_databases = isset($options['skills_databases']) ? $options['skills_databases'] : '';
$skills_tools = isset($options['skills_tools']) ? $options['skills_tools'] : '';
$skills_other = isset($options['skills_other']) ? $options['skills_other'] : '';
$skills_frameworks = isset($options['skills_frameworks']) ? $options['skills_frameworks'] : '';
$fun_facts = isset($options['fun_facts']) ? $options['fun_facts'] : '';
?>
<main class="about-main">
    <section class="about-hero">
        <h2 class="section-title"><span class="slash">/</span>about-me</h2>
        <p class="subtitle"><?php echo esc_html($hero_title); ?></p>
        <div class="about-flex">
            <div class="about-info">
                <p><?php echo esc_html($hero_subtitle); ?></p>
                <p><?php echo nl2br(esc_html($info)); ?></p>
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
                <div class="skill-card-list"><?php echo nl2br(esc_html($skills_languages)); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Databases</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($skills_databases)); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Tools</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($skills_tools)); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Other</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($skills_other)); ?></div>
                </div>
                <div class="skill-card">
                <div class="skill-card-title">Frameworks</div>
                <div class="skill-card-list"><?php echo nl2br(esc_html($skills_frameworks)); ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="fun-facts">
        <h2 class="section-title">#my-fun-facts</h2>
        <div class="facts-list">
            <?php 
            if (!empty($fun_facts)) {
                $facts_array = explode("\n", $fun_facts);
                foreach ($facts_array as $fact) {
                    $fact = trim($fact);
                    if (!empty($fact)) {
                        echo '<span class="fact">' . esc_html($fact) . '</span>';
                    }
                }
            }
            ?>
        </div>
        <div class="dot-grid" style="right:5%;top:80%;position:absolute;">
            <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 