<?php
/**
 * Sitemap generator
 *
 * @package My_Portfolio
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Generate the XML sitemap
 */
function my_portfolio_generate_sitemap() {
    $postsForSitemap = get_posts(array(
        'numberposts' => -1,
        'orderby'     => 'modified',
        'post_type'   => array('post', 'page'),
        'order'       => 'DESC'
    ));

    $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
    $sitemap .= '<?xml-stylesheet type="text/xsl" href="' . esc_url( home_url( '/' ) ) . 'sitemap.xsl"?>';
    $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

    foreach ($postsForSitemap as $post) {
        setup_postdata($post);

        $post_date = get_the_modified_date('c', $post);

        $sitemap .= '<url>' .
            '<loc>' . get_permalink($post) . '</loc>' .
            '<lastmod>' . $post_date . '</lastmod>' .
            '<changefreq>monthly</changefreq>' .
            '<priority>0.8</priority>' .
            '</url>';
    }

    wp_reset_postdata();

    $sitemap .= '</urlset>';

    // Output the sitemap with the correct header.
    header('Content-Type: application/xml; charset=utf-8');
    echo $sitemap;
    exit;
}

/**
 * Add a rewrite rule for the sitemap.
 */
function my_portfolio_add_sitemap_rewrite_rule() {
    add_rewrite_rule('sitemap\.xml$', 'index.php?sitemap=true', 'top');
}
add_action('init', 'my_portfolio_add_sitemap_rewrite_rule');

/**
 * Check for the sitemap query variable and trigger the sitemap generation.
 *
 * @param array $query_vars
 * @return array
 */
function my_portfolio_add_sitemap_query_var($query_vars) {
    $query_vars[] = 'sitemap';
    return $query_vars;
}
add_filter('query_vars', 'my_portfolio_add_sitemap_query_var');

/**
 * Load the sitemap template.
 */
function my_portfolio_load_sitemap_template() {
    if (get_query_var('sitemap')) {
        my_portfolio_generate_sitemap();
    }
}
add_action('template_redirect', 'my_portfolio_load_sitemap_template'); 