   
<!-- Footer (Figma accurate) -->
<footer class="footer-minimal">
  <div class="footer-row">
    <div class="footer-left">
      <div class="footer-identity">
        <i class="fas fa-user"></i> 
        <b><?php echo esc_html( get_theme_mod( 'footer_name', 'Xitiz' ) ); ?></b> 
        <span class="footer-email"><?php echo esc_html( get_theme_mod( 'footer_email', 'xitiz@xitiz-dev.ml' ) ); ?></span>
      </div>
      <div class="footer-role"><?php echo esc_html( get_theme_mod( 'footer_role', 'Web designer and front-end developer' ) ); ?></div>
    </div>
    <div class="footer-right">
      <div class="footer-media-title">Media</div>
      <div class="footer-media-icons">
        <?php 
        $social_links = [
          [ 'icon' => 'fab fa-github',    'url' => get_theme_mod( 'home_contacts_github' ), 'label' => 'GitHub' ],
          [ 'icon' => 'fab fa-discord',   'url' => get_theme_mod( 'home_contacts_discord' ), 'label' => 'Discord' ],
          [ 'icon' => 'fab fa-x-twitter', 'url' => get_theme_mod( 'home_contacts_x' ), 'label' => 'X' ],
          [ 'icon' => 'fab fa-linkedin',  'url' => get_theme_mod( 'home_contacts_linkedin' ), 'label' => 'LinkedIn' ],
          [ 'icon' => 'fab fa-instagram', 'url' => get_theme_mod( 'home_contacts_instagram' ), 'label' => 'Instagram' ],
          [ 'icon' => 'fas fa-envelope',  'url' => get_theme_mod( 'home_contacts_email' ), 'label' => 'Email' ],
          [ 'icon' => 'fab fa-whatsapp',  'url' => get_theme_mod( 'home_contacts_whatsapp' ), 'label' => 'WhatsApp' ],
          [ 'icon' => 'upwork', 'url' => get_theme_mod('home_contacts_upwork'), 'label' => 'Upwork' ],
          [ 'icon' => 'fiverr',  'url' => get_theme_mod('home_contacts_fiverr'), 'label' => 'Fiverr' ],
        ];

        foreach ($social_links as $link) {
          if (!empty($link['url'])) {
            $url = $link['url'];
            
            // Format URLs based on type
            switch ($link['label']) {
              case 'Email':
                if (strpos($url, 'mailto:') !== 0) {
                  $url = 'mailto:' . $url;
                }
                break;
              case 'WhatsApp':
                if (strpos($url, 'https://wa.me/') !== 0) {
                  // Remove any non-numeric characters
                  $number = preg_replace('/[^0-9]/', '', $url);
                  $url = 'https://wa.me/' . $number;
                }
                break;
              case 'Upwork':
                if (strpos($url, 'https://') !== 0) {
                  $url = 'https://www.upwork.com/freelancers/' . $url;
                }
                break;
              case 'Fiverr':
                if (strpos($url, 'https://') !== 0) {
                  $url = 'https://www.fiverr.com/' . $url;
                }
                break;
              default:
                if (strpos($url, 'https://') !== 0) {
                  $url = 'https://' . $url;
                }
            }
            echo '<a href="' . esc_url($url) . '" target="_blank" rel="noopener noreferrer" class="social-link" title="' . esc_attr($link['label']) . '">';
            switch ($link['icon']) {
              case 'upwork':
                echo my_portfolio_svg_upwork('home_contacts_upwork', 20);
                break;
              case 'fiverr':
                echo my_portfolio_svg_fiverr('home_contacts_fiverr', 20);
                break;
              default:
                echo '<span class="footer-svg-icon">?</span>';
            }
            echo '<span class="screen-reader-text">' . esc_html($link['label']) . '</span>';
            echo '</a>';
          }
        } ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    &copy; Copyright <?php echo esc_html( get_theme_mod( 'footer_copyright_year', date('Y') ) ); ?>. <?php echo esc_html( get_theme_mod( 'footer_copyright_text', 'Made by Xitiz' ) ); ?>
  </div>
</footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html> 