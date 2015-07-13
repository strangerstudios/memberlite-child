<?php
/**
 * MemberLite Child 1.0 functions and definitions
 *
 * @package Member Lite Child 1.0
 */
 
 /**
 * Enqueue scripts and styles.
 */
function memberlitechild_scripts() {
	wp_enqueue_style( 'memberlitechild-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'memberlitechild_scripts', 20 );

function memberlitechild_load_fonts()
{
	wp_register_style('googleFontsChild', '//fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_style( 'googleFontsChild');
}
add_action('wp_print_styles', 'memberlitechild_load_fonts');
