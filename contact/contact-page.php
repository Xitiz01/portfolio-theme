<?php
/* Template Name: Contacts */
get_header();

// Get options with proper error handling
$options = array();
if (function_exists('my_portfolio_get_contacts_options')) {
    $options = my_portfolio_get_contacts_options();
}

// Ensure we have default values
$hero_title = isset($options['hero_title']) ? $options['hero_title'] : 'Who am i?';
$hero_text = isset($options['hero_text']) ? $options['hero_text'] : '';
$support = isset($options['support']) ? $options['support'] : '';
$upwork = isset($options['upwork']) ? $options['upwork'] : '';
$fiverr = isset($options['fiverr']) ? $options['fiverr'] : '';
$support_label = isset($options['support_label']) ? $options['support_label'] : 'Support me here';
$message_label = isset($options['message_label']) ? $options['message_label'] : 'lets get connected';
$discord = isset($options['discord']) ? $options['discord'] : '';
$email = isset($options['email']) ? $options['email'] : '';
$whatsapp = isset($options['whatsapp']) ? $options['whatsapp'] : '';
$linkedin = isset($options['linkedin']) ? $options['linkedin'] : '';
$twitter = isset($options['twitter']) ? $options['twitter'] : '';
$github = isset($options['github']) ? $options['github'] : '';
$instagram = isset($options['instagram']) ? $options['instagram'] : '';
$testimonials = isset($options['testimonials']) ? $options['testimonials'] : '';
?>
<main class="contacts-main">
    <section id="contacts">
      <div class="contacts-header-row">
        <span class="contacts-title">#contacts</span>
        <span class="contacts-title-line"></span>
      </div>
      <div class="contacts-main-row">
        <div class="contacts-left">
          <div class="contacts-dotgrid">
            <?php for($i=0;$i<16;$i++) echo '<span></span>'; ?>
          </div>
          <div class="contacts-text">
            <h2 class="section-title"><?php echo esc_html($hero_title); ?></h2>
            <?php echo nl2br(esc_html($hero_text)); ?>
          </div>
        </div>
        <div class="contacts-right">
          <?php if (!empty($support) || !empty($upwork) || !empty($fiverr)): ?>
          <div class="contacts-box">
            <div class="contacts-box-title"><?php echo esc_html($support_label); ?></div>
            <?php if (!empty($support)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($support); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_buy_me_a_coffee(); ?> Buy-me-a-coffee
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($upwork)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($upwork); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_upwork('footer-svg-icon', 20); ?> Upwork
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($fiverr)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($fiverr); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_fiverr('footer-svg-icon', 20); ?> Fiverr
                </a>
              </div>
            <?php endif; ?>
          </div>
          <?php endif; ?> 
          <?php if (!empty($discord) || !empty($email) || !empty($whatsapp) || !empty($linkedin) || !empty($twitter) || !empty($github) || !empty($instagram)): ?>
          <div class="contacts-box">
            <div class="contacts-box-title"><?php echo esc_html($message_label); ?></div>
            <?php if (!empty($discord)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($discord); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_discord('footer-svg-icon', 20); ?> Discord
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($email)): ?>
              <div class="contacts-box-row">
                <a href="mailto:<?php echo esc_attr($email); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_email('footer-svg-icon', 20); ?> Email
                </a>
              </div>
            <?php endif; ?> 
            <?php if (!empty($whatsapp)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($whatsapp); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_whatsapp('footer-svg-icon', 20); ?> WhatsApp
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($linkedin)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_linkedin('footer-svg-icon', 20); ?> LinkedIn
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($twitter)): ?>  
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($twitter); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_x('footer-svg-icon', 20); ?> X
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($github)): ?>
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($github); ?>" target="_blank" style="color:inherit;text-decoration:none;">
                  <?php echo my_portfolio_svg_github('footer-svg-icon', 20); ?> GitHub  
                </a>
              </div>
            <?php endif; ?>
            <?php if (!empty($instagram)): ?>  
              <div class="contacts-box-row">
                <a href="<?php echo esc_url($instagram); ?>" target="_blank" style="color:inherit;text-decoration:none;">
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
    <?php if (!empty($testimonials)): ?>
    <section class="testimonials-section">  
        <h2 class="section-title">#testimonials</h2>  
        <div class="testimonials-list" style="display: flex; flex-wrap: wrap; gap: 18px 24px;">
            <?php 
            $testimonials_array = array_filter(array_map('trim', explode("\n", $testimonials)));
            foreach ($testimonials_array as $testimonial) : 
                $parts = array_map('trim', explode('|', $testimonial));
                $name = isset($parts[0]) ? $parts[0] : '';
                $role = isset($parts[1]) ? $parts[1] : '';  
                $text = isset($parts[2]) ? $parts[2] : '';
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