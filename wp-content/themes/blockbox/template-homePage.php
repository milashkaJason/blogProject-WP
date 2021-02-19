<?php
/**
 * Template name: homePage
*/

get_header();
?>

    <div class="background">
        <div class="container">
            <div class="home-page">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 text-center text-md-left">
                        <h1 class="home-page__tittle">
                            <?php echo get_field('tittle_firstBlock_homePage')?>
                        </h1>
                    </div>
                    <div class="col-sm-12 col-md-5 offset-md-1 offset-lg-1 col-lg-5 text-center text-md-left">
                        <p class="home-page__text">
                            <?php echo get_field('text_firstBlock_homePage')?>
                        </p>
                        <button data-micromodal-trigger="modal-5" class="home-page__btn"><?php echo get_field('name_of_button_first_block')?> &rarr;</button>
                    </div>
                </div>
                <div class="home-page__homePad">
                    <img src="<?php echo get_field('set_photo_first_block')['url']  ?>" alt="">

                </div>
            </div>
            <div class="quick-start">
                <h2 class="quick-start__tittle">Pre-made websites for a quick start</h2>
                <p class="quick-start__sub-tittle">
                    Cupcake danish tiramisu powder soda ginger cake. Dessert carrot cake
                    tartsweet marzipan for fruitcake.
                </p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-3 offset-md-1 text-center">
                        <img src="<?php echo  get_template_directory_uri()?>/assets/images/quickStartImages1.png" alt="">
                        <h3 class="card-tittle">1. Discover</h3>
                        <p class="card-subtittle">
                            Cake croissant jelly, beans bonbon chocolate, cake jelly beans macaroon.
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 text-center">
                        <img src="<?php echo  get_template_directory_uri()?>/assets/images/quickStartImages2.png" alt="">
                        <h3 class="card-tittle">2. Copy & Paste</h3>
                        <p class="card-subtittle">
                            Wafer donut donut. Halvah wafer chocolate lollipop, tootsie roll pie chupa chups liquorice.
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 text-center">
                        <img src="<?php  echo get_template_directory_uri()?>/assets/images/quickStartImages3.png" alt="">
                        <h3 class="card-tittle">3. Export & Share</h3>
                        <p class="card-subtittle">
                            Dessert marzipan, halvah sweet chocolate bar, cookie icing. Chocolate cake lemon.
                        </p>
                    </div>
                </div>
                <div class="row quick-start__block-box">
                    <div class="col-sm-12 col-md-7 col-xl-4 offset-xl-1 text-center">
                        <img src="<?php echo  get_template_directory_uri()?>/assets/images/quick-startPeople.png" alt="">
                    </div>
                    <div class="lifeCycle col-sm-12 col-md-5 col-xl-5 offset-xl-1">
                        <p class="lifeCycle__text">“With BlockBox, we have
                            seen 30% revenue growth quarter over quarter and now we’re rolling it out across the entire
                            customer lifecycle.”
                        </p>
                        <p class="lifeCycle__sub-text">
                            kevin Pietersen, VP of Marketing
                        </p>
                        <img src="<?php  echo get_template_directory_uri()?>/assets/images/sendGrid.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="customer-first">
                <h2 class="customer-first__tittle">Here are some of the rewards from putting our customer first.</h2>
                <p class="customer-first__sub-tittle">
                    Cupcake danish tiramisu powder soda ginger cake. Dessert carrot cake tartsweet marzipan for fruitcake.
                </p>
                <div class="customer-first__cards row">

                    <?php

                    // задаем нужные нам критерии выборки данных из БД
                    $args = array(
                        'post_type' => 'posts',
                        'post_per_page' => 4
                    );

                    $posts = new WP_Query( $args );
                    if ( $posts->have_posts() ) {
                        while ( $posts->have_posts() ) {
                            $posts->the_post(); ?>

                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="customer-first__item">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="" class="customer-first__img">
                                    <div class="customer-first__text-part">
                                        <img class="customer-first__card-img" src="<?php  echo get_template_directory_uri()?>/assets/images/customer-first__card-img1.svg" alt="нет изображения">
                                        <h4 class="customer-first__card-tittle"><?php the_title(); ?></h4>
                                        <p class="customer-first__card-text"><?php the_content(); ?></p>
                                        <a class="customer-first__card-btn" href="">Learn more &rarr;</a>
                                    </div>
                                </div>
                            </div>

                         <?php } wp_reset_postdata();} else { echo'no posts'; }
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
            </div>

<?php
get_footer();
