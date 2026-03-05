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
                <?= pll__('производство извести <br /> и продуктов из известняка'); ?>
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
                                <?= pll__('О компании'); ?>
                            </h2>
                            <p class="prod__column_text text">
                                <?= pll__('Ведущий промышленный производитель извести и продукции из известняка, осуществляющий полный производственный цикл в Узбекистане.<br><br>Собственное месторождение известняка обеспечивает устойчивость производства, стабильность поставок и защиту от колебаний цен на сырьевых рынках.'); ?>
                            </p>
                            <a
                                href="/about.html"
                                class="prod__column_link button"
                                ><?= pll__('подробнее о компании'); ?>
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
                                <?= pll__('О производстве'); ?>
                            </h2>
                            <p class="prod__column_text text">
                                <?= pll__('Промышленное производство извести мощностью до 100 000 тонн в год, основанное на полном производственном цикле и собственной сырьевой базе.<br><br>Системный контроль качества продукции в соответствии с ГОСТ 9179-2018 и международными нормами.'); ?>
                            </p>
                            <a
                                href="/about.html"
                                class="prod__column_link button"
                                ><?= pll__('подробнее о компании'); ?>
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
                        <h2 class="production__title grey-title"><?= pll__('Продукция'); ?></h2>
                        <h3 class="production__content_title blue-title">
                            <?= pll__('Известь'); ?>
                        </h3>
                        <p class="production__text text">
                            <?= pll__('Промышленное качество извести с высокой химической активностью, обеспечивающее надёжность и стабильность технологических процессов в строительстве, металлургии и производстве газобетона.'); ?>
                        </p>
                        <a
                            class="production__button button desktop-only submit"
                            href="##"
                            ><?= pll__('Оставить заявку'); ?>
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
                            <?= pll__('Оставить заявку'); ?>
                            <img src="<?= bloginfo('template_url'); ?>/assets/img/svg/chevron-right.svg" alt="chevron-right" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="production__item">
                <div class="production__columns">
                    <div class="production__content">
                        <h3 class="production__content_title blue-title">
                            <?= pll__('Известняк дробленый'); ?>
                        </h3>
                        <p class="production__text text">
                            <?= pll__('Прочный и экологичный минеральный материал, получаемый путём дробления природного известняка. Отличается стабильным химическим составом, высоким содержанием карбоната кальция (CaCO₃) и однородностью фракций. Применяется как сырьё, наполнитель, флюс или технологическая добавка в различных производственных процессах.'); ?>
                        </p>
                        <a
                            class="production__button button desktop-only submit"
                            href="##"
                            ><?= pll__('Оставить заявку'); ?>
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
                            ><?= pll__('Оставить заявку'); ?>
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right"
                        /></a>
                    </div>
                </div>
            </div>
            <div class="production__certificate">
                <h2 class="production__certificate_title title">
                    <?= pll__('Сертификаты соответствия'); ?>
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
                <h2 class="delivery__titlebox_title"><?= pll__('Поставка продукции'); ?></h2>
                <div class="delivery__titlebox_image">
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/delivery01.webp" alt="machine" />
                </div>
                <div class="delivery__titlebox_content">
                    <p class="text">
                        <?= pll__('Мы осуществляем доставку продукции по Узбекистану автотранспортом и ж/д полувагонами, а также экспортируем в страны ЕАЭС и СНГ на условиях FCA, DAP, CPT. Обеспечиваем полный контроль груза, оформление документов и безопасную транспортировку с проверкой совместимости материалов.'); ?>
                    </p>
                    <a href="##" class="button"
                        ><?= pll__('подробнее о поставках'); ?>
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
            
        </div>
    </section>

    <section class="partners">
        <div class="partners__container">
            <div class="partners__title title"><?= pll__('Партнёры компании'); ?></div>
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
                    <?= pll__('В каких областях используется наша продукция'); ?>
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
                        <?= pll__('Свяжитесь с нашими экспертами'); ?>
                    </h2>
                    <p class="form__subtitle text">
                        <?= pll__('Перезвоним, проконсультируем, подберём лучшие варианты'); ?>
                    </p>
                </div>
                <div class="form__columns_form">
                    <?php
                        $lang = pll_current_language();

                        $forms = [
                            'ru' => '[contact-form-7 id="098e590" title="Контактная форма 1"]',
                            'uz' => '[contact-form-7 id="ce11334" title="Kontakt forma"]',
                            'en' => '[contact-form-7 id="67b0e05" title="Contact form"]',
                        ];

                        if (isset($forms[$lang])) {
                            echo do_shortcode($forms[$lang]);
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?= get_footer(); ?>