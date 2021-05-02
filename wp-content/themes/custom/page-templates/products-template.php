<?php

/**
 * Template Name: Product archive page Templates
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom
 */

get_header();
?>
    <!-- Banner
    -------------------------------------------------------- -->
    <div class="banner">
        <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner.jpg" alt="banner" class="img-object">
    </div>
    
	<main class="temp-blog temp-wrapper">


        <div class="container">

		<?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'products' ),
            'post_status'    => array( 'publish' ),
            // 'orderby'           => 'date',
            // 'order'             => 'ASC',
        );
        // The Query
        $post_query = new WP_Query( $args );
        if ( $post_query->have_posts() ) : ?>
            <header class="mb-5">
                <?php
                // the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>
                <div class="blue_header">
                    <h1 class="heading">Our Products</h1>
                 </div>

            </header>



            <div class="row mx-0">
                        <?php
                        // Start the Loop.
                        while ( $post_query->have_posts() ) :
                            // You can list your posts here
                            $post_query->the_post();
                            ?>

                            <div class="col-6 col-md-4">

                                <div class="archive-item">

                                <a href="<?php the_permalink(); ?>">
                                    <div class="post-thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                    </div>

                                    <div class="post-title">
                                            <?php the_title(); ?>
                                    </div>

                                </a>

                            </div>
                            </div>
                            
                        <?php
                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
            </div>




        </div>              
	</main><!-- #main -->

<?php
get_footer();