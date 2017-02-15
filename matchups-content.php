<div class="col-md-12 portfolio-item">
    <div class="media">
        <div class="media-left" style="float: left">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('medium_large', array('class' => ''));?>
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
            </h4>
            <p><?php echo the_excerpt_max_charlength( 400 ) ?></p>
        </div>
    </div>
</div>