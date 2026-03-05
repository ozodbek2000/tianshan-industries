<?php 
    /* 
        Template name: Fraction
    */
?>
<?= get_header(); ?>

    <main class="wrapper">
        <section class="limestone">
            <div class="limestone__container">
                <div class="limestone__bg bg">
                    <div class="limestone__bg_wrapper bg__wrapper">
                        <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/fraction-bg.webp"
                        alt="about-bg" />
                    </div>
                </div>
                <div class="limestone__breadcrumbs breadcrumbs">
                    <a href="<?= get_home_url(); ?>"><?= pll__('Главная'); ?></a>
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                    alt="chevron-right" />
                    <span><?= pll__('Продукция'); ?></span>
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                    alt="chevron-right" />
                    <span><?= get_the_title(); ?></span>
                </div>
                <h1 class="limestone__title prod__title limestone__title-4">
                    <?= get_the_title(); ?>
                </h1>
            </div>
            <div class="limestone__content">
                <div class="limestone__container">
                    <div class="limestone__fraction_title title">
                        Дроблёный известняк — природный материал, получаемый
                        дроблением осадочной породы известняка (CaCO₃).
                    </div>
                    <div class="limestone__fraction_subtitle">
                        Отличается высокой прочностью, химической
                        стабильностью и широко применяется в промышленности
                        и строительстве.
                    </div>
                    <div class="limestone__fraction_blue-title title">
                        Основные направления использования
                    </div>
                    <div class="limestone__item">
                        <div class="limestone__tabs">
                            <?php if (have_rows('tabs-images')) : ?>
                                <?php $i = 0; while (have_rows('tabs-images')) : the_row(); $i++; ?>
                                    <span class="limestone__tab <?= $i === 1 ? 'active' : '' ?>">
                                        <?php the_sub_field('title'); ?>
                                    </span>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('tabs-images')) : ?>
                            <?php $i = 0; while (have_rows('tabs-images')) : the_row(); $i++; ?>
                                <div class="limestone__tabs_content content <?= $i === 1 ? 'active' : '' ?>">
                                    <div class="limestone__tabs_content-column">
                                        <h3 class="limestone__tabs_content-title blue-title">
                                            <?php the_sub_field('title'); ?>
                                        </h3>
                                        <?= get_sub_field('text') ?>
                                    </div>
                                    <div class="limestone__tabs_content-image">
                                        <img src="<?= get_sub_field('image'); ?>" alt="production" />
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="products products-2">
            <div class="products__container">
                <div class="products__titlebox">
                    <h2 class="title products__title">
                        Ассортимент известняка по фракциям
                    </h2>
                    <div class="products__navigation">
                        <svg
                            class="products__navigation_prev-2"
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
                            class="products__navigation_next-2"
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
                <div class="products__swiper-2 swiper-container">
                    <div class="products__wrapper swiper-wrapper">
                        
                        <?php
                            $args = [
                                'post_type'      => 'product',
                                'posts_per_page' => -1,
                                'post_status'    => 'publish',
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
                                    $product = wc_get_product(get_the_ID());
                                    $image   = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $title   = get_the_title();
                            ?>
                                <div class="products__slide swiper-slide products__slide-2">
                                    <div class="products__slide_img">
                                        <img src="<?= esc_url($image); ?>" alt="<?= esc_attr($title); ?>" />
                                    </div>
                                    <div class="products__slide_text products__slide_text-2">
                                        <h3><?= esc_html($title); ?></h3>
                                    </div>
                                </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                        
                    </div>
                </div>
                <a href="##" class="products__button button submit"
                    ><?= pll__('Оставить заявку'); ?> <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                    alt="chevron-right" /></a
                >
            </div>
        </section>

        <section class="truck">
            <div class="truck__container">
                <div class="truck__title">
                    <?= get_field('title'); ?>
                </div>
                <div class="truck__columns">
                    <div class="truck__content">
                        <?php if( have_rows('ways') ): ?>
                            <?php while( have_rows('ways') ): the_row(); 

                                    $title = get_sub_field('title');
                                    $text = get_sub_field('text');
                                    
                                ?>

                                <div class="truck__content_item">
                                    <h3 class="truck__content_title blue-title">
                                        <?= $title; ?>
                                    </h3>
                                    <p class="truck__content_text">
                                        <?= $text; ?>
                                    </p>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="truck__image">
                        <img src="<?= get_field('image'); ?>"
                        alt="truck" />
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="products__container">
                <div class="products__titlebox">
                    <h2 class="title products__title">
                        Другие товары компании
                    </h2>
                    <div class="products__navigation">
                        <svg
                            class="products__navigation_prev"
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
                            class="products__navigation_next"
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
                <div class="products__swiper swiper-container">
                    <div class="products__wrapper swiper-wrapper">
                        <?php
                            $args = [
                                'post_type'      => 'product',
                                'posts_per_page' => -1,
                                'post_status'    => 'publish',
                                'orderby'        => 'date',
                                'order'          => 'ASC',
                                'tax_query'      => [
                                    [
                                        'taxonomy' => 'product_cat',
                                        'field'    => 'slug',
                                        'terms'    => ['crushed'],
                                        'operator' => 'NOT IN',
                                    ],
                                ],
                            ];

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) :
                                while ($loop->have_posts()) : $loop->the_post();
                                    global $product;
                                    ?>
                                    
                                    <a href="<?= esc_url(get_field('link')); ?>"
                                        class="products__slide swiper-slide">

                                        <div class="products__slide_img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo wc_placeholder_img_src(); ?>" alt="product" />
                                            <?php endif; ?>
                                        </div>

                                        <div class="products__slide_text">
                                            <h3><?php the_title(); ?></h3>
                                        </div>

                                    </a>

                                <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                    </div>
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