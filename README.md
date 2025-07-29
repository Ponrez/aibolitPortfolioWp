Здравствуйте

Используется в проекте:
- php - 8.1
- wordpress - 6.8.2
- MySQL-8.0

Плагины:
- Cyr-To-Lat
- CarbonFields v3.6.6
- SVG Support

Что сделано в проекте:
- Меню реализовано через register_nav_menu()
- Footer вынесен в отдельный пункт меню в админке
- Сделано экранирование данных(esc_html(), esc_attr(), esc_url(), wp_kses_post())

Как просмотреть проект:
- Импортировать базу данных. Она находится в папке sql
- Скачать вордпресс и скачать мою тему
- В корне проекта скопировать файл wp-config-sample и переименовать его в wp-config.php. В нем сделать поля как ниже
-      define('DB_NAME', 'название_вашей_базы');
       define('DB_USER', 'root');
       define('DB_PASSWORD', ''); 
       define('DB_HOST', 'localhost');
- В бд в таблице wp_options нужно изменить записи siteurl, home на адрес вашего локального сервера
- Нужно также скопировать все картинки из проекта (папка image) и переместить их в wp-content\uploads\2025\07
- Установить CarbonFields v3.6.6 в папку includes, название папки с CarbonFields - carbon-fields
- Данные для входа в админку: admin, пароль: 123

[Видео показывающее дизайн и соответствие верстки с pixel perfect](http://a1138732.xsph.ru/bandicam%202025-07-26%2020-48-29-650%20(online-video-cutter.com).mp4) *(Ctrl+Click (или Cmd+Click на Mac) для открытия в новой вкладке)*
