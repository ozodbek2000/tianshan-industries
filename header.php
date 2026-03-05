<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tianshan Industries</title>
        <link rel="stylesheet" href="css/style.css" />
        <?= wp_head(); ?>
    </head>
    <body>
        <header class="header" id="header">
            <a href="<?= get_home_url(); ?>" class="header__logo">
                <img
                    class="desktop-only"
                    src="<?= bloginfo("template_url"); ?>/assets/img/webp/logo.webp"
                    alt="logo"
                />
                <img
                    class="mobile-only"
                    src="<?= bloginfo("template_url"); ?>/assets/img/webp/mobile-logo.webp"
                    alt="logo"
                />
            </a>
            <div class="header__menu">
                <ul class="header__top">
                    <li class="header__top_address">
                        <p>
                            <?= pll__('Джизакская область, Форишский район, Эгизбулок МФЙ 3 сектор'); ?>
                        </p>
                    </li>
                    <li class="header__top_number">
                        <a href="tel:+998953407050">+998 95 340 70 50</a>
                    </li>
                    <?php $languages = pll_the_languages(['raw' => 1, 'hide_if_no_translation' => 0, 'hide_current' => 1]); ?>

					<li class="header__top_languages">
						<a href="#">
							<?= esc_html(strtoupper(pll_current_language())) ?>
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6 9L12 15L18 9" stroke="white" stroke-width="2" stroke-linecap="square" stroke-linejoin="round"/>
							</svg>
						</a>
						<ul class="header__languages_list">
							<?php foreach ($languages as $lang) : ?>
								<li>
									<a href="<?= esc_url($lang['url']) ?>">
										<?= esc_html(strtoupper($lang['slug'])) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
                </ul>
                <nav class="header__nav">
                    <ul class="header__nav_list">
                        <li class="header__nav_item">
                            <a href="<?= get_permalink(pll_get_post(147)); ?>"><?= pll__('О компании'); ?></a>
                        </li>
                        <li class="header__nav_item">
                            <a href="<?= get_permalink(pll_get_post(151)); ?>"><?= pll__('О производстве'); ?></a>
                        </li>
                        <li class="header__nav_item">
                            <a href="##" id="production">
                                <?= pll__('Продукция'); ?>
                                <img
                                    class="mobile-only"
                                    src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-down.svg"
                                    alt="chevron-down"
                            /></a>
                        </li>
                        <div class="header__nav_item-inner">
                            <h3 class="mobile-only">
                                <img
                                    src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-left.svg"
                                    alt="chevron-left"
                                />
                                <?= pll__('Продукция'); ?>
                            </h3>
                            <li>
                                <a href="<?= get_permalink(pll_get_post(161)); ?>"
                                    ><?= pll__('Известь негашеная комовая'); ?></a
                                >
                            </li>
                            <li>
                                <a href="<?= get_permalink(pll_get_post(189)); ?>"
                                    ><?= pll__('Известь негашеная порошкообразная'); ?></a
                                >
                            </li>
                            <li>
                                <a href="<?= get_permalink(pll_get_post(191)); ?>"
                                    ><?= pll__('Известь гашеная гидратная (пушонка) порошкообразная'); ?></a
                                >
                            </li>
                            <li>
                                <a href="<?= get_permalink(pll_get_post(193)); ?>"
                                    ><?= pll__('Известняк дробленый фракционный'); ?></a
                                >
                            </li>
                        </div>
                        <li class="header__nav_item">
                            <a href="<?= get_permalink(pll_get_post(222)); ?>"><?= pll__('Контакты'); ?></a>
                        </li>
                        <button class="header__nav_submit desktop-only submit">
                            <?= pll__("Оставить заявку"); ?>
                        </button>
                    </ul>
                </nav>
            </div>
            <div class="header__burger mobile-only">
                <span></span>
            </div>
        </header>