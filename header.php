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
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'header-nav',
                    ) );
                } else {
                    // Fallback for when the menu is not set
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="active">#home</a>
                    <a href="#">#works</a>
                    <a href="#">#about-me</a>
                    <a href="#">#contacts</a>
                    <?php
                }
                ?>
                <span class="lang">EN</span>
            </nav>
        </header>

