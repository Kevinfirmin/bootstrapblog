<?php get_header(); ?>

<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="blog-post-title">Matchups
        </h1>
        <div class="seperator"></div>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">

    <?php
    $post_num = 0;
    //if ( have_posts() ) : while ( have_posts() && $post_num < 3) : the_post();
        query_posts('category_name=Teams'); while ( have_posts() && $post_num < 3 ) : the_post();
        $post_num++;

        get_template_part( 'grid-content', get_post_format() );


    endwhile;
    ?>

</div>
<div class="row">
    <div class="col-lg-12">
        <h1 class="blog-post-title"> Other News
        </h1>
        <div class="seperator"></div>
    </div>
</div>
<!-- /.row -->
<?php
$post_num = 0;
//if ( have_posts() ) : while ( have_posts() && $post_num < 3) : the_post();
query_posts('category_name=News'); while ( have_posts() && $post_num < 3 ) : the_post();
    $post_num++;

    get_template_part( 'grid-content2', get_post_format() );


endwhile;
?>

<!-- Page Header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="blog-post-title">Featured Players
        </h1>
        <div class="seperator"></div>
    </div>
</div>
<!-- /.row -->

<!-- Projects Row -->
<div class="row">

    <?php
    $post_num = 0;
    //if ( have_posts() ) : while ( have_posts() && $post_num < 3) : the_post();
    query_posts('category_name=Players'); while ( have_posts() && $post_num < 4 ) : the_post();
        $post_num++;

        get_template_part( 'player-content', get_post_format() );


    endwhile;
    ?>

</div>


<!-- /.row -->
<?php get_footer(); ?>
