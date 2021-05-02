<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Custom
 */

get_header();
?>
    <!-- Banner
    -------------------------------------------------------- -->
    <div class="banner">
        <img src="<?php echo CUSTOM_DIR_URI ?>/assets/images/banner.jpg" alt="banner" class="img-object">
    </div>

    <!-- Content
    -------------------------------------------------------- -->
	<main id="primary" class="single-theme1">

        <div class="container">

                <?php
                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );

                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                                </svg>
                                            </span>
                                            <span class="nav-title">%title</span>',


                            'next_text' => '<span class="nav-title">%title</span>
                                            <span class="nav-subtitle">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                                                </svg>
                                            </span>',

                            // 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'custom' ) . '</span> <span class="nav-title">%title</span>',
                            // 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'custom' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
                
        </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
