<?php /* Template Name: Новости отдельно*/ ?>
<?php get_header(); ?>
<section class="preview_news">
            <div class="name_news">
                <div class="image">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="name">
                    <h4 class="title"><?php the_title();?></h4>
                    <div class="line"></div>
                    <p class="date"><?php the_field('news-date'); ?></p>
                </div>
            </div>
            <div class="wrap">
                <div class="text">
                    <article>
                        <?php  the_field('main-content')?>
                    </article>
                </div>
            </div>
<?php get_footer(); ?>