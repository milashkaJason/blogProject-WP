<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blockbox
 */
global $redux_demo;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://use.fontawesome.com/e3bd3298f7.js"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php //wp_body_open(); ?>
<header class="position-header">
    <div class="header">
        <div class="header__logo">
            <a href="<?php echo get_bloginfo('url'); ?>">
                <img src="<?php echo $redux_demo['add-logo']['url']; ?>" alt="">
            </a>
            <i type="checkbox" id="switch" name="theme" class="changeTheme d-none d-lg-block fa fa-adjust"></i>
        </div>
        <?php
        wp_nav_menu(array(
           'theme_location' => 'header',
           'menu_id' => 'headerMenu',
           'container' => 'div',
           'container_class' => 'header__menu d-none d-lg-block',
            'menu_class'      => 'menu__items'
        ));

        ?>
        <span class="menu__item d-none d-lg-block">
            <button data-micromodal-trigger="modal-1"><?php echo $redux_demo['text-btn']?></button>
        </span>
        <div class="menu d-block d-lg-none">
            <span></span>
        </div>
    </div>
</header>
