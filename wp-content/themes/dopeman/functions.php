<?php
/**
 * dopeman functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dopeman
 */

if ( ! function_exists( 'dopeman_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dopeman_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on dopeman, use a find and replace
	 * to change 'dopeman' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'dopeman', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'dopeman' ),
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
	add_theme_support( 'custom-background', apply_filters( 'dopeman_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'dopeman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dopeman_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dopeman_content_width', 640 );
}
add_action( 'after_setup_theme', 'dopeman_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dopeman_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dopeman' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dopeman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dopeman_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dopeman_scripts() {
	wp_enqueue_style( 'dopeman-style', get_stylesheet_uri() );

	wp_enqueue_script( 'dopeman-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'dopeman-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dopeman_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



add_filter( 'show_admin_bar', '__return_false' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
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

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Rsx_scx Settings',
		'menu_title'	=> 'Réseaux sociaux',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}



add_image_size( 'custom-size', 220, 180 );




// Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );

// Add featured image sizes
add_image_size( 'hot-shit', 388, 218, true ); // width, height, crop
add_image_size( 'big-hot-shit', 802, 508, true );
add_image_size( 'litle-apercu', 310, 172, true );
add_image_size( 'medium-apercu', 480, 270, true );
add_image_size( 'data-img', 650, 400, true );
add_image_size( 'category_read_top', 480, 270, true );
add_image_size( 'category_read_four', 224, 125, true );
add_image_size( 'category_read_block', 732, 412, true );
add_image_size( 'category_read_right', 240, 134, true );
add_image_size( 'category_read_full', 985, 552, true );
add_image_size( 'player_background', 500, 500, true );
add_image_size( 'clip_cover', 1280, 720, true );
add_image_size( 'home_mixtape', 180, 180, true );





// Add other useful image sizes for use through Add Media modal
add_image_size( 'medium-width', 480 );
add_image_size( 'medium-height', 9999, 480 );
add_image_size( 'medium-something', 480, 480 );

// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'wpshout_custom_sizes' );
function wpshout_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-width' => __( 'Medium Width' ),
        'medium-height' => __( 'Medium Height' ),
        'medium-something' => __( 'Medium Something' ),
    ) );
}



add_action('template_include', 'load_single_template');
  function load_single_template($template) {
    $new_template = '';

    // single post template
    if( is_single() ) {
      global $post;
      // 'cat-1' and 'cat-2' are category slugs

      if( has_term('numbers', 'category', $post) ) {
        $new_template = locate_template(array('single-numbers.php' ));
      }else if( has_term('listen', 'category', $post) ){
        $new_template = locate_template(array('single-listen.php' ));
	  }else if( has_term('clip', 'category', $post) ){
	    $new_template = locate_template(array('single-video.php' ));
      }else{
        $new_template = locate_template(array('single.php' ));
      }

    }
    return ('' != $new_template) ? $new_template : $template;
  }



add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'artist',
    array(
      'labels' => array(
        'name' => __( 'Albums' ),
        'singular_name' => __( 'Albums' )
      ),
      'public' => true
    )
  );
  register_taxonomy( 'Album', 'album', array( 'hierarchical' => true, 'label' => 'Album', 'query_var' => true, 'rewrite' => true ) );
}

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'album' ) );

 return $query;
}

add_action( 'init', 'create_post_event' );

function create_post_event() {
  register_post_type( 'event',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Events' )
      ),
      'public' => true
    )
  );
  register_taxonomy( 'Event' );
}

add_filter( 'pre_get_posts', 'my_get_event' );

function my_get_event( $query ) {
 if ( is_home() )
 $query->set( 'post_type', array( 'event' ) );

 return $query;
}




