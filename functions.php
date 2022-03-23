<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

function egkerk_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Home Page Left', 'eg-kerk' ),
			'id'            => 'home-left',
			'description'   => esc_html__( 'Add widgets here.', 'eg-kerk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Home Page Right', 'eg-kerk' ),
			'id'            => 'home-right',
			'description'   => esc_html__( 'Add widgets here.', 'eg-kerk' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'egkerk_widgets_init' );

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'secondpress-style' ) );
	    wp_enqueue_style( 'datatables-css', trailingslashit( get_stylesheet_directory_uri() ) . 'css/datatables.min.css', array(), null, false );
	    wp_enqueue_script( 'datatables-js', trailingslashit( get_stylesheet_directory_uri() ) . 'js/datatables.min.js', array(), null, true );
	    wp_enqueue_script( 'custom-js', trailingslashit( get_stylesheet_directory_uri() ) . 'js/custom.js', array(), null, true );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 100 );

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-post-types.php';
// END ENQUEUE PARENT ACTION
