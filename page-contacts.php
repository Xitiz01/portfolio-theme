<?php
/* Template Name: Contacts */
get_header();
$options = function_exists('my_portfolio_get_contacts_options') ? my_portfolio_get_contacts_options() : array();
?>
<main class="contacts-main">
    <section class="contacts-hero">
        <h2 class="section-title"><span class="slash">/</span>contacts</h2>
        <p class="subtitle"><?php echo esc_html($options['hero_title'] ?? 'Who am i?'); ?></p>
        <div class="contacts-flex">
            <div class="contacts-info">
                <p><?php echo nl2br(esc_html($options['hero_text'] ?? '')); ?></p>
            </div>
            <div class="contacts-boxes">
                <div class="contact-box">
                    <strong>Support me here</strong>
                    <div><?php echo esc_html($options['support'] ?? ''); ?></div>
                </div>
                <div class="contact-box">
                    <strong>Message me here</strong>
                    <?php if (!empty($options['discord'])): ?><div><i class="fab fa-discord"></i> <?php echo esc_html($options['discord']); ?></div><?php endif; ?>
                    <?php if (!empty($options['email'])): ?><div><i class="fas fa-envelope"></i> <?php echo esc_html($options['email']); ?></div><?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="all-media">
        <h2 class="section-title">#all-media</h2>
        <div class="media-list">
            <?php foreach (explode("\n", $options['media_list'] ?? '') as $media) : if (trim($media)) : ?>
                <span><?php echo esc_html($media); ?></span>
            <?php endif; endforeach; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 