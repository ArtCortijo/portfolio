<?php
/**
 * artcortijo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artcortijo
 */

if ( ! function_exists( 'artcortijo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function artcortijo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on artcortijo, use a find and replace
		 * to change 'artcortijo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'artcortijo', get_template_directory() . '/languages' );

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
			'primary-menu' => esc_html__( 'Primary', 'artcortijo' ),
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
		add_theme_support( 'custom-background', apply_filters( 'artcortijo_custom_background_args', array(
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
add_action( 'after_setup_theme', 'artcortijo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function artcortijo_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'artcortijo_content_width', 640 );
}
add_action( 'after_setup_theme', 'artcortijo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function artcortijo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'artcortijo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'artcortijo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'artcortijo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function artcortijo_scripts() {
	wp_enqueue_style( 'artcortijo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'art-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap', false, null);
	wp_enqueue_style('artcortijo-custom-style', get_stylesheet_directory_uri() . '/dist/main.css', array(), '1.0.0', 'all');
	// wp_enqueue_script( 'artcortijo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'artcortijo-customjs', get_template_directory_uri() . '/dist/main.bundle.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'artcortijo_scripts' );

// Remove Admin Toolbar
add_filter('show_admin_bar', '__return_false');

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

/**
 * Custom Post Type : Projects
 */
function projects_post_type() {
 
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'artcortijo' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'artcortijo' ),
		'menu_name'           => __( 'Projects', 'artcortijo' ),
		'parent_item_colon'   => __( 'Parent Project', 'artcortijo' ),
		'all_items'           => __( 'All Projects', 'artcortijo' ),
		'view_item'           => __( 'View Project', 'artcortijo' ),
		'add_new_item'        => __( 'Add New Project', 'artcortijo' ),
		'add_new'             => __( 'Add New', 'artcortijo' ),
		'edit_item'           => __( 'Edit Project', 'artcortijo' ),
		'update_item'         => __( 'Update Project', 'artcortijo' ),
		'search_items'        => __( 'Search Project', 'artcortijo' ),
		'not_found'           => __( 'Not Found', 'artcortijo' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'artcortijo' ),
	);
			 
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'Projects', 'artcortijo' ),
		'description'         => __( "Project I've worked on", 'artcortijo' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'genres' ),
		'menu_icon'           => 'dashicons-desktop',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
	);
			 
	// Registering your Custom Post Type
	register_post_type( 'projects', $args );
}
add_action( 'init', 'projects_post_type', 0 );


// Disable Projects Post Type Comments
add_action('admin_init', function () {
	// Redirect any user trying to access comments page
	global $pagenow;
	
	if ($pagenow === 'edit-comments.php') {
			wp_redirect(admin_url());
			exit;
	}

	// Remove comments metabox from dashboard
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

	// Disable support for comments and trackbacks in post types
	foreach (get_post_types() as $post_type) {
			if (post_type_supports($post_type, 'comments')) {
					remove_post_type_support($post_type, 'comments');
					remove_post_type_support($post_type, 'trackbacks');
			}
	}
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
	remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('admin_init', 'df_disable_comments_admin_bar');