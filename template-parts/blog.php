<?php
$args = array( 'post_type' => 'post');

$blog_query = new WP_Query( $args );
if ( $blog_query -> have_posts() ) : while ( $blog_query -> have_posts() ) : the_post(); ?>

<?php the_title();?>

<?php endwhile;?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>