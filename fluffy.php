<?php 
    /*
        Template name: Fluffy
    */
?>
<?= get_header(); ?>
    <main class="wrapper">
        <section class="limestone">
            <div class="limestone__container">
                <div class="limestone__bg bg">
                    <div class="limestone__bg_wrapper bg__wrapper">
                        <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/fluffy-bg.webp"
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
                <h1 class="limestone__title prod__title">
                    <?= get_the_title(); ?>
                </h1>
            </div>
            <div class="limestone__content">
                <div class="limestone__container">
                    <?php if( have_rows('characteristics') ): ?>
                        <?php while( have_rows('characteristics') ): the_row(); 

                                $name = get_sub_field('name');
                                $code = get_sub_field('code');
                                $image = get_sub_field('image');
                                $characteristic = get_sub_field('characteristic');
                            ?>

                        <div class="limestone__content_title title">
                                <?= $name; ?>
                            </div>
                            <div class="limestone__columns">
                                <div class="limestone__product">
                                    <div class="limestone__product_articule">
                                        <?= $code ?>
                                    </div>
                                    <div class="limestone__product_image">
                                        <img src="<?= $image ?>"
                                        alt="product" />
                                    </div>
                                    <a
                                        href="##"
                                        class="limestone__product_submit button submit"
                                        >Оставить заявку <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                        alt="chevron-right" /></a
                                    >
                                </div>
                                <?= $characteristic; ?>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="limestone__synonim">
                        <?= pll__('(Синонимы: гидроокись кальция, пушонка, Hydrated lime)'); ?>
                    </div>
                    <p class="limestone__synonim_text">
                        <?= pll__('Гашёная известь, или гидратная известь (химическая формула <strong>Ca(OH)₂),</strong> — это тонкодисперсный порошок белого цвета, получаемый гидратацией высокоактивной негашёной извести. Процесс гидратации проходит в контролируемых условиях, что обеспечивает стабильные физико-химические параметры и высокую реакционную способность материала.'); ?>
                    </p>
                    <?php if (have_rows('tabs')) : ?>
                        <div class="limestone__item limestone__item-3">
                            <div class="limestone__tabs">
                                <?php $i = 0; while (have_rows('tabs')) : the_row(); $i++; ?>
                                    <span class="limestone__tab <?php echo $i === 1 ? 'active' : ''; ?>">
                                        <?php the_sub_field('title'); ?>
                                    </span>
                                <?php endwhile; ?>
                            </div>

                            <?php $i = 0; while (have_rows('tabs')) : the_row(); $i++; ?>
                                <div class="limestone__tabs_content content <?php echo $i === 1 ? 'active' : ''; ?>">
                                    <div class="limestone__tabs_content-column">
                                        <h3 class="limestone__tabs_content-title blue-title">
                                            <span><?php the_sub_field('title'); ?></span>
                                        </h3>
                                        <?php the_sub_field('text'); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="truck">
            <div class="truck__container">
                <div class="truck__title">
                    <?= get_field('title') ?>
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
                                        'terms'    => ['hydrated-lime'],
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
