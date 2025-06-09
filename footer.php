   
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
        $footer_social_links = [
          [ 'icon' => 'fab fa-github',    'url' => get_theme_mod( 'home_contacts_github' ) ],
          [ 'icon' => 'fab fa-discord',   'url' => get_theme_mod( 'home_contacts_discord' ) ],
          [ 'icon' => 'fab fa-twitter',   'url' => get_theme_mod( 'home_contacts_twitter' ) ],
          [ 'icon' => 'fab fa-linkedin',  'url' => get_theme_mod( 'home_contacts_linkedin' ) ],
          [ 'icon' => 'fab fa-instagram', 'url' => get_theme_mod( 'home_contacts_instagram' ) ],
          [ 'icon' => 'fab fa-whatsapp',  'url' => get_theme_mod( 'home_contacts_whatsapp' ) ],
          [ 'icon' => 'fas fa-envelope',  'url' => get_theme_mod( 'home_contacts_email' ) ],

        ];
        
        foreach ( $footer_social_links as $link ) :
          if ( ! empty( $link['url'] ) ) : ?>
            <a href="<?php echo esc_url( $link['url'] ); ?>" target="_blank" rel="noopener noreferrer">
              <i class="<?php echo esc_attr( $link['icon'] ); ?>"></i>
            </a>
          <?php endif;
        endforeach; ?>
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