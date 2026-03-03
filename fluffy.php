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
                        (Синонимы: гидроокись кальция, пушонка, Hydrated
                        lime)
                    </div>
                    <p class="limestone__synonim_text">
                        Гашёная известь, или гидратная известь (химическая
                        формула
                        <strong>Ca(OH)₂),</strong> — это тонкодисперсный
                        порошок белого цвета, получаемый гидратацией
                        высокоактивной негашёной извести. Процесс гидратации
                        проходит в контролируемых условиях, что обеспечивает
                        стабильные физико-химические параметры и высокую
                        реакционную способность материала.
                    </p>
                    <div class="limestone__item limestone__item-3">
                        <div class="limestone__tabs">
                            <span class="limestone__tab active"
                                >Применение</span
                            >
                            <span class="limestone__tab">Упаковка</span>
                            <span class="limestone__tab">Хранение</span>
                        </div>
                        <div class="limestone__tabs_content content active">
                            <div class="limestone__tabs_content-column">
                                <h3
                                    class="limestone__tabs_content-title blue-title"
                                >
                                    Применение
                                </h3>
                                <ul>
                                    <li>
                                        В различных растворах, производстве
                                        кирпича, газосиликатных блоков
                                    </li>
                                    <li>
                                        В сухих строительных смесях:
                                        штукатурки, затирки, шпатлевки
                                    </li>
                                    <li>
                                        В химической промышленности: для
                                        получения кальцинированной соды, в
                                        производстве карбида кальция,
                                        хлорной извести, бертолетовой соли,
                                        синтетического каучука и т.д.
                                    </li>
                                    <li>
                                        В охране окружающей среды: очистка
                                        дымовых газов от оксида серы;
                                        нейтрализации сточных вод;
                                        регулирование параметров воды.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="limestone__tabs_content content">
                            <div class="limestone__tabs_content-column">
                                <h3
                                    class="limestone__tabs_content-title blue-title"
                                >
                                    Упаковка
                                </h3>
                                <p>
                                    Известь гашеную гидратную (пушонку)
                                    упаковывают в полипропиленовые мешки
                                    (масса по договоренности), МКР до 1000
                                    кг.
                                </p>
                            </div>
                        </div>
                        <div class="limestone__tabs_content content">
                            <div class="limestone__tabs_content-column">
                                <h3
                                    class="limestone__tabs_content-title blue-title"
                                >
                                    Хранение
                                </h3>
                                <p>
                                    Гарантийный срок хранения извести
                                    гашеной гидратной (пушонки) - 30 дней с
                                    момента отгрузки. Срок годности при
                                    соблюдении условий хранения - 6 месяцев
                                    с момента отгрузки.
                                </p>
                            </div>
                        </div>
                    </div>
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
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/big-stone.webp"
                    alt="big-stone" /> <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/little-stone.webp"
                    alt="little-stone" />
                    <div class="form__columns_content">
                        <h2 class="form__title title">
                            Свяжитесь с нашими экспертами
                        </h2>
                        <p class="form__subtitle text">
                            Перезвоним, проконсультируем, подберём лучшие
                            варианты
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
                                    <a href="##"
                                        >обработку персональных данных.</a
                                    >
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
