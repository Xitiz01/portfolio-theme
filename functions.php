<?php
function my_portfolio_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('my-portfolio-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;700&display=swap', false);
    // Main CSS
    wp_enqueue_style('my-portfolio-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    // Font Awesome (optional)
    wp_enqueue_style('my-portfolio-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', false);
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_assets'); 