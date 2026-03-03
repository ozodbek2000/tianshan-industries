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
                            <p>
                                Производство осуществляется с использованием
                                <strong
                                    >энергоэффективной шахтной печи,</strong
                                >
                                обеспечивающей равномерный обжиг и
                                устойчивые физико-химические характеристики
                                продукции с минимальными отклонениями.
                                Складские мощности предприятия позволяют
                                единовременно хранить
                                <strong
                                    >до 2 000 тонн готовой
                                    продукции,</strong
                                >
                                что гарантирует оперативные отгрузки и
                                непрерывность поставок.
                            </p>
                            <br />
                            <p>
                                Качество продукции соответствует
                                государственным стандартам
                                <strong>ГОСТ 9179-2018</strong> и
                                международным требованиям. Стабильность
                                характеристик подтверждается регулярными
                                лабораторными испытаниями. Мы производим
                                известь с учётом современных отраслевых и
                                экологических норм, помогая нашим клиентам
                                повышать эффективность технологических
                                процессов и снижать производственные
                                издержки.
                            </p>
                            <br />
                            <p>
                                Благодаря технологичности производства,
                                высокому качеству сырья и строгому контролю
                                наша продукция востребована по всему
                                Узбекистану, а также экспортируется в страны
                                Центральной Азии и Россию, где она ценится
                                за надёжность, стабильность свойств и
                                соответствие мировым требованиям.
                            </p>
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