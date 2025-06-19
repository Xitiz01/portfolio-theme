<?php
$options = function_exists('my_portfolio_get_contacts_options') ? my_portfolio_get_contacts_options() : array();
?>
<!-- Footer (Figma accurate) -->
<footer class="footer-minimal">
  <div class="footer-row">
    <div class="footer-left">
      <div class="footer-identity">
        <?php
          // You can also use a custom SVG for the user icon for consistency
          // For now, we'll keep the Font Awesome one but add a check.
          // Or better, create a my_portfolio_svg_user() function.
        ?>
        <?php echo my_portfolio_svg_user('footer-svg-icon', 20); ?>             
        <b><?php echo esc_html( get_theme_mod( 'footer_name', 'Xitiz' ) ); ?></b> 
        <span class="footer-email"><?php echo esc_html( get_theme_mod( 'footer_email', 'kshitizkhan0138@gmail.com' ) ); ?></span>
      </div>
      <div class="footer-role"><?php echo esc_html( get_theme_mod( 'footer_role', 'Web designer and front-end developer WP Backend Developer' ) ); ?></div>
    </div>
    <div class="footer-right">
      <div class="footer-media-title">Media</div>
      <div class="footer-contacts-box">

        <!-- Buy me a coffee -->
        <?php if (!empty($options['support'])): ?>  
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['support']); ?>" target="_blank">
              <?php echo my_portfolio_svg_buy_me_a_coffee(); ?> 
            </a>
          </div>
        <?php endif; ?> 

        <!-- Email -->
        <?php if (!empty($options['email'])): ?>
          <div class="footer-contacts-box-row">
            <a href="mailto:<?php echo esc_attr($options['email']); ?>" target="_blank">
              <?php echo my_portfolio_svg_email('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?> 

        <!-- Upwork -->
        <?php if (!empty($options['upwork'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['upwork']); ?>" target="_blank">
              <?php echo my_portfolio_svg_upwork('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>


        <!-- Fiverr -->
        <?php if (!empty($options['fiverr'])): ?>
          <div class="footer-contacts-box-row">
              <a href="<?php echo esc_url($options['fiverr']); ?>" target="_blank">
              <?php echo my_portfolio_svg_fiverr('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>

        
        <!-- Discord -->
        <?php if (!empty($options['discord'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['discord']); ?>" target="_blank">
              <?php echo my_portfolio_svg_discord('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>
        
        <!-- WhatsApp -->
        <?php if (!empty($options['whatsapp'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['whatsapp']); ?>" target="_blank">
              <?php echo my_portfolio_svg_whatsapp('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>

        <!-- LinkedIn -->
        <?php if (!empty($options['linkedin'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['linkedin']); ?>" target="_blank">
              <?php echo my_portfolio_svg_linkedin('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>

        <!-- X -->
        <?php if (!empty($options['twitter'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['twitter']); ?>" target="_blank">
              <?php echo my_portfolio_svg_x('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>


        <!-- GitHub -->
        <?php if (!empty($options['github'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['github']); ?>" target="_blank">
              <?php echo my_portfolio_svg_github('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>


        <!-- Instagram -->
        <?php if (!empty($options['instagram'])): ?>
          <div class="footer-contacts-box-row">
            <a href="<?php echo esc_url($options['instagram']); ?>" target="_blank">
              <?php echo my_portfolio_svg_instagram('footer-svg-icon', 20); ?> 
            </a>
          </div>
        <?php endif; ?>


        


      </div>
    </div>
  </div>
  <div class="footer-copyright">
    © Copyright <?php echo esc_html( get_theme_mod( 'footer_copyright_year', date('Y') ) ); ?>. <?php echo esc_html( get_theme_mod( 'footer_copyright_text', 'Made with ❤️ by Xitiz' ) ); ?>
  </div>
</footer>
</body>
</html>

