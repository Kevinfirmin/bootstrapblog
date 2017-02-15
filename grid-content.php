<div class="col-md-4 portfolio-item">
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail('medium_large', array('class' => 'img-responsive') ); ?>
    </a>
    <h3>
        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
    </h3>
    <p><?php echo the_excerpt_max_charlength( 140 ) ?></p>
</div>

