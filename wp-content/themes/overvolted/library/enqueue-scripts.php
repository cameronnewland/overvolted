<?php

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue Main Stylesheet
	wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/css/app.css' );

	// Deregister the jquery version bundled with wordpress
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
	wp_register_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', array(), '2.8.3', false );

	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
	wp_register_script( 'fastclick', get_template_directory_uri() . '/bower_components/foundation/js/vendor/fastclick.js', array(), '1.0.0', false );

	// Production Environment
	if( ENVIRONMENT == "PRODUCTION" ){
		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '2.1.4', false );
	}

	// Local Environment
	if( ENVIRONMENT == "LOCAL" ){
		// Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
		wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-2.1.4.min.js', array(), '2.1.4', false );
	}

	// If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
	// It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
	wp_register_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.js', array('jquery'), '5.5.2', true );

	// OverVolted Application Script
	wp_register_script( 'overvolted', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0', true );

	// Enqueue all registered scripts
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fastclick' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation' );
	wp_enqueue_script( 'overvolted' );

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
