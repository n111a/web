    <footer>
        <div class="wrap">
            <!-- нужно Редактировать -->
            <div class="title_footer">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
            <!-- нужно Редактировать -->

            <div class="footer_nav">
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'main-menu',
                        'container'       => null,
                        'items_wrap'      => '<ul>%3$s</ul>',
                    ));
                    ?>
                </nav>
            </div>
            <div class="other row">
                <div class="istagram"></div>
                <div class="language row">
                    <a href="http://portsystem.uz/" hreflang="ru-RU" lang="ru-RU" class="
                    <?php if (pll_current_language() == 'ru') {
                        echo ('active');
                    } ?> row"><img src="<?php echo get_template_directory_uri() ?>/img/lang/russia.svg"" title=" Русский" alt="Русский">Русский</a>
                    <a href="http://portsystem.uz/uz/" hreflang="uz-UZ" lang="uz-UZ" class="
                    <?php if (pll_current_language() == 'uz') {
                                                                                                        echo ('active');
                                                                                                    } ?> row"><img src="<?php echo get_template_directory_uri() ?>/img/lang/uzbekistn.svg" title="Oʻzbek" alt="Oʻzbek">Oʻzbek</a>
                </div>
                <div class="facebook"></div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>