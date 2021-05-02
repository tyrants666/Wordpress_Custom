<?php
/*
 * Template Name: Home Page Template
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
<div class="banner banner-home ">
    <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner.jpg" alt="banner" class="img-object">
</div>

<!-- Content
-------------------------------------------------------- -->
<main id="primary" class="temp-home temp-wrapper">

    <section class="h-sec1">
        <h1 class="heading">About Rathicol</h1>
        <div class="row mx-0">
            <div class="col-md-6">
                <h2 class="sub-heading">Heading 1</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-md-6 img-col">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner.jpg" alt="" class="img-object">
            </div>
        </div>
    </section>

    <section class="h-sec2">
        <h1 class="heading">Our Products</h1>
        <div class="row mx-0">
            <div class="col-6 col-md-3 box">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/product2.jpg" alt="" class="img-object">
            </div>
            <div class="col-6 col-md-3 box">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/product1.jpg" alt="" class="img-object">
            </div>
            <div class="col-6 col-md-3 box">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/product3.jpg" alt="" class="img-object">
            </div>
            <div class="col-6 col-md-3 box">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/product4.jpg" alt="" class="img-object">
            </div>
        </div>
    </section>

    <section class="h-sec3">
        <h1 class="heading">History</h1>
        <div class="row mx-0">
            <div class="col-md-6 img-col">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner2.jpg" alt="" class="img-object">
            </div>
            <div class="col-md-6">
                <h2 class="sub-heading">Heading 2</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </section>

    <section class="h-sec4">
        <h1 class="heading">Our Sections</h1>
        <div class="row mx-0">
            <div class="col-md-6 img-col">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/test3.jpg" alt="" class="img-object">
            </div>
            <div class="col-md-6 img-col">
                <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/test4.jpg" alt="" class="img-object">
            </div>
        </div>
    </section>

</main><!-- #main -->


<?php get_footer(); ?>