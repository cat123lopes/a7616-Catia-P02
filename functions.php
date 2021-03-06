<?php
/**
* wp_theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package wp_theme
*/

if ( ! function_exists( 'wp_theme_setup' ) ) :
	/**
	* Sets up theme defaults and registers support for various WordPress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which
	* runs before the init hook. The init hook is too late for some features, such
	* as indicating support for post thumbnails.
	*/
	function wp_theme_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wp_theme, use a find and replace
		* to change 'wp_theme' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'wp_theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wp_theme' ),
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
			add_theme_support( 'custom-background', apply_filters( 'wp_theme_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
			) ) );

			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
		}
	endif;
	add_action( 'after_setup_theme', 'wp_theme_setup' );

	/**
	* Set the content width in pixels, based on the theme's design and stylesheet.
	*
	* Priority 0 to make it available to lower priority callbacks.
	*
	* @global int $content_width
	*/
	function wp_theme_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'wp_theme_content_width', 640 );
	}
	add_action( 'after_setup_theme', 'wp_theme_content_width', 0 );

	/**
	* Register widget area.
	*
	* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
	*/
	function wp_theme_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'wp_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wp_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
			) );
		}
		add_action( 'widgets_init', 'wp_theme_widgets_init' );

		/**
		* Enqueue scripts and styles.
		*/
		function theme_scripts_styles() {

			//wp_enqueue_script( 'wp_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

			//wp_enqueue_script( 'wp_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

            wp_enqueue_style( 'estilos', get_template_directory_uri() . '/css/estilos.css', array(), '1.0', 'all' );

             wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/libs/bootstrap.min.css', array(), '1.0', 'all' );

						 //wp_enqueue_style( 'jquery.fullPage', get_template_directory_uri() . '/css/libs/jquery.fullPage.css', array(), '1.0', 'all' );

            wp_enqueue_script( 'jquery-3.1.1', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '1.0', true );

			wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true );

			//wp_enqueue_script( 'jquery_fullPage_min', get_template_directory_uri() . '/js/jquery.fullPage.min.js', array(), '1.0', true );

			wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );




			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
				wp_enqueue_script( 'comment-reply' );



			}
		}
		add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

		/**
		* Custom template tags for this theme.
		*/
		require get_template_directory() . '/inc/template-tags.php';
