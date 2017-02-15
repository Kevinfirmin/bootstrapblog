<?php /* Template Name: Full Width Template */ ?>

<?php get_header(); ?>
    <div class="template-description">
        <h2 class="blog-post-title">Players</h2>
        <div class="seperator" style="margin-bottom: 50px"></div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <?php
            query_posts('category_name=Players'); if ( have_posts() ) : while ( have_posts() ) : the_post();

                get_template_part( 'player-content', get_post_format() );

            endwhile; endif;
            ?>

        </div> <!-- /.col -->
        <!-- No sidebar, full width -->
    </div> <!-- /.row -->

<?php get_footer(); ?>