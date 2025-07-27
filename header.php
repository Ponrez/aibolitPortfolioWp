<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<?php 
$logo_id = carbon_get_post_meta(get_the_ID(), 'main_logo');
?>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__container">
      <div class="header__logo">
        <img src="<?php echo esc_url(wp_get_attachment_image_url($logo_id, 'full')); ?>" alt="Логотип">
      </div>
      <nav class="header__nav">
          <?php 
          wp_nav_menu([
            'theme_location' => 'menu_main_header',
            'container' => false,
            'menu_class' => 'header__list',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            'add_li_class' => 'header__item',
            'link_class' => 'header__link',
            'walker' => new Custom_Nav_Walker(),
            'fallback_cb' => false,
          ]); 
          ?>
      </nav>
      <button class="burger-menu">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
      </button>
    </div>
  </header>