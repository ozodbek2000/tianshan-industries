<?php 
    /* 
        Template name: Limestone
    */
?>

<?= get_header(); ?>
    <main class="wrapper">
        <section class="limestone">
            <div class="limestone__container">
                <div class="limestone__bg bg">
                    <div class="limestone__bg_wrapper bg__wrapper">
                        <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/limestone-bg.webp"
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
                                        ><?= pll__('Оставить заявку'); ?> <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                        alt="chevron-right" /></a
                                    >
                                </div>
                                <?= $characteristic; ?>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="limestone__content_title title">
                        Известь строительная воздушная негашеная комовая по
                        ГОСТ 9179-2018, фракция 5-20 мм. Металлургическая
                        (pH Modifier – Lime)
                    </div>
                    <div class="limestone__columns">
                        <div class="limestone__product">
                            <div class="limestone__product_articule">
                                (Код ТН ВЭД 2522100000)
                            </div>
                            <div class="limestone__product_image">
                                <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/product01.webp"
                                alt="product" />
                            </div>
                            <a
                                href="##"
                                class="limestone__product_submit button submit"
                                >Оставить заявку <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right" /></a
                            >
                        </div>
                        <table class="limestone__grid">
                            <thead>
                                <tr>
                                    <th>Показатель</th>
                                    <th>Метод испытаний ГОСТ</th>
                                    <th>ГОСТ 9179-2018 (норма стандарта)</th>
                                    <th>ТУ для газобетона (дополнение к ГОСТ)</th>
                                    <th>
                                        Фактические физико-химические характеристики
                                    </th>
                                    <th>Соответствие требованиям</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Содержание активных (CaO + MgO), %</td>
                                    <td>22688-2018</td>
                                    <td>В 1 сорте не менее 90%</td>
                                    <td>Не менее 90%</td>
                                    <td>91,0-92,5</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Содержание СО2, %</td>
                                    <td>22688-2018</td>
                                    <td>В 1 сорте не более 3%</td>
                                    <td>Не более 3%</td>
                                    <td>2,2-2,4</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Активный MgO</td>
                                    <td>22688-2018</td>
                                    <td>Не более 5%</td>
                                    <td>Не более 5%</td>
                                    <td>3,99</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Непогасившиеся зерна</td>
                                    <td>22688-2018</td>
                                    <td>Не более 7%</td>
                                    <td>Не более 7%</td>
                                    <td>5,10</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Время гашения</td>
                                    <td>22688-2018</td>
                                    <td>Для 1 сорта не более 8 минут</td>
                                    <td>Не более 5 минут</td>
                                    <td>1,93</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Температура гашения</td>
                                    <td>22688-2018</td>
                                    <td>Не нормируется</td>
                                    <td>Не нормируется</td>
                                    <td>67,5</td>
                                    <td>Соответствует</td>
                                </tr>
                                <tr>
                                    <td>Максимальный размер куска</td>
                                    <td></td>
                                    <td>Не нормируется</td>
                                    <td>40 мм</td>
                                    <td>20 мм</td>
                                    <td>Соответствует</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="limestone__content_title title">
                        Известь строительная воздушная негашеная комовая по
                        ГОСТ 9179-2018, фракция 60-120 мм (Компонент
                        AAC-Автоклавный газобетон)
                    </div>
                    <div class="limestone__columns">
                        <div class="limestone__product">
                            <div class="limestone__product_articule">
                                (Код ТН ВЭД 2522100000)
                            </div>
                            <div class="limestone__product_image">
                                <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/product02.webp"
                                alt="product" />
                            </div>
                            <a
                                href="##"
                                class="limestone__product_submit button submit"
                                >Оставить заявку <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                alt="chevron-right" /></a
                            >
                        </div>
                        <div class="limestone__char">
                            <div class="limestone__char_title">
                                Физико-химические характеристики
                            </div>
                            <table class="limestone__grid">
                                <thead>
                                    <tr>
                                        <th>Показатель</th>
                                        <th>Метод испытаний ГОСТ</th>
                                        <th>ГОСТ 9179-2018 (норма стандарта)</th>
                                        <th>ТУ для газобетона (дополнение к ГОСТ)</th>
                                        <th>
                                            Фактические физико-химические характеристики
                                        </th>
                                        <th>Соответствие требованиям</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Содержание активных (CaO + MgO), %</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>В 2 сорте не менее 80%</td>
                                        <td>Не менее 80%</td>
                                        <td>85,0-89,0</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Содержание СО2, %</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>В 1 сорте не более 4%</td>
                                        <td>Не более 4%</td>
                                        <td>2,3-2,8</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Активный MgO</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>Не более 5%</td>
                                        <td>Не более 5%</td>
                                        <td>3,99</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Непогасившиеся зерна</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>Не более 7%</td>
                                        <td>Не более 7%</td>
                                        <td>5,10</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Время гашения</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>Для 2 сорта не более 8 минут</td>
                                        <td>Не более 5 минут</td>
                                        <td>7-12 минут</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Температура гашения</td>
                                        <td>ГОСТ 22688-2018</td>
                                        <td>Не нормируется</td>
                                        <td>Не менее 65° С</td>
                                        <td>68° С</td>
                                        <td>Соответствует</td>
                                    </tr>
                                    <tr>
                                        <td>Максимальный размер куска</td>
                                        <td></td>
                                        <td>Не нормируется</td>
                                        <td>120 мм</td>
                                        <td>120 мм</td>
                                        <td>Соответствует</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
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

                        <!-- <div class="truck__content_item">
                            <h3 class="truck__content_title blue-title">
                                Самосвалы или тентованные полуприцепы
                            </h3>
                            <p class="truck__content_text">
                                Продукция отгружается навалом с учётом
                                погодных условий.
                            </p>
                        </div>
                        <div class="truck__content_item">
                            <h3 class="truck__content_title blue-title">
                                Тентованные полуприцепы (еврофуры)
                            </h3>
                            <p class="truck__content_text">
                                Фасованная негашёная известь поставляется в
                                многослойных бумажных или полипропиленовых
                                мешках с влагозащитой. Мешки укладываются на
                                поддоны весом 1–1,5 т, затем паллеты
                                обматываются стрейч-плёнкой.
                            </p>
                        </div>
                        <div class="truck__content_item">
                            <h3 class="truck__content_title blue-title">
                                Железнодорожный полувагон
                            </h3>
                            <p class="truck__content_text">
                                Поставки в железнодорожных полувагонах
                                требуют предварительной подготовки вагона,
                                так как полувагон является открытым типом
                                подвижного состава.
                            </p>
                        </div>
                        <div class="truck__content_item">
                            <h3 class="truck__content_title blue-title">
                                Хранение
                            </h3>
                            <p class="truck__content_text">
                                Гарантийный срок хранения негашеной извести
                                порошкообразной (молотой) - 30 дней с
                                момента отгрузки. Срок годности при
                                соблюдении условий хранения - 2 месяцев с
                                момента отгрузки.
                            </p>
                        </div> -->
                    </div>
                    <div class="truck__image">
                        <img src="<?= get_field('image'); ?>"
                        alt="truck">
                    </div>
                </div>
            </div>
        </section>

        <section class="products">
            <div class="products__container">
                <div class="products__titlebox">
                    <h2 class="title products__title">
                        <?= pll__('Другие товары компании'); ?>
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
                                        'terms'    => ['quicklime-lump'],
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
