<?php
/**
 * youth_center functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package youth_center
 */

if ( ! function_exists( 'youth_center_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function youth_center_setup() {

        if( function_exists('acf_add_options_page') ) {

            acf_add_options_page(array(
                'page_title' 	=> 'Theme General Settings',
                'menu_title'	=> 'Theme Settings',
                'menu_slug' 	=> 'theme-general-settings',
                'redirect'		=> false
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Header Settings',
                'menu_title'	=> 'Header',
                'parent_slug'	=> 'theme-general-settings',
            ));

            acf_add_options_sub_page(array(
                'page_title' 	=> 'Theme Footer Settings',
                'menu_title'	=> 'Footer',
                'parent_slug'	=> 'theme-general-settings',
            ));

        }
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on youth_center, use a find and replace
		 * to change 'youth_center' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'youth_center', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'youth_center' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'youth_center' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'youth_center_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'youth_center_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function youth_center_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'youth_center_content_width', 640 );
}
add_action( 'after_setup_theme', 'youth_center_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function youth_center_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'youth_center' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'youth_center' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'youth_center_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function youth_center_scripts() {

   /* wp_dequeue_style('stagod');
    wp_enqueue_style('stagod', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(  get_stylesheet_directory() . '/style.css' ) );*/

    wp_dequeue_style('normalize');
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() .'/assets/css/nivo-lightbox-theme/normalize.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/nivo-lightbox-theme/normalize.css' ) );

    wp_dequeue_style( 'fontello');
    wp_enqueue_style( 'fontello', get_stylesheet_directory_uri() .'/assets/css/nivo-lightbox-theme/fontello.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/nivo-lightbox-theme/fontello.css' ) );

    wp_dequeue_style( 'style');
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/assets/css/style.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/style.css' ));

    wp_dequeue_style( 'style');
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/bootstrap.min.css' ));

    wp_dequeue_style( 'font-awesome');
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/assets/font-awesome/css/font-awesome.min.css', array(), filemtime(  get_stylesheet_directory() . '/assets/font-awesome/css/font-awesome.min.css' ));

    wp_dequeue_style( 'nivo-lightbox');
    wp_enqueue_style( 'nivo-lightbox', get_stylesheet_directory_uri() .'/assets/css/nivo-lightbox.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/nivo-lightbox.css' ));

    wp_dequeue_style( 'nivo-lightbox-theme');
    wp_enqueue_style( 'nivo-lightbox-theme', get_stylesheet_directory_uri() .'/assets/css/nivo-lightbox-theme/default/default.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/nivo-lightbox-theme/default/default.css' ));

    wp_dequeue_style( 'owl-carousel');
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() .'/assets/css/owl.carousel.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/owl.carousel.css' ));

    wp_dequeue_style( 'owl-theme');
    wp_enqueue_style( 'owl-theme', get_stylesheet_directory_uri() .'/assets/css/owl.theme.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/owl.theme.css' ));

    wp_dequeue_style( 'animate');
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() .'/assets/css/animate.css', array(), filemtime(  get_stylesheet_directory() . '/assets/css/animate.css' ));

    wp_dequeue_style( 'css');
    wp_enqueue_style( 'css', get_stylesheet_directory_uri() .'/assets/color/default.css', array(), filemtime(  get_stylesheet_directory() . '/assets/color/default.css' ));


	wp_enqueue_script( 'youth_center-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'youth_center-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'youth_center-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'youth_center_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

