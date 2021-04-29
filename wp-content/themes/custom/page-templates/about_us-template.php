<?php
/*
 * Template Name: About Us Page Template
 */
?>

<?php get_header();?>

<?php
// $hero_banner = get_field('hero_banner');
// if ($hero_banner) {
//     $image = (isset($hero_banner['hero_banner']['image'])) ? $hero_banner['hero_banner']['image'] : false;
//     $title = (isset($hero_banner['hero_banner']['title'])) ? $hero_banner['hero_banner']['title'] : false;
?>

    <!-- Banner
    -------------------------------------------------------- -->
    <div class="banner">
        <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner.jpg" alt="banner" class="img-object">
    </div>

    <!-- Content
    -------------------------------------------------------- -->
    <main class="temp-aboutus temp-wrapper">

        <h1 class="heading">About Us Template </h1>

    </main><!-- #main -->


<?php get_footer(); ?>