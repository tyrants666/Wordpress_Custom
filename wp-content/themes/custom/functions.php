<?php
/**
 * Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom
 */


defined( 'ABSPATH' ) || exit();

// Load all required files
$includes = [
	'inc/constants.php',						// Theme Constants
	'inc/theme-setup.php',						// Theme Setup
	'inc/assets.php',							// Asset Files
	'inc/post-types.php',						// Custom Post Type
	'inc/class-google-translation.php',
	'inc/template-tags.php',					// Custom template tags for this theme.
	'inc/template-functions.php',               // Functions which enhance the theme by hooking into WordPress.
	'inc/customizer.php',                       // Customizer additions.
	'inc/custom-header.php',                    // Implement the Custom Header feature.
	'inc/register-menu.php',					// Register other Menus
	'inc/options.php',							// Add ACF options Pages
	'inc/helpers.php',
	'inc/widgets.php',                          // Widgets.
	'inc/lib/aq_resizer.php',                   // Aq resizer
	'inc/lib/class-wp-bootstrap-navwalker.php', // Navwalker for multilevel menu
];

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	$includes[] = 'inc/jetpack.php';
}

// Load the templates
foreach ( $includes as $f ) {
	if ( file_exists( get_template_directory() . '/' . $f ) ) {
		locate_template( $f, true, true );
	}
}
unset( $f );



//NOTE :- You can copy all above code and place inside /inc/init.php & just unccoment below code
// Init
// require __DIR__ . '/inc/init.php';
