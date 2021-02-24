<?php
/**
 * Template name: blogPage
*/
get_header();
?>
    <div class="background-black">
        <div class="container">
            <h1 class="blog-tittle">Connect to your customers in a whole new way </h1>
            <h3 class="blog-sub-tittle">
                Cupcake danish tiramisu powder soda ginger cake. Dessert carrot cake tartsweet
                marzipan for fruitcake.
            </h3>
            <div class="row justify-content-center">

<?php
$params = array(
    'posts_per_page' => 1000000 // этот параметр не обязателен, так как get_posts() по умолчанию и так выводит 5 постов
);

$posts = get_posts($params);



foreach( $posts as $post ){
    setup_postdata($post);
    ?>
    <?php
        $textContent = get_the_content();
        $substrText = mb_substr($textContent, 0, 50);
        $textExcerpt = get_the_excerpt();

        if(strlen($textExcerpt) >= 70) {
            $text = $substrText;
        } else {
            $text = $textExcerpt;
        }
    ?>
    <div class="col-12 col-sm-12 col-md-6 col-xl-4 p-0 box ">
        <div class="blog-item">
            <img src="<?php if(get_the_post_thumbnail_url(get_the_ID(), 'full'))
            {
                echo get_the_post_thumbnail_url(get_the_ID(), 'full');
            } else {
                echo get_template_directory_uri() ."/assets/images/default.png";
            } ?>" alt="" class="blog-item__people">
            <div class="blog-item__card">
                <img src="<?php  echo get_template_directory_uri()?>/assets/images/blogimg1.svg" alt="" class="blog-item__img">
                <h3 class="blog-item__tittle"><?php the_title();?></h3>
                <p class="blog-item__sub-tittle"><?php echo $text ?></p>
                <a href="<?php the_permalink(); ?>" class="blog-item__link">Learn more &rarr;</a>
            </div>
        </div>
    </div>

    <?php
}

//wp_reset_postdata(); // сброс
?>

















            </div>
    <div class="customer-first__statistic row">
        <div class="col-sm-6 col-lg-3 text-center">
            <img src="<?php  echo get_template_directory_uri()?>/assets/images/customersvg1.svg" alt="" class="customer-first__statistic-img">
            <h3 class="customer-first__statistic-calc">99.95%</h3>
            <p class="customer-first__statistic-tittle">Accuracy rate</p>
            <p class="customer-first__statistic-sub-tittle">in fulfilling orders</p>
        </div>
        <div class="col-sm-6 col-lg-3 text-center">
            <img src="<?php  echo get_template_directory_uri()?>/assets/images/customersvg2.svg" alt="" class="customer-first__statistic-img">
            <h3 class="customer-first__statistic-calc">10.5M</h3>
            <p class="customer-first__statistic-tittle">On the Inc. 5000</p>
            <p class="customer-first__statistic-sub-tittle">Business Deals</p>
        </div>
        <div class="col-sm-6 col-lg-3 text-center">
            <img src="<?php  echo get_template_directory_uri()?>/assets/images/customersvg3.svg" alt="" class="customer-first__statistic-img">
            <h3 class="customer-first__statistic-calc">3,000+</h3>
            <p class="customer-first__statistic-tittle">Ecommerce businesses</p>
            <p class="customer-first__statistic-sub-tittle">happy customers</p>
        </div>
        <div class="col-sm-6 col-lg-3 text-center">
            <img src="<?php  echo get_template_directory_uri()?>/assets/images/customersvg4.svg" alt="" class="customer-first__statistic-img">
            <h3 class="customer-first__statistic-calc">A12</h3>
            <p class="customer-first__statistic-tittle">World class </p>
            <p class="customer-first__statistic-sub-tittle">service provider</p>
        </div>
    </div>

<?php
get_footer();
