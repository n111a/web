     <?php /* Template Name: Новости */ ?>
    <?php get_header(); ?>
    <section class="all_news">
        <div class="wrap">
            <div class="title">
                <h4><?php pll_e('allnews');?></h4>
                <div class="line"></div>
            </div>
            <?php
                $posts_news = get_posts(array(
                'post_type'   =>'news',
                'suppress_filters' => true, 
            ));
            ?>
            <?php foreach ($posts_news as $post): ?>
            <div class="row">
                <div class="image">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="description">
                    <h3 class="title"><?php the_title();?></h3>
                    <div class="line"></div>
                    <p class="date"><?php the_field('news-date'); ?></p>
                    <p class="text"><?php echo wp_trim_words( get_post_field('main-content'), 47, "..." );?> </p> <!-- 47 слов и потом  "...." не забудь ток Мразматик :)  -->
                    <a href="<?php the_permalink(); ?>" class="link"><?php pll_e('more');?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>  
    </section>
    <?php get_footer();?>