<?php
add_action('wp_enqueue_scripts', function () {
    $temp_uri = get_template_directory_uri();
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', $temp_uri . '/css/style.min.css');
    wp_enqueue_style('owl-carousel', $temp_uri . '/libs/Owl-Carousel/owl.carousel.min.css');
    wp_enqueue_style('video', $temp_uri . '/libs/video.js-master/video-js.css');
    wp_deregister_script('jquery'); 
    wp_enqueue_script('jquery', $temp_uri . '/libs/jquery-3.3.1.min.js', null, null, 'in footer');
    wp_enqueue_script('owl-slider', $temp_uri . '/js/owl.carousel.min.js', ['jquery'], null, 'in footer');
    wp_enqueue_script('video-js', $temp_uri . 'libs/video.js-master/video.js', ['jquery'], null, 'in footer');
    wp_enqueue_script('main-script', $temp_uri . '/js/script.min.js', ['jquery'], null, 'in footer');
});
function theme_register_nav_menu()
{
    register_nav_menu('main-menu', 'Главное меню');
}
add_theme_support('custom-logo');
add_theme_support( 'menus' );
add_theme_support('post-thumbnails', array( 'news', 'bio'));
add_action('init', 'register_post_types');
add_action('after_setup_theme', 'theme_register_nav_menu');
pll_register_string('Подробнее', 'more');
pll_register_string('Преимущества порт-систем', 'preimush');
pll_register_string('Преимущества описание', 'preimush_desc');
pll_register_string('Преимущества описание', 'uxod');
pll_register_string( 'При использовании подкожного порта для химиотерапии
могут возникнуть механические осложнения:', 'danger');
pll_register_string('Использование', 'usage');
pll_register_string('Имплантация', 'implant');
pll_register_string('Окончание терапии', 'end');
pll_register_string('Инфицирование', 'infizirovaniye'); 
pll_register_string('Закупоривание', 'zakuporivaniye'); 
pll_register_string('Утечка', 'utechka'); 
pll_register_string('Перемещение катетера', 'peremesh'); 
pll_register_string('Тромбоз', 'tromboz'); 
pll_register_string('Защемление', 'zashemlen');
pll_register_string( 'ФОТО ПОРТ-СИСТЕМЫ ПОСЛЕ ИМПЛАНТАЦИИ', 'photops');
pll_register_string( 'Сразу после установки и ... через 3 недели', 'time');
pll_register_string( 'УСТАНОВКА ПОРТ -СИСТЕМЫ', 'instalation');
pll_register_string('УСТАНОВКА ПОРТ -СИСТЕМЫ', 'instalphoto');
pll_register_string( 'КАКИМ ОБРАЗОМ УДАЛЯЕТСЯ ПОРТ-СИСТЕМА?', 'deleteps');
pll_register_string( 'ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ', 'questionsoften');
pll_register_string('Новости', 'news');
pll_register_string('Последние новости', 'latenews');
pll_register_string('Все новости', 'allnews');
pll_register_string('Контакты', 'contact');
pll_register_string('Получить ответы', 'getanswer');
pll_register_string('Номер телефона', 'number');
pll_register_string('Почта', 'email');
function register_post_types()
{   
    register_post_type('questions', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Вопросы и ответы', 
            'singular_name'      => 'Один вопрос с ответом', 
            'add_new'            => 'Добавить вопрос с ответом', 
            'add_new_item'       => 'Добавление вопроса с ответом', 
            'edit_item'          => 'Редактирование вопроса с ответом', 
            'new_item'           => 'Новый вопрос с ответом',
            'view_item'          => 'Смотреть вопрос с ответом', 
            'search_items'       => 'Искать вопрос с ответом', 
            'not_found'          => 'Не найдено', 
            'not_found_in_trash' => 'Не найдено в корзине', 
            'parent_item_colon'  => '', 
            'menu_name'          => 'Вопросы и ответы', 
        ),
        'description'         => 'Часто задаваемые вопросы и ответы на них',
        'public'              => true,
        'exclude_from_search' => false, 
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-editor-help',
        'hierarchical'        => false,
        'supports'            => array('title','custom-fields'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
));
register_post_type('news', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Новости', 
            'singular_name'      => 'Одна новость', 
            'add_new'            => 'Добавить новость', 
            'add_new_item'       => 'Добавление новости', 
            'edit_item'          => 'Редактирование новости', 
            'new_item'           => 'Новая новость',
            'view_item'          => 'Смотреть новость', 
            'search_items'       => 'Искать новость', 
            'not_found'          => 'Не найдено', 
            'not_found_in_trash' => 'Не найдено в корзине', 
            'parent_item_colon'  => '', 
            'menu_name'          => 'Новости', 
        ),
        'description'         => 'Наши новости',
        'public'              => true,
        'exclude_from_search' => false, 
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'hierarchical'        => false,
        'supports'            => array('title','thumbnail',), 
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
));
register_post_type('advantages', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Преимущества порт-систем', 
            'singular_name'      => 'Одно преимущество',
            'add_new'            => 'Добавить преимущество', 
            'add_new_item'       => 'Добавление преимущества', 
            'edit_item'          => 'Редактирование преимущества', 
            'new_item'           => 'Новое преимущество', 
            'view_item'          => 'Смотреть преимущество', 
            'search_items'       => 'Искать преимущество', 
            'not_found'          => 'Не найдено', 
            'not_found_in_trash' => 'Не найдено в корзине', 
            'parent_item_colon'  => '', 
            'menu_name'          => 'Преимущества', 
        ),
        'description'         => 'По сравнению с обычными венозными катетерами имплантируемые порт-системы сочетают удобство, уникальную форму и доказанную безопасность и надежность',
        'public'              => true,
        'exclude_from_search' => false, 
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-welcome-learn-more',
        'hierarchical'        => false,
        'supports'            => array('title','excerpt',), 
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
));
    register_post_type('bio', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'О Себе',
            'singular_name'      => 'Биография',
            'add_new'            => '',
            'add_new_item'       => '',
            'edit_item'          => 'Редактирование биографии',
            'new_item'           => '',
            'view_item'          => 'Смотреть биографию',
            'search_items'       => '',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'О себе',
        ),
        'description'         => 'О себе',
        'public'              => true,
        'exclude_from_search' => false,
        'menu_position'       => 8,
        'menu_icon'           => 'dashicons-id-alt',
        'hierarchical'        => false,
        'supports'            => array('title', 'thumbnail'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));
    register_post_type('firstpart', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Основная информация',
            'singular_name'      => 'Основная информация',
            'add_new'            => '',
            'add_new_item'       => '',
            'edit_item'          => 'Редактирование основной информации',
            'new_item'           => '',
            'view_item'          => 'Смотреть информацию',
            'search_items'       => '',
            'not_found'          => 'Не найдено',
            'not_found_in_trash' => 'Не найдено в корзине',
            'parent_item_colon'  => '',
            'menu_name'          => 'Основная информация',
        ),
        'description'         => 'Основная информация',
        'public'              => true,
        'exclude_from_search' => false,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-admin-home',
        'hierarchical'        => false,
        'supports'            => array('title'),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ));
}