<?php
    /*
        Template name: Manufacture
    */
?>
<?= get_header(); ?>

    <main class="wrapper">
        <section class="manufac">
            <div class="manufac__container">
                <div class="manufac__bg bg">
                    <div class="manufac__bg_wrapper bg__wrapper">
                        <img
                            src="<?= bloginfo("template_url"); ?>/assets/img/webp/manufac-bg.webp"
                            alt="about-bg"
                        />
                    </div>
                </div>
                <div class="manufac__breadcrumbs breadcrumbs">
                    <a href="<?= get_home_url(); ?>"><?= pll__('Главная'); ?></a>
                    <img
                        src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                        alt="chevron-right"
                    />
                    <span><?= get_the_title(); ?></span>
                </div>
                <h1 class="manufac__title prod__title"><?= get_the_title(); ?></h1>
            </div>
            <div class="manufac__content">
                <div class="manufac__container">
                    <p>
                        <strong
                            ><?= pll__('Производство TIANSHAN INDUSTRIES организовано по принципу полного технологического цикла — от добычи сырья до выпуска готовой продукции с гарантированными характеристиками.'); ?></strong
                        >
                    </p>
                    <p>
                        <?= pll__('Такой подход позволяет обеспечивать стабильное качество, высокую повторяемость показателей и надёжность поставок для клиентов из различных отраслей промышленности.'); ?>
                    </p>
                    <div class="manufac__accordeons">

                        <?php if( have_rows('accordeon') ): ?>
                            <?php while( have_rows('accordeon') ): the_row(); 

                                $title = get_sub_field('title');
                                $text = get_sub_field('text');
                                ?>

                            <div class="manufac__accordeon accordeon">
                                <div class="accordeon__question">
                                    <h3><?= $title; ?></h3>
                                    <div class="accordeon__vector">
                                        <img
                                            src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-up.svg"
                                            alt="chevron-up"
                                        />
                                    </div>
                                </div>
                                <div class="accordeon__answer">
                                     <?= $text; ?>
                                </div>
                            </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="manufac__image">
                        <img
                            src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                            alt="manufacturing"
                        />
                    </div>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="form__container">
                <div class="form__columns">
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/big-stone.webp" alt="big-stone" />
                    <img
                        src="<?= bloginfo("template_url"); ?>/assets/img/webp/little-stone.webp"
                        alt="little-stone"
                    />
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
