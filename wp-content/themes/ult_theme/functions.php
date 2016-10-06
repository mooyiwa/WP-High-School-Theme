<?php
// register three menus
function register_menus() {
register_nav_menus(
array(
'primary-menu' => __('Primary Menu'),
'secondary-menu' => __('Secondary Menu'),
'tertiary-menu' => __('Tertiary Menu')
)
);
}
add_action('init', 'register_menus');


//reg aside
if (function_exists('register_sidebar')) {
register_sidebar(array(
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}
/**
 * Register Widget Area.
 *
 */
function wpgyan_widgets_init() {

	register_sidebar( array(
		'name' => 'Foobar',
		'id' => 'foobar',
		'before_widget' => '<div id="wpgyan-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'wpgyan_widgets_init' );

 
add_action( 'wp_enqueue_scripts', 'superfish_libs' );  
function superfish_libs()  
{  
    // Register each script, setting appropriate dependencies  
    wp_register_script('hoverintent', get_template_directory_uri() . '/js/hoverIntent.js');  
    wp_register_script('bgiframe',    get_template_directory_uri() . '/js/jquery.js');  
    wp_register_script('superfish',   get_template_directory_uri() . '/js/superfish.js', array( 'jquery', 'hoverintent', 'bgiframe' ));  
    wp_register_script('supersubs',   get_template_directory_uri() . '/js/supersubs.js', array( 'superfish' ));  
  
    // Enqueue supersubs, we don't need to enqueue any others in this case, as the dependencies take care of it for us  
    wp_enqueue_script('supersubs'); 
 
    // Register each style, setting appropriate dependencies 
    wp_register_style('superfishbase',   get_template_directory_uri() . '/css/superfish.css'); 
    wp_register_style('superfishvert',   get_template_directory_uri() . '/css/superfish-vertical.css', array( 'superfishbase' )); 
    wp_register_style('superfishnavbar', get_template_directory_uri() . '/css/superfish-navbar.css', array( 'superfishvert' )); 
 
    // Enqueue superfishnavbar, we don't need to enqueue any others in this case either, as the dependencies take care of it  
    wp_enqueue_style('superfishnavbar');  
}

function new_excerpt_length($length) {
	return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');