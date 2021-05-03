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
    <main id="primary" class="temp-aboutus temp-wrapper">

        <h1 class="heading">About Us</h1>

        <section class="a-sec1">
            <div class="row mx-0">
                <div class="col-md-6 col-v-center">
                    <h2 class="sub-heading">Know more about us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-md-6 img-col">
                    <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/about2.png" alt="" class="img-object">
                </div>
            </div>
        </section>

        <section class="a-sec2">
            <div class="row mx-0">
                <div class="col-md-6 img-col">
                    <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/about-svg.svg" alt="" class="img-object">
                </div>
                <div class="col-md-6 col-v-center">
                    <h2 class="sub-heading">What we do</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </section>

    </main><!-- #main -->


<?php get_footer(); ?>