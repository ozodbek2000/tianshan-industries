<?php
    /*
        Template name: About
    */
?>

<?= get_header(); ?>

    <main class="wrapper">
        <section class="about">
            <div class="about__bg bg">
                <div class="about__bg_wrapper bg__wrapper">
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/about-bg.webp" alt="about-bg" />
                </div>
            </div>
            <div class="about__container">
                <div class="about__breadcrumbs breadcrumbs">
                    <a href="<?= get_home_url(); ?>"><?= pll__('Главная'); ?></a>
                    <img
                        src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                        alt="chevron-right"
                    />
                    <span><?= get_the_title(); ?></span>
                </div>
                <h1 class="about__title prod__title"><?= get_the_title(); ?></h1>
            </div>
            <div class="about__content">
                <div class="about__container">
                    <p class="about__content_subtitle">
                        <?= pll__('СП ООО TIANSHAN INDUSTRIES — один из ведущих производителей негашёной и гашёной извести, а также продукции из известняка в Республике Узбекистан.'); ?>
                    </p>
                    <div class="about__columns">
                        <div class="about__columns_content">
                            <h2 class="about__columns_content-title title">
                                <?= pll__('Высокое качество и надёжность'); ?>
                            </h2>
                            <p>
                                <?= pll__('Уже более 7 лет компания последовательно укрепляет репутацию надёжного промышленного партнёра, предлагая рынку продукцию со стабильно высокими качественными показателями.'); ?>
                            </p>
                            <br />
                            <p>
                                <?= pll__('Все производственные процессы основаны на современной технической базе, собственной сырьевой инфраструктуре и строгом контроле на каждом этапе — от добычи известняка до выпуска готовой продукции.'); ?>
                            </p>
                        </div>
                        <div class="about__columns_image">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/about01.webp"
                                alt="about"
                            />
                        </div>
                    </div>
                    <div class="about__prod_columns">
                        <div class="about__prod_columns-image">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/about02.webp"
                                alt="about"
                            />
                        </div>
                        <div class="about__prod_columns-content">
                            <h3>
                                <?= pll__('Производственный комплекс компании расположен в Джизакской области, Форишском районе (Эгизбулок МФЙ, 3 сектор)'); ?>
                            </h3>
                            <p>
                                <?= pll__('На территории предприятия находится собственное месторождение известняка площадью 40 гектаров, что обеспечивает бесперебойное снабжение сырьём и позволяет поддерживать полный контроль качества на протяжении всего производственного цикла.'); ?>
                            </p>
                        </div>
                    </div>
                    <p class="about__prod_text">
                        <?= pll__('<strong>В 2019 году</strong> был введён в эксплуатацию современный завод <strong >проектной мощностью 100 000 тонн извести в год.</strong >'); ?>
                    </p>
                    <div class="about__prod_cards">
                        <div class="about__prod_cards-text">
                            <?= get_the_content(); ?>
                        </div>
                        <div class="about__prod_cards-image">
                            <img
                                src="<?= bloginfo("template_url"); ?>/assets/img/webp/about03.webp"
                                alt="about"
                            />
                            <a
                                href="/about.html"
                                class="button about__cards-image-button"
                            >
                                <?= pll__('подробнее о производстве'); ?>
                                <img
                                    src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                                    alt="chevron-right"
                                />
                            </a>
                        </div>
                    </div>
                    <p class="about__prod_about">
                        <?= pll__('Если вам требуется высококачественная известь или продукция из известняка <strong> TIANSHAN INDUSTRIES </strong> предлагает надёжное промышленное решение, основанное на опыте, современных технологиях и собственной ресурсной базе.'); ?>
                    </p>
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