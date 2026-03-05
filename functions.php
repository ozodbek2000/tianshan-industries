<?php

/*
 * Enqueue scripts and styles.
 */

function tianshan_scripts() {

	wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css", array(), 1 );
	wp_enqueue_style( 'style-map', get_template_directory_uri() . "/assets/css/style.css.map", array(), 1 );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . "/assets/js/index.js", array(), 1, );

}
add_action( 'wp_enqueue_scripts', 'tianshan_scripts' );

function theme_customizer_settings($wp_customize)
{
    // Add a section for custom settings
    $wp_customize->add_section('theme_custom_settings', array(
        'title'    => __('Номер, почта и адресс', 'your-theme-textdomain'),
        'priority' => 200,
    ));

    // Phone
    $wp_customize->add_setting('phone', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone', array(
        'label'    => __('Номер', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings',
        'priority' => 10,
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('email', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('email', array(
        'label'    => __('Email', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings',
        'priority' => 10,
        'type'     => 'text',   
    ));

    // Social links section
    $wp_customize->add_section('theme_custom_settings_social', array(
        'title'    => __('Социальные сети', 'your-theme-textdomain'),
        'priority' => 200,
    ));

    // Facebook
    $wp_customize->add_setting('facebook', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('facebook', array(
        'label'    => __('Facebook', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('instagram', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('instagram', array(
        'label'    => __('Instagram', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // Whatsapp
    $wp_customize->add_setting('whatsapp', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('whatsapp', array(
        'label'    => __('Whatsapp', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // Telegram
    $wp_customize->add_setting('telegram', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('telegram', array(
        'label'    => __('Telegram', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // YouTube
    $wp_customize->add_setting('youtube', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('youtube', array(
        'label'    => __('YouTube', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_customizer_settings');

function register_polylang_strings() {

    if (function_exists('pll_register_string')) {

        pll_register_string('header', 'Продукция', );
        pll_register_string('header', 'Джизакская область, Форишский район, Эгизбулок МФЙ 3 сектор', );
        pll_register_string('header', 'Контакты', );

        pll_register_string('header', 'Известь негашеная комовая', );
        pll_register_string('header', 'Известь негашеная порошкообразная', );
        pll_register_string('header', 'Известь гашеная гидратная (пушонка) порошкообразная', );
        pll_register_string('header', 'известняк дробленый фракционный', );

        pll_register_string('footer', '© СП ООО TIANSHAN INDUSTRIES 2026', );
        pll_register_string('footer', 'Политика конфиденциальности', );
        pll_register_string('footer', 'Разработка -', );
        pll_register_string('footer', 'информация', );

        pll_register_string('main', 'производство извести <br /> и продуктов из известняка', );
        pll_register_string('main', 'О компании', );
        pll_register_string('main', 'Главная', );
        pll_register_string('main', 'О производстве', );
        pll_register_string('main', 'Ведущий промышленный производитель извести и продукции из известняка, осуществляющий полный производственный цикл в Узбекистане.<br><br>Собственное месторождение известняка обеспечивает устойчивость производства, стабильность поставок и защиту от колебаний цен на сырьевых рынках.', );
        pll_register_string('main', 'Промышленное производство извести мощностью до 100 000 тонн в год, основанное на полном производственном цикле и собственной сырьевой базе.<br><br>Системный контроль качества продукции в соответствии с ГОСТ 9179-2018 и международными нормами.', );
        pll_register_string('main', 'подробнее о компании', );
        pll_register_string('main', 'Продукция', );
        pll_register_string('main', 'Известь', );
        pll_register_string('main', 'Промышленное качество извести с высокой химической активностью, обеспечивающее надёжность и стабильность технологических процессов в строительстве, металлургии и производстве газобетона.', );
        pll_register_string('main', 'Известняк дробленый', );
        pll_register_string('main', 'Прочный и экологичный минеральный материал, получаемый путём дробления природного известняка. Отличается стабильным химическим составом, высоким содержанием карбоната кальция (CaCO₃) и однородностью фракций. Применяется как сырьё, наполнитель, флюс или технологическая добавка в различных производственных процессах.', );
        pll_register_string('main', 'Сертификаты соответствия', );
        pll_register_string('main', 'Поставка продукции', );
        pll_register_string('main', 'Мы осуществляем доставку продукции по Узбекистану автотранспортом и ж/д полувагонами, а также экспортируем в страны ЕАЭС и СНГ на условиях FCA, DAP, CPT. Обеспечиваем полный контроль груза, оформление документов и безопасную транспортировку с проверкой совместимости материалов.', );
        pll_register_string('main', 'подробнее о поставках', );
        pll_register_string('main', 'Партнёры компании', );
        pll_register_string('main', 'В каких областях используется наша продукция', );
        pll_register_string('main', 'Свяжитесь с нашими экспертами', );
        pll_register_string('main', 'Перезвоним, проконсультируем, подберём лучшие варианты', );
        pll_register_string('main', 'Отправить заявку', );
        pll_register_string('main', 'Оставить заявку', );

        pll_register_string('about', 'СП ООО TIANSHAN INDUSTRIES — один из ведущих производителей негашёной и гашёной извести, а также продукции из известняка в Республике Узбекистан.', );
        pll_register_string('about', 'Высокое качество и надёжность', );
        pll_register_string('about', 'подробнее о производстве', );
        pll_register_string('about', 'Уже более 7 лет компания последовательно укрепляет репутацию надёжного промышленного партнёра, предлагая рынку продукцию со стабильно высокими качественными показателями.', );
        pll_register_string('about', 'Все производственные процессы основаны на современной технической базе, собственной сырьевой инфраструктуре и строгом контроле на каждом этапе — от добычи известняка до выпуска готовой продукции.', );
        pll_register_string('about', 'Производственный комплекс компании расположен в Джизакской области, Форишском районе (Эгизбулок МФЙ, 3 сектор)', );
        pll_register_string('about', 'На территории предприятия находится собственное месторождение известняка площадью 40 гектаров, что обеспечивает бесперебойное снабжение сырьём и позволяет поддерживать полный контроль качества на протяжении всего производственного цикла.', );
        pll_register_string('about', '<strong>В 2019 году</strong> был введён в эксплуатацию современный завод <strong >проектной мощностью 100 000 тонн извести в год.</strong >', );
        pll_register_string('about', 'Если вам требуется высококачественная известь или продукция из известняка, TIANSHAN INDUSTRIES предлагает надёжное промышленное решение, основанное на опыте, современных технологиях и собственной ресурсной базе.', );

        pll_register_string('manufacture', 'Производство TIANSHAN INDUSTRIES организовано по принципу полного технологического цикла — от добычи сырья до выпуска готовой продукции с гарантированными характеристиками.', );
        pll_register_string('manufacture', 'Такой подход позволяет обеспечивать стабильное качество, высокую повторяемость показателей и надёжность поставок для клиентов из различных отраслей промышленности.', );

        pll_register_string('contacts', 'сп ооо tiashan industries', );

        pll_register_string('product', 'Другие товары компании', );
        pll_register_string('product', '(Синонимы: гидроокись кальция, пушонка, Hydrated lime)', );
        pll_register_string('product', 'Гашёная известь, или гидратная известь (химическая формула <strong>Ca(OH)₂),</strong> — это тонкодисперсный порошок белого цвета, получаемый гидратацией высокоактивной негашёной извести. Процесс гидратации проходит в контролируемых условиях, что обеспечивает стабильные физико-химические параметры и высокую реакционную способность материала.', );
        pll_register_string('product', 'Дроблёный известняк — природный материал, получаемый дроблением осадочной породы известняка (CaCO₃).', );
        pll_register_string('product', 'Отличается высокой прочностью, химической стабильностью и широко применяется в промышленности и строительстве.', );
        pll_register_string('product', 'Ассортимент известняка по фракциям', );
        pll_register_string('product', '', );

    }
}

add_action('init', 'register_polylang_strings');
