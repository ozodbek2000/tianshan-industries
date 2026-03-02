<?php 
	/*
		Template name: Home
	*/
?>

<?= get_header(); ?>

<main class="wrapper">
    <section class="prod" id="prod">
        <div class="prod__container">
            <h1 class="page-title prod__title">
                производство извести <br />
                и продуктов из известняка
            </h1>
        </div>
        <div class="prod__content">
            <div class="prod__container">
                <div class="prod__columns">
                    <div class="prod__column">
                        <div class="prod__column_image">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/prod01.webp"
                                alt="about company"
                            />
                        </div>
                        <div class="prod__column_content">
                            <h2 class="prod__column_title blue-title">
                                О компании
                            </h2>
                            <p class="prod__column_text text">
                                Ведущий промышленный производитель извести и
                                продукции из известняка, осуществляющий полный
                                производственный цикл в Узбекистане.<br /><br />
                                Собственное месторождение известняка
                                обеспечивает устойчивость производства,
                                стабильность поставок и защиту от колебаний цен
                                на сырьевых рынках.
                            </p>
                            <a
                                href="/about.html"
                                class="prod__column_link button"
                                >подробнее о компании
                                <img
                                    src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                    alt="chevron-right"
                            /></a>
                        </div>
                    </div>
                    <div class="prod__column">
                        <div class="prod__column_image">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/prod02.webp"
                                alt="about production"
                            />
                        </div>
                        <div class="prod__column_content">
                            <h2 class="prod__column_title blue-title">
                                О производстве
                            </h2>
                            <p class="prod__column_text text">
                                Промышленное производство извести мощностью до
                                100 000 тонн в год, основанное на полном
                                производственном цикле и собственной сырьевой
                                базе.<br /><br />
                                Системный контроль качества продукции в
                                соответствии с ГОСТ 9179-2018 и международными
                                нормами.
                            </p>
                            <a
                                href="/about.html"
                                class="prod__column_link button"
                                >подробнее о компании
                                <img
                                    src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                    alt="chevron-right"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="production">
        <div class="production__container">
            <div class="production__item">
                <div class="production__columns">
                    <div class="production__content">
                        <h2 class="production__title grey-title">Продукция</h2>
                        <h3 class="production__content_title blue-title">
                            Известь
                        </h3>
                        <p class="production__text text">
                            Промышленное качество извести с высокой химической
                            активностью, обеспечивающее надёжность и
                            стабильность технологических процессов в
                            строительстве, металлургии и производстве
                            газобетона.
                        </p>
                        <a
                            class="production__button button desktop-only submit"
                            href="##"
                            >Оставить заявку
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right"
                        /></a>
                        <div class="production__navigation">
                            <svg
                                class="production__navigation_prev"
                                width="63"
                                height="30"
                                viewBox="0 0 63 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M62 15H4"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M8 20L3 15L8 10"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                            <svg
                                class="production__navigation_next"
                                width="63"
                                height="30"
                                viewBox="0 0 63 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M3 15H61"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M57 10L62 15L57 20"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <!-- <div class="production__slider">
                        <div class="production__swiper-1 swiper-container">
                            <div class="production__wrapper swiper-wrapper">
                                <div class="production__slide swiper-slide">
                                    <div class="production__slide_img">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/production01.webp"
                                            alt="product"
                                        />
                                    </div>
                                    <div class="production__slide_content">
                                        <p>Известь негашеная комовая 5-20 мм</p>
                                    </div>
                                </div>
                                <div class="production__slide swiper-slide">
                                    <div class="production__slide_img">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/production02.webp"
                                            alt="product"
                                        />
                                    </div>
                                    <div class="production__slide_content">
                                        <p>
                                            Известь негашеная комовая 60-120 мм
                                        </p>
                                    </div>
                                </div>
                                <div class="production__slide swiper-slide">
                                    <div class="production__slide_img">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/production03.webp"
                                            alt="product"
                                        />
                                    </div>
                                    <div class="production__slide_content">
                                        <p>
                                            Известь негашеная порошкообразная
                                            0,08 мм
                                        </p>
                                    </div>
                                </div>
                                <div class="production__slide swiper-slide">
                                    <div class="production__slide_img">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/production04.webp"
                                            alt="product"
                                        />
                                    </div>
                                    <div class="production__slide_content">
                                        <p>
                                            Известь негашеная порошкообразная
                                            60-120 мм
                                        </p>
                                    </div>
                                </div>
                                <div class="production__slide swiper-slide">
                                    <div class="production__slide_img">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/production05.webp"
                                            alt="product"
                                        />
                                    </div>
                                    <div class="production__slide_content">
                                        <p>
                                            Известь гашеная гидратная (пушонка)
                                            порошкообразная 0,08 мм
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a
                            class="production__button button mobile-only submit"
                            href="##"
                            >Оставить заявку
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right"
                        /></a>
                    </div> -->
                    <div class="production__slider">
                        <div class="production__swiper-1 swiper-container">
                            <div class="production__wrapper swiper-wrapper">
                                <?php
                                    $args = [
                                        'post_type'      => 'product',
                                        'posts_per_page' => -1,
                                        'orderby'        => 'date',
                                        'order'          => 'ASC',
                                        'tax_query'      => [
                                            [
                                                'taxonomy' => 'product_cat',
                                                'field'    => 'slug',
                                                'terms'    => 'limestone',
                                            ],
                                        ],
                                    ];

                                    $products = new WP_Query($args);

                                    if ($products->have_posts()) :
                                        while ($products->have_posts()) : $products->the_post();
                                            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                    ?>
                                        <div class="production__slide swiper-slide">
                                            <div class="production__slide_img">
                                                <img src="<?= esc_url($image); ?>" alt="<?= esc_attr(get_the_title()); ?>" />
                                            </div>
                                            <div class="production__slide_content">
                                                <p><?= get_the_title(); ?></p>
                                            </div>
                                        </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                        </div>

                        <a class="production__button button mobile-only submit" href="##">
                            Оставить заявку
                            <img src="<?= bloginfo('template_url'); ?>/assets/img/svg/chevron-right.svg" alt="chevron-right" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="production__item">
                <div class="production__columns">
                    <div class="production__content">
                        <h3 class="production__content_title blue-title">
                            Известняк дробленый
                        </h3>
                        <p class="production__text text">
                            Прочный и экологичный минеральный материал,
                            получаемый путём дробления природного известняка.
                            Отличается стабильным химическим составом, высоким
                            содержанием карбоната кальция (CaCO₃) и
                            однородностью фракций. Применяется как сырьё,
                            наполнитель, флюс или технологическая добавка в
                            различных производственных процессах.
                        </p>
                        <a
                            class="production__button button desktop-only submit"
                            href="##"
                            >Оставить заявку
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right"
                        /></a>
                        <div class="production__navigation">
                            <svg
                                class="production__navigation_prev-1"
                                width="63"
                                height="30"
                                viewBox="0 0 63 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M62 15H4"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M8 20L3 15L8 10"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                            <svg
                                class="production__navigation_next-1"
                                width="63"
                                height="30"
                                viewBox="0 0 63 30"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M3 15H61"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M57 10L62 15L57 20"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </div>
                    </div>
                    <div class="production__slider">
                        <div class="production__swiper-2 swiper-container">
                            <div class="production__wrapper swiper-wrapper">
                                <?php
                                    $args = [
                                        'post_type'      => 'product',
                                        'posts_per_page' => -1,
                                        'orderby'        => 'date',
                                        'order'          => 'ASC',
                                        'tax_query'      => [
                                            [
                                                'taxonomy' => 'product_cat',
                                                'field'    => 'slug',
                                                'terms'    => 'crushed',
                                            ],
                                        ],
                                    ];

                                    $products = new WP_Query($args);

                                    if ($products->have_posts()) :
                                        while ($products->have_posts()) : $products->the_post();
                                            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                    ?>
                                        <div class="production__slide swiper-slide">
                                            <div class="production__slide_img">
                                                <img src="<?= esc_url($image); ?>" alt="<?= esc_attr(get_the_title()); ?>" />
                                            </div>
                                            <div class="production__slide_content">
                                                <p><?= get_the_title(); ?></p>
                                            </div>
                                        </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                ?>
                            </div>
                        </div>
                        <a
                            class="production__button button mobile-only submit"
                            href="##"
                            >Оставить заявку
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right"
                        /></a>
                    </div>
                </div>
            </div>
            <div class="production__certificate">
                <h2 class="production__certificate_title title">
                    Сертификаты соответствия
                </h2>
                <div class="production__certificates swiper-container">
                    <div
                        class="production__certificates_wrapper swiper-wrapper"
                    >
                        <?php if( have_rows('certificates') ): ?>
                            <?php while( have_rows('certificates') ): the_row(); 

                                $image = get_sub_field('certificate');
                                ?>

                            <div class="production__certificates_image swiper-slide" >
                                <a
                                    href="<?= $image; ?>"
                                    data-fancybox="certificates"
                                >
                                    <img
                                        src="<?= $image; ?>"
                                        alt="certificate"
                                    />
                                </a>
                            </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="production__pagination swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="delivery">
        <div class="delivery__container">
            <div class="delivery__titlebox">
                <h2 class="delivery__titlebox_title">Поставка продукции</h2>
                <div class="delivery__titlebox_image">
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/delivery01.webp" alt="machine" />
                </div>
                <div class="delivery__titlebox_content">
                    <p class="text">
                        Мы осуществляем доставку продукции по Узбекистану
                        автотранспортом и ж/д полувагонами, а также экспортируем
                        в страны ЕАЭС и СНГ на условиях FCA, DAP, CPT.
                        Обеспечиваем полный контроль груза, оформление
                        документов и безопасную транспортировку с проверкой
                        совместимости материалов.
                    </p>
                    <a href="##" class="button"
                        >подробнее о поставках
                        <img
                            src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                            alt="chevron-right"
                    /></a>
                </div>
            </div>
            <div class="delivery__item">
                <div class="delivery__tabs">
                    <?php if (have_rows('tabs')) : ?>
                        <?php $i = 0; while (have_rows('tabs')) : the_row(); $i++; ?>
                            <div class="delivery__tab <?php echo $i === 1 ? 'active' : ''; ?>">
                                <?php the_sub_field('title'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php if (have_rows('tabs')) : ?>
                    <?php $i = 0; while (have_rows('tabs')) : the_row(); $i++; ?>
                        <div class="delivery__tab_content <?php echo $i === 1 ? 'active' : ''; ?>">
                            <h3 class="delivery__tab_content-title blue-title">
                                <?php the_sub_field('title'); ?>
                            </h3>
                            <div class="delivery__tab_content-text">
                                <?php the_sub_field('text'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- <div class="delivery__item">
                <div class="delivery__tabs">
                    <div class="delivery__tab active">
                        Поставки продукции по Узбекистану
                    </div>
                    <div class="delivery__tab">Экспорт в страны ЕАЭС и СНГ</div>
                    <div class="delivery__tab">Контроль доставки</div>
                </div>
                <div class="delivery__tab_content active">
                    <h3 class="delivery__tab_content-title blue-title">
                        Поставки продукции по Узбекистану
                    </h3>
                    <p>
                        Наша компания осуществляет доставку продукции по всей
                        Республике используя как транспортно-экспедиционные
                        компании, так и собственный транспорт:
                    </p>
                    <ul>
                        <li>
                            Автотранспорт; цементовозы, самосвалы, тентованные
                            полуприцепы (еврофуры)
                        </li>
                        <li>
                            Железнодорожный транспорт; ж/д полувагоны
                            грузоподъемностью 69 т.н.
                        </li>
                    </ul>
                    <strong
                        >Стоимость рассчитывается индивидуально для каждой
                        заявки.</strong
                    >
                </div>
                <div class="delivery__tab_content">
                    <h3 class="delivery__tab_content-title blue-title">
                        Экспорт в страны ЕАЭС и СНГ
                    </h3>
                    <p>Также мы экспортируем продукцию в страны ЕАЭС и СНГ.</p>
                    <p>
                        Отгрузку производим автомобильным и железнодорожным
                        транспортом, на условиях FCA, DAP, CPT.
                    </p>
                    <p>Оформляем все необходимые таможенные документы.</p>
                </div>
                <div class="delivery__tab_content">
                    <h3 class="delivery__tab_content-title blue-title">
                        Контроль доставки
                    </h3>
                    <p>Контролируем поставку товара до вашего склада.</p>
                    <p>
                        В любой момент мы можем предоставить Вам информацию о
                        местонахождении Вашего груза.
                    </p>
                    <p>
                        Мы всегда проверяем совместимость опасных грузов при
                        хранении и перевозке. Наши специалисты предоставят
                        информацию о совместимости опасных грузов при хранении и
                        перевозке, если Вам это необходимо.
                    </p>
                </div>
            </div> -->
        </div>
    </section>

    <section class="partners">
        <div class="partners__container">
            <div class="partners__title title">Партнёры компании</div>
            <div class="partners__swiper">
                <div class="partners__wrapper">
                    <?php 
                        $partners = get_field('partners');
                        if( $partners ): 
                            $partners = array_merge($partners, $partners);
                        ?>
                        <?php foreach( $partners as $row ): ?>
                            <div class="partners__slide">
                                <img src="<?= $row['partner']; ?>" alt="partner" />
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="cases">
        <div class="cases__container">
            <div class="cases__titlebox">
                <h2 class="cases__title title">
                    В каких областях используется наша продукция
                </h2>
                <div class="cases__navigation">
                    <svg
                        class="cases__navigation_prev"
                        width="63"
                        height="30"
                        viewBox="0 0 63 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M62 15H4"
                            stroke="#025288"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M8 20L3 15L8 10"
                            stroke="#025288"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                    <svg
                        class="cases__navigation_next"
                        width="63"
                        height="30"
                        viewBox="0 0 63 30"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M3 15H61"
                            stroke="#025288"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M57 10L62 15L57 20"
                            stroke="#025288"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </div>
            </div>
            <div class="cases__swiper swiper-container">
                <div class="cases__wrapper swiper-wrapper">
                    <?php if( have_rows('usage') ): ?>
                        <?php while( have_rows('usage') ): the_row(); 

                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                            $image = get_sub_field('image');
                            
                            ?>

                            <div class="cases__slide swiper-slide">
                                <div class="cases__slide_img">
                                    <img
                                        src="<?= $image; ?>"
                                        alt="<?= $title; ?>"
                                    />
                                </div>
                                <div class="cases__slide_content">
                                    <h3><?= $title; ?></h3>
                                    <p>
                                        <?= $text; ?>
                                    </p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="cases__slide swiper-slide">
                        <div class="cases__slide_img">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/cases01.webp"
                                alt="mettalurgy"
                            />
                        </div>
                        <div class="cases__slide_content">
                            <h3>Металлургия</h3>
                            <p>
                                Негашёная известь используется как флюс: она
                                снижает температуру плавления шлаков, связывает
                                кислые примеси и улучшает их текучесть.
                            </p>
                        </div>
                    </div>
                    <div class="cases__slide swiper-slide">
                        <div class="cases__slide_img">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/cases02.webp"
                                alt="mettalurgy"
                            />
                        </div>
                        <div class="cases__slide_content">
                            <h3>Строительство и строительные материалы</h3>
                            <p>
                                Используется для приготовления строительных
                                растворов и производства силикатных материалов.
                                Улучшает прочность, пластичность и долговечность
                                конструкций.
                            </p>
                        </div>
                    </div>
                    <div class="cases__slide swiper-slide">
                        <div class="cases__slide_img">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/cases03.webp"
                                alt="mettalurgy"
                            />
                        </div>
                        <div class="cases__slide_content">
                            <h3>Производство автоклавного газобетона</h3>
                            <p>
                                Обеспечивает образование пор и прочной структуры
                                газобетонных блоков.
                            </p>
                        </div>
                    </div>
                    <div class="cases__slide swiper-slide">
                        <div class="cases__slide_img">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/cases04.webp"
                                alt="mettalurgy"
                            />
                        </div>
                        <div class="cases__slide_content">
                            <h3>Очистка воды и сточных вод</h3>
                            <p>
                                Нейтрализует кислоты и способствует удалению
                                загрязнений, улучшая качество воды.
                            </p>
                        </div>
                    </div>
                    <div class="cases__slide swiper-slide">
                        <div class="cases__slide_img">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/cases05.webp"
                                alt="mettalurgy"
                            />
                        </div>
                        <div class="cases__slide_content">
                            <h3>Сельское хозяйство</h3>
                            <p>
                                Снижает кислотность почвы и применяется для
                                санитарной обработки сельскохозяйственных
                                объектов.
                            </p>
                        </div>
                    </div> -->
                </div>
                <div class="cases__pagination swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section class="form">
        <div class="form__container">
            <div class="form__columns">
                <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/big-stone.webp" alt="big-stone" />
                <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/little-stone.webp" alt="little-stone" />
                <div class="form__columns_content">
                    <h2 class="form__title title">
                        Свяжитесь с нашими экспертами
                    </h2>
                    <p class="form__subtitle text">
                        Перезвоним, проконсультируем, подберём лучшие варианты
                    </p>
                </div>
                <div class="form__columns_form">
                    <form action="##">
                        <input type="text" placeholder="Имя" />
                        <input type="number" placeholder="Телефон" />
                        <textarea
                            name="##"
                            id="##"
                            placeholder="Сообщение"
                        ></textarea>
                        <div class="form__columns_form-confidential">
                            <svg
                                width="26"
                                height="26"
                                viewBox="0 0 26 26"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M25 11.9029V13.0069C24.9985 15.5946 24.1606 18.1125 22.6112 20.1851C21.0618 22.2576 18.8839 23.7738 16.4024 24.5075C13.9209 25.2412 11.2687 25.1531 8.84136 24.2564C6.41402 23.3596 4.34158 21.7022 2.93315 19.5313C1.52472 17.3605 0.855749 14.7925 1.02601 12.2104C1.19627 9.62834 2.19665 7.17046 3.87793 5.20335C5.55922 3.23625 7.83134 1.86533 10.3554 1.29504C12.8795 0.72476 15.5203 0.985673 17.884 2.03887"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M25.0004 3.40625L13.0004 15.4182L9.40039 11.8182"
                                    stroke="#025288"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>

                            <p>
                                Нажимая кнопку “Отправить заявку”, вы
                                соглашаетесь на
                                <a href="##">обработку персональных данных.</a>
                            </p>
                        </div>
                        <input
                            class="button"
                            type="submit"
                            value="Отправить заявку"
                        />
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?= get_footer(); ?>