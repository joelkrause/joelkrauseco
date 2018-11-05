<?php
if ( ! function_exists( 'joelkrause' ) ) :
	function joelkrause() {
	
		load_theme_textdomain( 'joelkrause', get_template_directory() . '/languages' );
	 
		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );
	 
		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add page title to head
		 */
		add_theme_support( 'title-tag' );
	 
		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'primary'   => __( 'Primary Menu', 'joelkrause' ),
			'secondary' => __('Secondary Menu', 'joelkrause' )
		) );
	 
		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
	endif; // joelkrause
	add_action( 'after_setup_theme', 'joelkrause' );

	function joelkrause_styles() {
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/lib/styles/css/main.css', array(), filemtime(get_stylesheet_directory() .'/lib/styles/css/main.css'), 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'joelkrause_styles' );
?>