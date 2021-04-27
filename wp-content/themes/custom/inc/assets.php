<?php
 /**
 * Enqueue scripts and styles.
 */
function custom_scripts() {
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'custom-style', 'rtl', 'replace' );

	wp_enqueue_script('dmcnordic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	// Css -----------------------------------------------------

	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
	wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.0', 'all');
	wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all');
	wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');

	// scripts ------------------------------------------------------
    
	// wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.4.1', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.3.1', true);
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );