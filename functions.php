<?php

add_action('wp_enqueue_scripts', function(){
  wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');
  wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');

  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true);
});

add_theme_support('title-tag');

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
  require_once('includes/carbon-fields/vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/cf-options/theme-options.php' );
}

add_action('after_setup_theme', 'theme_support');
function theme_support(){
  register_nav_menu('menu_main_header', 'Меню в шапке');
}


class Custom_Nav_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="header__list">';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="header__item ' . esc_attr($class_names) . '"' : ' class="header__item"';

        $output .= '<li' . $class_names .'>';

        $attributes = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
        $attributes .= ! empty($item->target) ? ' target="' . esc_attr($item->target) .'"' : '';
        $attributes .= ! empty($item->xfn) ? ' rel="'    . esc_attr($item->xfn) .'"' : '';
        $attributes .= ! empty($item->url) ? ' href="'   . esc_attr($item->url) .'"' : '';

        $item_output = $args->link_before ?? '';
        $item_output .= '<a class="header__link"' . $attributes .'>';
        $item_output .= ($args->link_before ?? '') . apply_filters('the_title', $item->title, $item->ID) . ($args->link_after ?? '');
        $item_output .= '</a>';
        $item_output .= $args->link_after ?? '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}