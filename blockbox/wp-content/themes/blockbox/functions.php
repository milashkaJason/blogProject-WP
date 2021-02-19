<?php
/**
 * blockbox functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blockbox
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'blockbox_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function blockbox_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on blockbox, use a find and replace
		 * to change 'blockbox' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'blockbox', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'blockbox' ),
				'header' => esc_html__( 'header Menu', 'blockbox' ),
				'menuBurger' => esc_html__( 'burger Menu', 'blockbox' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'blockbox_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'blockbox_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function blockbox_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'blockbox_content_width', 640 );
}
add_action( 'after_setup_theme', 'blockbox_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function blockbox_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'blockbox' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'blockbox' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'blockbox_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function blockbox_scripts() {
	wp_enqueue_style( 'blockbox-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'blockbox-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), _S_VERSION );
	wp_enqueue_style( 'blockbox-index', get_template_directory_uri().'/assets/css/index.css', array(), _S_VERSION );
	wp_style_add_data( 'blockbox-style', 'rtl', 'replace' );

	wp_enqueue_script( 'blockbox-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'blockbox_scripts' );

//get redux options
require get_template_directory() . '/inc/redux-options.php';

add_action('init', 'my_custom_init');

function my_custom_init(){
    register_post_type('posts', array(
        'labels'             => array(
            'name'               => 'Posts in home in page', // Основное название типа записи
            'singular_name'      => 'Post', // отдельное название записи типа Book
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new post',
            'edit_item'          => 'Edit post',
            'new_item'           => 'New post',
            'view_item'          => 'See a post',
            'search_items'       => 'Search post',
            'not_found'          => 'Not found post',
            'not_found_in_trash' => 'Not fount in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Posts in blog page'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail')
    ) );
}
remove_filter('the_exceprt', 'wpautop');
//remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter('term_description','wpautop');


