<?php
/* Template Name: Contacts */
get_header();
$options = function_exists('my_portfolio_get_contacts_options') ? my_portfolio_get_contacts_options() : array();
?>
<main class="contacts-main">
    <section id="contacts">
      <div class="contacts-header-row">
        <span class="contacts-title">/ contacts</span>
        <span class="contacts-title-line"></span>
      </div>
      <div class="contacts-main-row">
        <div class="contacts-left">
          <div class="contacts-dotgrid">
            <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
          </div>
          <div class="contacts-text">
            <h2 class="section-title"><?php echo esc_html($options['hero_title'] ?? 'Who am i?'); ?></h2>
            <?php echo nl2br(esc_html($options['hero_text'] ?? '')); ?>
          </div>
        </div>
        <div class="contacts-right">
          <?php if (!empty($options['support']) ||!empty($options['upwork']) || !empty($options['fiverr'])): ?>
          <div class="contacts-box">
            <div class="contacts-box-title"><?php echo esc_html($options['support_label'] ?? 'Support me here'); ?></div>
            <?php if (!empty($options['support'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['support']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_buy_me_a_coffee(); ?> Buy-me-a-coffee
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['upwork'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['upwork']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_upwork('footer-svg-icon', 20); ?> Upwork
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['fiverr'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['fiverr']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_fiverr('footer-svg-icon', 20); ?> Fiverr
                </a>
              </div>
            <?php endif; ?>
          </div>
          <?php endif; ?> 
          <?php if (!empty($options['discord']) ||!empty($options['email']) || !empty($options['whatsapp']) || !empty($options['linkedin']) || !empty($options['twitter']) || !empty($options['github']) || !empty($options['instagram'])): ?>
          <div class="contacts-box">
            <div class="contacts-box-title"><?php echo esc_html($options['message_label'] ?? 'lets get connected'); ?></div>
            <?php if (!empty($options['discord'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['discord']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_discord('footer-svg-icon', 20); ?> Discord
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['email'])): ?>
              <div class="contacts-box-row">
                <a href="mailto:<?php echo esc_attr($options['email']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_email('footer-svg-icon', 20); ?> Email
                </a>
              </div>
            <?php endif; ?> 
            <?php if (!empty($options['whatsapp'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['whatsapp']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_whatsapp('footer-svg-icon', 20); ?> WhatsApp
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['linkedin'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['linkedin']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_linkedin('footer-svg-icon', 20); ?> LinkedIn
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['twitter'])): ?>  
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['twitter']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_x('footer-svg-icon', 20); ?> X
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['github'])): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['github']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_github('footer-svg-icon', 20); ?> GitHub  
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($options['instagram'])): ?>  
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($options['instagram']); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_instagram('footer-svg-icon', 20); ?> Instagram
                </a>
              </div>  
            <?php endif; ?>         
          </div>
          <?php endif; ?>
        </div>    
      </div>  
    </section>  
    <!-- Testimonials Section --> 
    <?php if (!empty($options['testimonials'])): ?>
    <section class="testimonials-section">  
        <h2 class="section-title">#testimonials</h2>  
        <div class="testimonials-list" style="display: flex; flex-wrap: wrap; gap: 18px 24px;">
            <?php 
            $testimonials = array_filter(array_map('trim', explode("\n", $options['testimonials'] ?? '')));
            foreach ($testimonials as $testimonial) : 
                $parts = array_map('trim', explode('|', $testimonial));
                $name = $parts[0] ?? '';
                $role = $parts[1] ?? '';  
                $text = $parts[2] ?? '';
                if ($name && $text): ?>
                <div class="contacts-box" style="min-width:260px;max-width:340px;">
                    <div class="contacts-box-title" style="margin-bottom:6px;"><span><?php echo esc_html($name); ?></span><?php if ($role) echo ' <span style="color:#bfc2c7;font-weight:400;font-size:0.95em;">(' . esc_html($role) . ')</span>'; ?></div>
                    <div class="contacts-box-row" style="font-style:italic; color:#bfc2c7;">"<?php echo esc_html($text); ?>"</div>
                </div>
                <?php endif;
            endforeach; ?>
        </div>
      </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>  