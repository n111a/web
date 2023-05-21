<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Prelolader -->
    <!--     <section class="prelolader">
        <svg class="filter" version="1.1">
            <defs>
                <filter id="gooeyness">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 20 -10"
                        result="gooeyness" />
                    <feComposite in="SourceGraphic" in2="gooeyness" operator="atop" />
                </filter>
            </defs>
        </svg>
        <div class="dots">
            <div class="dot mainDot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </section> -->

    <!-- Prelolader -->

    <div id="top_menu">
        <div class="wrap">
            <div class="row">
                <!-- нужно Редактировать -->

                <div class="logo">
                    <a href="portsystem.uz" class="row">
                        <img src="<?php $imgmain = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                        echo $imgmain[0]; ?>">

                        <div class="description_logo">
                            <h1> <?php $arr = explode(" ", get_bloginfo('name'));
                                    for ($i = 0; $i < count($arr); $i++) {
                                        if ($i % 2 == 0 && $i != 0) {
                                            echo ('<br>');
                                        }
                                        echo ($arr[$i] . " ");
                                    }
                                    ?></h1>
                            <!-- <h1>ВЕНОЗНЫЙ ПОРТ ДЛЯ<br>ХИМИОТЕРАПИИ</h1> -->
                        </div>
                    </a>
                </div>

                <!-- нужно Редактировать -->
                <div class="elements_top_menu row">
                    <nav>
                        <?php
                                    wp_nav_menu(array(
                                        'theme_location'  => 'main-menu',
                                        'container'       => null,
                                        'items_wrap'      => '<ul>%3$s</ul>',
                                    ));
                                    ?>
                    </nav>
                    <div class="social_network">
                        <div class="row">
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/social_icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/social_icons/instagram.svg" alt=""></a>
                        </div>
                        <h3 class="number"><?php pll_e('number'); ?></h3>
                        <div class="lang">
                            <?php if (pll_current_language() == 'uz') : ?>
                                                        <a href="http://portsystem.uz/uz/" hreflang="uz-UZ" lang="uz-UZ"><img src="<?php echo get_template_directory_uri() ?>/img/lang/uzbekistn.svg" title="Oʻzbek" alt="Oʻzbek" id="send_lang"></a>
                                                                                                        <div class=" drop">
                                                                                                            <a href="http://portsystem.uz/" hreflang="ru-RU" lang="ru-RU"><img src="<?php echo get_template_directory_uri() ?>/img/lang/russia.svg"" title=" Русский" alt="Русский">Русский</a>
                                                                                                        </div>
                                                                                                                                                                                <?php else : ?>
                                                                                                        <a href="http://portsystem.uz/" hreflang="ru-RU" lang="ru-RU"><img src="<?php echo get_template_directory_uri() ?>/img/lang/russia.svg" title=" Русский" alt="Русский" id="send_lang"></a>
                                                                                                        <div class=" drop">
                                                                                                            <a href="http://portsystem.uz/uz/" hreflang="uz-UZ" lang="uz-UZ"><img src="<?php echo get_template_directory_uri() ?>/img/lang/uzbekistn.svg" title="Oʻzbek" alt="Oʻzbek">O'zbek</a>
                                                                                                            </div>
                                                                                                                                                                                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div id="toggle_btn" class="toggle_btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>