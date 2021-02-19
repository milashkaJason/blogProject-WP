<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blockbox
 */

get_header();





// проверяем есть ли посты в глобальном запросе - переменная $wp_query
if( have_posts() ){
    // перебираем все имеющиеся посты и выводим их
    while( have_posts() ){
        the_post();
        ?>

        <div class="background">
            <div class="container text-center">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="post-image">
                <p class="post-text">
                    <?php echo get_the_content();?>
                </p>
                <a href="https://blockbox/blog/">
                    <button class="post-btn">back</button>
                </a>
            </div>
        </div>

        <?php
    }
}
// постов нет
else {
    echo "<h2>Записей нет.</h2>";
}



get_footer();
