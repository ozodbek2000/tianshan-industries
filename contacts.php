<?php 
    /*
        Template name: Contacts
    */
?>
<?= get_header(); ?>
    <main class="wrapper">
        <section class="contacts">
            <div class="contacts__container">
                <div class="contacts__bg bg">
                    <div class="contacts__bg_wrapper bg__wrapper">
                        <img src="<?= bloginfo("template_url"); ?>/assets/img/webp/contacts-bg.webp"
                        alt="about-bg" />
                    </div>
                </div>
                <div class="contacts__breadcrumbs breadcrumbs">
                    <a href="<?= get_home_url(); ?>"><?= pll__('Главная'); ?></a>
                    <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-right.svg"
                    alt="chevron-right" />
                    <span><?= get_the_title(); ?></span>
                </div>
                <h1 class="contacts__title prod__title"><?= get_the_title(); ?></h1>
            </div>
            <div class="contacts__content">
                <div class="contacts__container">
                    <div class="contacts__columns">
                        <div class="contacts__info">
                            <div class="contacts__content_title title">
                                <?= pll__('сп ооо tiashan industries'); ?>
                            </div>
                            <p class="contacts__address">
                                <?= pll__('Джизакская область, Форишский район, Эгизбулок МФЙ 3 сектор'); ?>
                            </p>
                            <div class="contacts__info_links">
                                <div>
                                    <a
                                        href="tel:<?= preg_replace('/[^+\d]/', '', get_theme_mod('phone', '')); ?>"
                                        class="contacts__info_links-phone"
                                    >
                                        <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/phone.svg"
                                        alt="phone" /><?= get_theme_mod('phone', ''); ?>
                                    </a>
                                </div>
                                <div>
                                    <a
                                        href="mailto:<?= get_theme_mod('email', ''); ?>"
                                        class="contacts__info_links-mail"
                                    >
                                        <img src="<?= bloginfo("template_url"); ?>/assets/img/svg/mail.svg"
                                        alt="mail" /> <?= get_theme_mod('email', ''); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="contacts__socials">
                                <?php if ($whatsapp = get_theme_mod('whatsapp', '')) : ?>
                                    <a href="<?= $whatsapp ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/webp/whatsapp.webp" alt="whatsapp" />
                                    </a>
                                <?php endif; ?>

                                <?php if ($telegram = get_theme_mod('telegram', '')) : ?>
                                    <a href="<?= $telegram ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/webp/telegram.webp" alt="telegram" />
                                    </a>
                                <?php endif; ?>

                                <?php if ($youtube = get_theme_mod('youtube', '')) : ?>
                                    <a href="<?= $youtube ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/webp/youtube.webp" alt="youtube" />
                                    </a>
                                <?php endif; ?>

                                <?php if ($facebook = get_theme_mod('facebook', '')) : ?>
                                    <a href="<?= $facebook ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/webp/facebook-color.webp" alt="facebook" />
                                    </a>
                                <?php endif; ?>

                                <?php if ($instagram = get_theme_mod('instagram', '')) : ?>
                                    <a href="<?= $instagram ?>">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/webp/instagram.webp" alt="instagram" />
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="contacts__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d386196.79933872656!2d66.94971835331498!3d40.868308036386644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1772076208972!5m2!1sru!2s"
                                width="600"
                                height="450"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
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