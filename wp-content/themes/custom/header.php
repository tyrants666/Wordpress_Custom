<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="loader">
      <img class="logo" src="<?php echo CUSTOM_DIR_URI ?>/assets/images/logo.png"alt="">
</div>

<div id="main-wrapper" class="main-wrapper">

	<header id="masthead" class="site-header">

	      <!-- navbar 1 -->
        <nav class="navbar navbar-light mx-auto" id="navbar1">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img class="logo" src="<?php echo CUSTOM_DIR_URI ?>/assets/images/logo.png"alt="">
          </a>


          <div class="top-menu" id="navbarNavDropdown">
              <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'container'      => false
                    )
                );
              ?>
          </div>

          <!-- Hamburger Menu -->
          <div class="navbar-toggler" style="border-color: transparent;" >
    				<svg viewBox="0 0 800 600">
    					<path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
    					<path d="M300,320 L540,320" id="middle"></path>
    					<path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
    				</svg>
    			</div>

          <!-- Sidebar -->
    			<div id="mySidepanel" class="sidepanel w-0">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                        'container'      => false
                    )
                );
              ?>
    			</div>

        </nav>
		
	</header><!-- #masthead -->
