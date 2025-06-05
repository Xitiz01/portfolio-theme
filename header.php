<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="portfolio-landing">
        <header>
            <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></div>
            <nav>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php if (is_front_page()) echo 'active'; ?>">#home</a>
    <a href="<?php echo esc_url( site_url( '/projects/' ) ); ?>" class="<?php if (is_page('projects')) echo 'active'; ?>">#works</a>
    <a href="<?php echo esc_url( site_url( '/about/' ) ); ?>" class="<?php if (is_page('about')) echo 'active'; ?>">#about-me</a>
    <a href="<?php echo esc_url( site_url( '/contacts/' ) ); ?>" class="<?php if (is_page('contacts')) echo 'active'; ?>">#contacts</a>
    <span class="lang">EN</span>
</nav>
        </header>

</body>
</html> 