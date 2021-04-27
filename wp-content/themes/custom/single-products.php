<?php 
    get_header();
?>
<section class="archive_section">
    <div class="container">
        <div class="blue_header ">
            <h2 class=""><?php echo get_the_title();?></h2>
            <div class="orange_line1">
            </div>
        </div>
        <div class="table_section">
            <?php
                wp_reset_query(); // necessary to reset query
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile; // End of the loop.
            ?>
        </div>
    </div>
</section>


<?php
    get_footer();
?>