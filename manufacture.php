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
