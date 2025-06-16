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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hooded2.png" alt="Xitiz" />
                <div class="dot-grid">
                    <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <h2 class="section-title">#skills</h2>
        <div class="skills-list">
            <div class="skill-box"><strong>Languages</strong><br><?php echo esc_html($options['skills_languages'] ?? ''); ?></div>
            <div class="skill-box"><strong>Other</strong><br><?php echo esc_html($options['skills_other'] ?? ''); ?></div>
            <div class="skill-box"><strong>Tools</strong><br><?php echo esc_html($options['skills_tools'] ?? ''); ?></div>
            <div class="skill-box"><strong>Databases</strong><br><?php echo esc_html($options['skills_databases'] ?? ''); ?></div>
            <div class="skill-box"><strong>Frameworks</strong><br><?php echo esc_html($options['skills_frameworks'] ?? ''); ?></div>
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