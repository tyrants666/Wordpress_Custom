<?php
/*
 * Template Name: Blog Page Template
 */
?>

<?php get_header();?>

<main class="temp-blog">

    <?php
        // WP_Query arguments
        $args = array (
            'post_type'      => array( 'post' ),
            'post_status'    => array( 'publish' ),
            // 'orderby'           => 'date',
            // 'order'             => 'ASC',
        );
        // The Query
        $post_query = new WP_Query( $args );
        if ( $post_query->have_posts() ) : ?>
            <header class="page-header dashed-border">
                <?php
                // the_archive_title( '<h1 class="page-title">', '</h1>' );
                ?>
                <center> <h3 class="g-heading">Blogs</h3></center>
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

</main>

<?php get_footer(); ?>