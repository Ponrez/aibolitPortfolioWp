<?php

if (!defined('ABSPATH')) {
  exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Дополнительные поля')
  ->show_on_page(7)

  ->add_tab('Первый экран', [
    Field::make('image', 'main_logo', 'Логотип'),
    Field::make('image', 'main_img', 'Картинка справа')
      ->set_width(70),
    Field::make('text', 'main_img_alt', 'Alt текст для картинки')
      ->set_attribute('placeholder', 'Опишите что изображено на картинке')
      ->set_help_text('Важно для SEO и доступности сайта')
      ->set_width(30),
    Field::make('text', 'main_title', 'Заголовок'),
    Field::make('text', 'main_btn', 'Текст в кнопке'),
    Field::make('complex', 'social_links', 'Социальные сети')
      ->add_fields('main_icon', 'Социальная сеть',[
          Field::make('image', 'main_icon_svg', 'Картинка социальной сети')
            ->set_width(40),
          Field::make('text', 'main_icon_svg_text', 'Название социальной сети')
            ->set_width(30),
          Field::make('text', 'main_icon_url', 'Ссылка на соцсеть')
            ->set_width(30),
      ]),
    Field::make('text', 'main_phone', 'Телефон')
      ->set_attribute('placeholder', '+7 (___) ___-__-__')
      ->set_help_text('Формат: +7 (9999) 999-99-99'),
    Field::make('text', 'main_phone_number', 'Телефон только цифры')
      ->set_help_text('Формат: 899999999999'),
  ])
  ->add_tab('Наши услуги',[
    Field::make('complex', 'services_cards', 'Карточки')
      ->add_fields('services_card', 'Карточка', [
          Field::make('text', 'services_card_title', 'Название карточки'),
          Field::make('text', 'services_card_count', 'Количество услуг')
          ->set_help_text('Укажите количество в виде числа и также слово "услуг" в нужном склонении'),
          Field::make('image', 'services_card_img', 'Картинка карточки')
            ->set_width(50),
          Field::make('text', 'services_card_img_text', 'Описание того что изображено на картинке')
            ->set_width(50),
      ])
  ])
  ->add_tab('Третий экран',[
    Field::make('text', 'bird_digit', 'Введите число'),
    Field::make('text', 'bird_title', 'Заголовок'),
    Field::make('image', 'bird_img', 'Картинка')
      ->set_width(50),
    Field::make('text', 'bird_img_text', 'Описание к картинке')
      ->set_width(50),
  ])
  ->add_tab('Четвертый экран',[
    Field::make('text', 'choice_title', 'Заголовок'),
    Field::make('complex', 'choice_cards', 'Карточки')
      ->add_fields('choice_card', 'Карточка',[
          Field::make('text', 'choice_card_title', 'Название карточки'),
          Field::make('textarea', 'choice_card_descr', 'Описание карточки'),
          Field::make('image', 'choice_card_img', 'Картинка карточки')
            ->set_width(50),
          Field::make('text', 'choice_card_img_text', 'Описание того что изображено на картинке')
            ->set_width(50),
      ])
  ])
  ->add_tab('Пятый экран',[
    Field::make('text', 'soon_up', 'Верхний текст'),
    Field::make('text', 'soon_title_line1', 'Первая строка заголовка')
      ->set_width(50),
    Field::make('text', 'soon_title_line2', 'Вторая строка заголовка')  
      ->set_width(50),

    Field::make('image', 'soon_img1', 'Первая картинка приложения')
      ->set_width(33),
    Field::make('text', 'soon_img1_text', 'Описание первой картинки приложения')
      ->set_width(33),
    Field::make('text', 'soon_img1_link', 'Ссылка первой картинки приложения')
      ->set_width(33),

    Field::make('image', 'soon_img2', 'Вторая картинка приложения')
      ->set_width(33),
    Field::make('text', 'soon_img2_text', 'Описание второй картинки приложения')
      ->set_width(33),
    Field::make('text', 'soon_img2_link', 'Ссылка второй картинки приложения')
      ->set_width(33),

    Field::make('image', 'soon_img_main', 'Большая картинка справа')
      ->set_width(50),
    Field::make('text', 'soon_img_main_text', 'Описание большой картинка справа')
      ->set_width(50),
  ])
  ->add_tab('Контакты', [
    Field::make('text', 'contacts_title', 'Заголовок'),
    Field::make('complex', 'contacts_blocks', 'Блоки информации слева')
    ->add_fields('contacts_block', 'Блок',[
      Field::make('text', 'contacts_card_title', 'Заголовок'),

      Field::make('text', 'contacts_card_street', 'Первая часть названия улицы')
        ->set_width(25),
      Field::make('text', 'contacts_card_street2', 'Вторая часть названия улицы')
        ->set_width(25),
      Field::make('image', 'contacts_card_street_img', 'Картинка')
        ->set_width(25),
      Field::make('text', 'contacts_card_street_img_text', 'Описание к картинке')
        ->set_width(25),

      Field::make('text', 'contacts_card_phone', 'Телефон')
        ->set_width(25),
      Field::make('text', 'contacts_card_phone_digit', 'Телефон (только цифры)')
        ->set_width(25),
      Field::make('image', 'contacts_card_phone_img', 'Картинка')
        ->set_width(25),
      Field::make('text', 'contacts_card_phone_img_text', 'Описание к картинке')
        ->set_width(25),

      Field::make('text', 'contacts_card_time', 'Время работы')
        ->set_width(33),
      Field::make('image', 'contacts_card_time_img', 'Картинка')
        ->set_width(33),
      Field::make('text', 'contacts_card_time_text', 'Описание к картинке')
        ->set_width(33),
    ])
  ]);

// /////////////////////////////////////////////////////////////////

Container::make('theme_options', 'Настройки футера')
  ->set_page_menu_title('Футер') 
  ->set_page_menu_position(25)   
  ->set_icon('dashicons-admin-generic') 
  ->add_fields([
    Field::make('image', 'footer_logo', 'Логотип'),
    Field::make('complex', 'footer_links', 'Ссылки футера')
      ->add_fields('footer_link', 'Ссылка',[
          Field::make('text', 'footer_link_name', 'Название ссылки')
            ->set_width(50),
          Field::make('text', 'footer_link_name_anchor', 'Адрес ссылки')
            ->set_width(50),
      ]),

    Field::make('image', 'footer_img1', 'Первая картинка приложения')
      ->set_width(33),
    Field::make('text', 'footer_img1_text', 'Описание первой картинки приложения')
      ->set_width(33),
    Field::make('text', 'footer_img1_link', 'Ссылка первой картинки приложения')
      ->set_width(33),

    Field::make('image', 'footer_img2', 'Вторая картинка приложения')
      ->set_width(33),
    Field::make('text', 'footer_img2_text', 'Описание второй картинки приложения')
      ->set_width(33),
    Field::make('text', 'footer_img2_link', 'Ссылка второй картинки приложения')
      ->set_width(33),
    Field::make('complex', 'footer_social_links', 'Социальные сети')
      ->add_fields('footer_icon', 'Социальная сеть',[
      Field::make('image', 'footer_icon_svg', 'Картинка социальной сети')
        ->set_width(40),
      Field::make('text', 'footer_icon_svg_text', 'Название социальной сети')
        ->set_width(30),
      Field::make('text', 'footer_icon_url', 'Ссылка на соцсеть')
        ->set_width(30),
      ]),
    Field::make('text', 'footer_link_site', 'Ссылка на ваш другой сайт'),
    Field::make('text', 'footer_mail', 'Ваша почта')
 ]) ;