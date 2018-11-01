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

	function jquery() {
		if (!is_admin()) {
			// comment out the next two lines to load the local copy of jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, '3.3.1');
			wp_enqueue_script('jquery');
		}
	}
	add_action('init', 'jquery');

	function joelkrause_styles() {
		wp_enqueue_style( "style", get_stylesheet_directory_uri()."/lib/styles/css/main.css",false,'2.1','all');

		wp_enqueue_script( "mainjs", get_stylesheet_directory_uri()."/lib/js/scripts.min.js", "all");
	}
	add_action( 'wp_enqueue_scripts', 'joelkrause_styles' );
?>