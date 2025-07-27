<?php
/*
Template Name: home
*/
?>

<?php 
$main_img = carbon_get_post_meta(get_the_ID(), 'main_img');
$main_img_alt = carbon_get_post_meta(get_the_ID(), 'main_img_alt');
$main_title = carbon_get_post_meta(get_the_ID(), 'main_title');
$main_btn = carbon_get_post_meta(get_the_ID(), 'main_btn');
$main_phone_number = carbon_get_post_meta(get_the_ID(), 'main_phone_number');
$main_phone = carbon_get_post_meta(get_the_ID(), 'main_phone');

$bird_digit = carbon_get_post_meta(get_the_ID(), 'bird_digit');
$bird_title = carbon_get_post_meta(get_the_ID(), 'bird_title');
$bird_img = carbon_get_post_meta(get_the_ID(), 'bird_img');
$bird_img_text = carbon_get_post_meta(get_the_ID(), 'bird_img_text');

$choice_title = carbon_get_post_meta(get_the_ID(), 'choice_title');

$soon_img1 = carbon_get_post_meta(get_the_ID(), 'soon_img1');
$soon_img2 = carbon_get_post_meta(get_the_ID(), 'soon_img2');
$soon_img_main = carbon_get_post_meta(get_the_ID(), 'soon_img_main');
$soon_up = carbon_get_post_meta(get_the_ID(), 'soon_up');
$soon_title_line1 = carbon_get_post_meta(get_the_ID(), 'soon_title_line1');
$soon_title_line2 = carbon_get_post_meta(get_the_ID(), 'soon_title_line2');
$soon_img1_link = carbon_get_post_meta(get_the_ID(), 'soon_img1_link');
$soon_img1_text = carbon_get_post_meta(get_the_ID(), 'soon_img1_text');
$soon_img2_link = carbon_get_post_meta(get_the_ID(), 'soon_img2_link');
$soon_img2_text = carbon_get_post_meta(get_the_ID(), 'soon_img2_text');

$contacts_title = carbon_get_post_meta(get_the_ID(), 'contacts_title');
?>

<?php get_header() ?>
  <main>
    <section class="main">
      <div class="main__container">
        <div class="main__left">
          <h1 class="main__title"><?php echo esc_html($main_title); ?></h1>
          <button id="open-modal-btn" class="main__btn"><?php echo esc_html($main_btn); ?></button>
          <?php 
          $social_links = carbon_get_post_meta(get_the_ID(), 'social_links');
          if ($social_links): 
          ?>
          <div class="main__social">
            <?php 
            foreach ($social_links as $social): 
              if (!empty($social['main_icon_svg']) && !empty($social['main_icon_url'])): 
            ?>
            <a href="<?php echo esc_url($social['main_icon_url']); ?>" class="main__link" target="_blank">
              <img src="<?php echo esc_url(wp_get_attachment_image_url($social['main_icon_svg'], 'full')); ?>" alt="<?php echo esc_attr($social['main_icon_svg_text']); ?>">
            </a>
            <?php 
              endif; 
              endforeach; 
            ?>
          </div>
          <?php endif; ?>
        </div>
        <div class="main__right">
          <img src="<?php echo esc_url(wp_get_attachment_image_url($main_img, 'full')); ?>" alt="<?php echo esc_attr($main_img_alt ?: 'Главное изображение'); ?>" class="main__photo">

          <a href="tel:<?php echo esc_attr($main_phone_number); ?>" class="main__phone"><?php echo esc_html($main_phone); ?></a>
        </div>
      </div>
    </section>
    <section class="services" id="services">
      <div class="services__container">
        <h2 class="services__title hidden">Наши услуги</h2>
        <div class="services__items">
        <?php
          $services_cards = carbon_get_post_meta(get_the_ID(), 'services_cards');
          foreach ($services_cards as $card):
        ?>
          <div class="services__item">
            <div class="services__item-title"><?php echo esc_html($card['services_card_title']); ?></div>
            <div class="services__item-footer">
              <div class="services__item-subtitle"><?php echo esc_html($card['services_card_count']); ?></div>
              <img src="<?php echo esc_url(wp_get_attachment_image_url($card['services_card_img'], 'full')); ?>" alt="<?php echo esc_attr($card['services_card_img_text']); ?>" class="services__item-img">
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="bird">
      <div class="bird__container">
        <div class="bird__top">
          <div class="bird__wrapper">
            <span class="bird__digit"><?php echo esc_html($bird_digit); ?></span>
            <h2 class="bird__title"><span class="hidden"><?php echo esc_html($bird_digit); ?></span> <?php echo esc_html($bird_title); ?></h2>
          </div>
        </div>
        <img src="<?php echo esc_url(wp_get_attachment_image_url($bird_img, 'full')); ?>" alt="<?php echo esc_attr($bird_img_text); ?>" class="bird__img">
      </div>
    </section>
    <section class="choice" id="choice">
      <div class="choice__container">
        <h2 class="choice__title"><?php echo esc_html($choice_title); ?></h2>
        <div class="choice__items">
        <?php
          $choice_cards = carbon_get_post_meta(get_the_ID(), 'choice_cards');
          foreach ($choice_cards as $card):
        ?>
          <div class="choice__item">
            <h3 class="choice__item-title"><?php echo esc_html($card['choice_card_title']); ?></h3>
            <div class="choice__item-bottom">
              <img src="<?php echo esc_url(wp_get_attachment_image_url($card['choice_card_img'], 'full')); ?>" alt="<?php echo esc_attr($card['choice_card_img_text']); ?>" class="choice__item-img">
              <div class="choice__item-descr"><?php echo wp_kses_post($card['choice_card_descr']); ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <section class="soon" id="soon">
      <div class="soon__container">
        <div class="soon__left">
          <span class="soon__text"><?php echo esc_html($soon_up); ?></span>
          <h2 class="soon__title"><?php echo esc_html($soon_title_line1); ?><br class="none-1440">
            <?php echo esc_html($soon_title_line2); ?></h2>
          <div class="soon__imgs">
            <a href="<?php echo esc_url($soon_img1_link); ?>"><img class="soon__img-aps" src="<?php echo esc_url(wp_get_attachment_image_url($soon_img1, 'full')); ?>" alt="<?php echo esc_attr($soon_img1_text); ?>"></a>
            <a href="<?php echo esc_url($soon_img2_link); ?>"><img class="soon__img-aps" src="<?php echo esc_url(wp_get_attachment_image_url($soon_img2, 'full')); ?>" alt="<?php echo esc_attr($soon_img2_text); ?>"></a>
          </div>
        </div>
        <img class="soon__img" src="<?php echo esc_url(wp_get_attachment_image_url($soon_img_main, 'full')); ?>" alt="<?php echo esc_attr(carbon_get_post_meta(get_the_ID(), 'soon_img_main_text')); ?>">
      </div>
    </section>
    <section class="contacts" id="contacts">
      <div class="contacts__container">
        <h2 class="contacts__title"><?php echo esc_html($contacts_title); ?></h2>
        <div class="contacts__wrapper">
          <div class="contacts__left">

            <?php
              $contacts_blocks = carbon_get_post_meta(get_the_ID(), 'contacts_blocks');
              foreach ($contacts_blocks as $block):
            ?>

            <div class="contacts__left-item">
              <h3 class="contacts__subtitle"><?php echo esc_html($block['contacts_card_title']); ?></h3>
              <div class="contacts__element-wrapper contacts__element-wrapper--first">
                <img src="<?php echo esc_url(wp_get_attachment_image_url($block['contacts_card_street_img'], 'full')); ?>" alt="<?php echo esc_attr($block['contacts_card_street_img_text']); ?>">
                <div class="contacts__element"><?php echo esc_html($block['contacts_card_street']); ?><br>
                  <?php echo esc_html($block['contacts_card_street2']); ?></div>
              </div>
              <div class="contacts__element-wrapper">
                <img src="<?php echo esc_url(wp_get_attachment_image_url($block['contacts_card_phone_img'], 'full')); ?>" alt="<?php echo esc_attr($block['contacts_card_phone_img_text']); ?>">
                <a href="tel:<?php echo esc_attr($block['contacts_card_phone_digit']); ?>" class="contacts__element contacts__element--phone"><?php echo esc_html($block['contacts_card_phone']); ?></a>
              </div>
              <div class="contacts__element-wrapper">
                <img src="<?php echo esc_url(wp_get_attachment_image_url($block['contacts_card_time_img'], 'full')); ?>" 
                    alt="<?php echo esc_attr($block['contacts_card_time_text']); ?>">
                <div class="contacts__element contacts__element--time">
                  <?php echo esc_html($block['contacts_card_time']); ?>
                </div>
              </div>
            </div>

          <?php endforeach; ?>

          </div>
          <iframe class="contacts__map"
            src="https://yandex.ru/map-widget/v1/?um=constructor%3A6a093d736bb470b2654485d6f553ea640e74de544b31241787129ed749f71694&amp;source=constructor"
            width="950" height="526"></iframe>
        </div>
      </div>
    </section>
  </main>
<?php get_footer(); ?>