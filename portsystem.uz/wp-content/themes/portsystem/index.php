<?php
get_header();
?>
<header>
    <div class="wrap">
        <h2><?php $arr = explode(" ", get_bloginfo('description'));
            for ($i = 0; $i < count($arr); $i++) {
                if ($i == 3) {
                    echo ('<br>');
                }
                echo ($arr[$i] . " ");
            }
            ?></h2>
        <div class="row">
            <button class="consultation" id="consultation">
                <?php pll_e('consultation'); ?></button>
            <button class="detailed" id="detailed"><?php pll_e('more'); ?></button>
        </div>
        <div class="don_btn">
            <img src="<?php echo get_template_directory_uri() ?>/img/down-arrow.svg" alt="">
        </div>
    </div>
</header>

<?php $posts_main = get_posts(array(
'numberposts' => 2,
'post_type' => 'firstpart',
'suppress_filters' => true,
)); 
foreach($posts_main as $post):?>
<section class="about">
    <div class="wrap">
        <div class="title">
            <h4><?php the_field('what-is-port'); ?> </h4>
        </div>
        <div class="line"></div>
        <div class="text">
            <?php the_field('порт_-_основная_информация'); ?>
        </div>
    </div>
</section>

<section class="video_blog">
    <div class="wrap">
        <div class="row">
            <div class="text">
                <h3><?php the_field('конусльтация_специалиста'); ?></h3>
                <div class="line"></div>
                <p> <?php the_field('консультация_основной_текст');?> </p>
            </div>
            <div class="video">
                <div class="video_block">
                    <video id='my-video' class='video-js' controls preload='auto' poster='<?php echo get_template_directory_uri() ?>/img/video_image.jpg' data-setup='{}'>
                        <source src='<?php echo get_template_directory_uri() ?>/video_01.mp4' type='video/mp4'>
                    </video>
                </div>
            </div>
        </div>
</section>

<section class="device">
    <div class="wrap">
        <div class="title">
            <h4><?php the_field('устройство_порт-системы'); ?></h4>
        </div>
        <div class="line"></div>
        <div class="row">
            <div class="image">
                <img src="<?php the_field('картинка_устройства'); ?>" alt="">
            </div>
            <div class="text">
                <p><b><?php the_field('имплантируемая_порт'); ?></b> <?php the_field('имплантируемая_порт_описание');?> </p>
                <br>
                <p><b><?php the_field('инфузионный_порт');?></b> <?php the_field('инфузионный_порт_описание');?></p>
                <br>
                <p><?php the_field('общая_информаия');?></p>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endforeach; ?>
<section class="advantage">
    <?php
                                                                                            $posts_advantages = get_posts(array(
                                                                                                'numberposts' => 9,
                                                                                                'post_type'   => 'advantages',
                                                                                                'suppress_filters' => true,
                                                                                            ));
                                                                                            $cnt = 1;
                                                                                            ?>
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('preimush'); ?></h4>
            <div class="line"></div>
            <div class="description">
                <p><?php pll_e('preimush_desc'); ?></p>
            </div>
        </div>
        <div class="advantage_list row">
            <?php foreach ($posts_advantages as $post) : ?>
                                                                                                <div class="box row">
                                                                                                    <div class="numb">
                                                                                                        <p><?php echo $cnt ?></p>
                                                                                                </div>
                                                                                                <div class="text">
                                                                                                    <h4><?php the_title(); ?></h4>
                                                                                                <p><?php the_excerpt(); ?></p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <?php
                                                                                                $cnt++;
                                                                                            endforeach; ?>
        </div>
    </div>
</section>

<section class="danger">
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('uxod'); ?></h4>
            <div class="line"></div>
            <div class="danger_image">
                <img src="<?php echo get_template_directory_uri() ?>/img/warning.svg" alt="">
            </div>
        </div>
        <div class="text">
            <p><?php pll_e('danger'); ?></p>
            <ul>
                <li><?php pll_e('infizirovaniye'); ?></li>
                <li><?php pll_e('zakuporivaniye'); ?></li>
                <li><?php pll_e('utechka'); ?></li>
                <li><?php pll_e('peremesh'); ?></li>
                <li><?php pll_e('tromboz'); ?></li>
                <li><?php pll_e('zashemlen'); ?></li>
            </ul>
            <p class="text"><?php pll_e('usage'); ?>
            </p>
        </div>

    </div>
</section>

<section class="after">
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('photops'); ?></h4>
            <div class="line"></div>
            <div class="description">
                <p><?php pll_e('time'); ?></p>
            </div>
            <div class="image row">
                <div class="box">
                    <img src="<?php echo get_template_directory_uri() ?>/img/port-foto-posle-usta.jpg" alt="">
                </div>
                <div class="box">
                    <img src="<?php echo get_template_directory_uri() ?>/img/port-foto-posle-usta_1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="install" id="install">
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('instalation'); ?></h4>
            <div class="line"></div>
        </div>
        <div class="install_box row">
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/img/install.png" alt="">
                <p><?php pll_e('instalphoto'); ?></p>
            </div>
            <div class="text">
                <p><?php pll_e('implant');?></p>
            </div>
        </div>
    </div>
</section>

<section class="delete">
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('deleteps'); ?></h4>
            <div class="line"></div>
        </div>
        <div class="delete_box row">
            <div class="text">
                <p><?php pll_e('end');?></p>
            </div>
            <div class="image">
                <img src="<?php echo get_template_directory_uri() ?>/img/delete.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="question">
    <?php
                                                                                            $posts_questions = get_posts(array(
                                                                                                'numberposts' => 10,
                                                                                                'post_type'   => 'questions',
                                                                                                'suppress_filters' => true,
                                                                                            ));
                                                                                            ?>
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('questionsoften'); ?></h4>
            <div class="line"></div>
        </div>
        <div class="question_list">
            <?php foreach ($posts_questions as $post) : ?>
                                                                                                <div class="question_box">
                                                                                                    <div class="row detailed">
                                                                                                        <div class="question_mark">
                                                                                                            <img src="<?php echo get_template_directory_uri() ?>/img/question-mark.svg" alt="">
                                                                                                </div>
                                                                                                <div class="title_detailed">
                                                                                                    <h4><?php the_title(); ?></h4>
                                                                                                </div>
                                                                                                <div class="down">
                                                                                                    <img src="<?php echo get_template_directory_uri() ?>/img/down-arrow_red.svg" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="text">
                                                                                                <p><?php the_field('answer'); ?></p>
                                                                                                </div>
                                                                                            </div>
                                                                                                                                                                        <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="news">
    <?php
                                                                                            $posts_news = get_posts(array(
                                                                                                'post_type'   => 'news',
                                                                                                'suppress_filters' => true,
                                                                                            ));
                                                                                            $flag_news = 0;
                                                                                            ?>
    <div class="wrap">
        <div class="title">
            <h4><?php pll_e('news'); ?></h4>
            <div class="line"></div>
        </div>
        <?php foreach ($posts_news as $post) : ?>
                                                                                                <?php if ($flag == 0) : ?>
                                                                                                    <div class="primary_news row">
                                                                                                        <div class="image">
                                                                                                            <?php the_post_thumbnail(); ?>
                                                                                                    </div>
                                                                                                    <div class="description_primal_news">
                                                                                                        <h3 class="title"><?php the_title(); ?></h3>
                                                                                                    <p class="date"><?php the_field('news-date'); ?></p>
                                                                                                    <div class="line"></div>
                                                                                                    <p class="text"><?php echo wp_trim_words(get_post_field('main-content'), 47, "..."); ?></p>
                                                                                                    <a href="<?php the_permalink(); ?>" class="link"><?php pll_e('more'); ?></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="title_last_news">
                                                                                                    <h4><?php pll_e('latenews'); ?></h4>
                                                                                                    <div class="line"></div>
                                                                                                </div>
                                                                                                <div class="last_news row">
                                                                                                                                                                                        <?php elseif ($flag < 4) : ?>
                                                                                                    <div class="box_news">
                                                                                                        <div class="image">
                                                                                                            <?php the_post_thumbnail(); ?>
                                                                                                    </div>
                                                                                                    <div class="description_last_news">
                                                                                                        <div class="row">
                                                                                                            <h3 class="title"><?php the_title(); ?></h3>
                                                                                                    <p class="date"><?php the_field('news-date'); ?></p>
                                                                                                    </div>
                                                                                                    <div class="line"></div>
                                                                                                    <p class="text"><?php echo wp_trim_words(get_post_field('main-content'), 47, "..."); ?></p>
                                                                                                    <a href="<?php the_permalink(); ?>" class="link"><?php pll_e('more'); ?></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                                                                                                <?php else : break;
                                                                                                endif;
                                                                                                $flag++;
                                                                                            endforeach; ?>


        </div>
        <div class="all_news">
            <a href="./all_news.html"><?php pll_e('allnews'); ?></a>
        </div>
    </div>
</section>

<section class="about_us" id="aboutus">
    <?php $posts_bio = get_posts(array(
                'post_type' => 'bio',
                'suppress_filters' => true,));?>
    <div class="wrap"><?php foreach ($posts_bio as $post) : ?>
                                                                                                <div class="title">

                                                                                                    <h4><?php the_title(); ?></h4>
                                                                                                <div class="line"></div>
                                                                                            </div>
                                                                                            <div class="about">
                                                                                                <div class="title_about">
                                                                                                    <p> <?php the_field('about'); ?> </p>
                                                                                                </div>
                                                                                                <p><?php the_post_thumbnail(); ?>
                                                                                                <?php the_field('bio'); ?> </p>
                                                                                                </div>
                                                                                                                                                                                    <?php endforeach; ?>
    </div>
</section>

<section class="contact_us" id="contact">
    <div class="wrap">
        <div class="row">
            <div class="title">
                <h4><?php pll_e('contact'); ?></h4>
                <div class="line"></div>
                <div class="description">
                    <p><?php pll_e('getanswer'); ?></p>
                </div>
            </div>
            <div class="soc_icons_contact">
                <div class="row telephone">
                    <img src="<?php echo get_template_directory_uri() ?>/img/contact/auricular-phone.svg" alt="">
                    <a href="#"><?php pll_e('number'); ?></a>
                </div>
                <div class="row email">
                    <img src="<?php echo get_template_directory_uri() ?>/img/contact/mail.svg" alt="">
                    <a href="#"><?php pll_e('email'); ?></a>
                </div>
            </div>
        </div>

        <div class="content">
            <?php if (pll_current_language() == 'ru') {
                                                                                                echo do_shortcode('[contact-form-7 id="108" title="Контакты Ru"]');
                                                                                            } else {
                                                                                                echo do_shortcode('[contact-form-7 id="109" title="Контакты Uz"]');
                                                                                            } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>