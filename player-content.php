<div class="col-md-6 portfolio-item">
    <div class="media">
        <div class="media-left">
            <a href="<?php the_permalink();?>">
                <img class="img-circle" style="max-height: 100px; max-width: 130px" src="<?php the_post_thumbnail('medium_large', array('class' => 'media-object,image-circle'));?> "></a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
            </h4>
            <p><?php echo the_excerpt_max_charlength( 200 ) ?></p>
        </div>
    </div>
</div>


