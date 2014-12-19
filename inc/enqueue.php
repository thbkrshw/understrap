<?php

function understrap_scripts() {
    wp_enqueue_style( 'understrap-theme', get_stylesheet_directory_uri() . '/css/theme.css', array(), '0.1', false );
    wp_enqueue_style( 'understrap-carousel-style', get_stylesheet_directory_uri() . '/css/owl.carousel.css', array(), '20024', false );
    wp_enqueue_style( 'understrap-off-canvas-style', get_stylesheet_directory_uri() . '/css/jasny-bootstrap.min.css', array(), '310', false );
    wp_enqueue_script('jquery');
	wp_enqueue_script( 'understrap-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20120206', true );
    wp_enqueue_script( 'understrap-carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20024', true );
    wp_enqueue_script( 'understrap-off-canvas-script', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array(), '310', true );
    wp_enqueue_script( 'understrap-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );