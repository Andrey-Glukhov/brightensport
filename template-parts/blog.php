<?php
$args = array( 
    'post_type' => 'post', 
    'post_status' => 'publish'
);

$blog_query = new WP_Query( $args );?>
<div class="row justify-content-sm-start justify-content-center justify-content-center with_background main_green margin_negative">
<?php if ( $blog_query -> have_posts() ) : while ( $blog_query -> have_posts() ) : $blog_query -> the_post(); ?>


<div class="col-lg-3 col-md-4 col-sm-6 col-11 blog_tumb">
 <a href="<?php the_permalink();?>">
<?php the_post_thumbnail();?>
<p><?php the_title();?></p>
</a>
</div>

<?php endwhile;?>
<?php endif; ?>
</div>
<?php wp_reset_postdata(); ?>