<?php
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twenty-fifteen-child' ),
		'social'  => __( 'Social Links Menu', 'twenty-fifteen-child' ),
        'footer'  => __( 'Footer Menu', 'twenty-fifteen-child' ),
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function t5c_twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twenty-fifteen-child' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twenty-fifteen-child' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 
 	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'twenty-fifteen-child' ),
		'id'            => 'footer-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twenty-fifteen-child' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 't5c_twentyfifteen_widgets_init' );
function t5c_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
 
    wp_enqueue_style( 'google-font-geo400', '//fonts.googleapis.com/css?family=Geo:400' );
 
    wp_enqueue_style( 'google-font-geo400italic', '//fonts.googleapis.com/css?family=Geo:400italic' );
 
    wp_enqueue_style( 'google-font-geo400italic', '//fonts.googleapis.com/css?family=Gabriela' );
}
add_action( 'wp_enqueue_scripts', 't5c_theme_enqueue_styles' );
?>
Raw