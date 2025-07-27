<?php
$footer_logo = carbon_get_theme_option('footer_logo');
$footer_img1 = carbon_get_theme_option('footer_img1');
$footer_img2 = carbon_get_theme_option('footer_img2');
?>
  
  <footer class="footer">
    <div class="footer__container">
      <img src="<?php echo esc_url(wp_get_attachment_image_url($footer_logo, 'full')); ?>" alt="logo" class="footer__logo">
      <ul class="footer__list">

      <?php
        $footer_links = carbon_get_theme_option('footer_links');
        foreach ($footer_links as $link):
      ?>
    
        <li class="footer__item">
          <a href="<?php echo esc_url($link['footer_link_name_anchor']); ?>">
            <?php echo esc_html($link['footer_link_name']); ?>
          </a>
        </li>

      <?php endforeach; ?>

      </ul>
      <div class="footer__block">
        <div class="footer__block-top">
          <a href="<?php echo esc_url(carbon_get_theme_option('footer_img1_link')); ?>">
            <img src="<?php echo esc_url(wp_get_attachment_image_url($footer_img1, 'full')); ?>" alt="<?php echo esc_attr(carbon_get_theme_option('footer_img1_text')); ?>">
          </a>
          <a href="<?php echo esc_url(carbon_get_theme_option('footer_img2_link')); ?>">
            <img src="<?php echo esc_url(wp_get_attachment_image_url($footer_img2, 'full')); ?>" alt="<?php echo esc_attr(carbon_get_theme_option('footer_img2_text')); ?>">
          </a>
        </div>
        <div class="footer__block-bot">

        <?php
          $footer_social_links = carbon_get_theme_option('footer_social_links');
          foreach ($footer_social_links as $soc):
        ?>

          <a href="<?php echo esc_url($soc['footer_icon_url']); ?>">
            <img src="<?php echo esc_url(wp_get_attachment_image_url($soc['footer_icon_svg'], 'full')); ?>" alt="<?php echo esc_attr($soc['footer_icon_svg_text']); ?>">
          </a>
          
        <?php endforeach; ?>

        </div>
      </div>
      <div class="footer__last">
        <a target="_blank" href="http://<?php echo esc_attr(carbon_get_theme_option('footer_link_site')); ?>">
          <?php echo esc_html(carbon_get_theme_option('footer_link_site')); ?>
        </a>
        <a href="mailto:<?php echo esc_attr(carbon_get_theme_option('footer_mail')); ?>"><?php echo esc_html(carbon_get_theme_option('footer_mail')); ?></a>
      </div>
    </div>
  </footer>

  <div class="modal" id="my-modal">
    <div class="modal__box">
      <svg id="close-my-modal-btn" width="20" height="20" viewBox="0 0 20 20" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_33244_1087)">
          <path d="M6.3999 13.6L9.9999 9.99999L13.5999 6.39999" stroke="#C3B9B5" stroke-width="2" stroke-miterlimit="10"
            stroke-linecap="round" />
          <path d="M6.3999 6.39999L9.9999 9.99999L13.5999 13.6" stroke="#C3B9B5" stroke-width="2" stroke-miterlimit="10"
            stroke-linecap="round" />
        </g>
        <defs>
          <clipPath id="clip0_33244_1087">
            <rect width="20" height="20" fill="white" />
          </clipPath>
        </defs>
      </svg>
      <div class="modal__title">Оставить заявку</div>
      <input type="tel" id="phone-input" name="phone" class="modal__phone-input" placeholder="+7 (___) ___-__-__"
        required>
      <button class="modal__btn">Записаться</button>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>

</html>