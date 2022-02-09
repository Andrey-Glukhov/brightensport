<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid standard-wrapper">
    <div class="row">
        <div class="col-12 standard_opener" style="background-image:url(<?php the_field('opener_image')?>);"></div>
    </div>
        <?php the_content('')?>
</div>
<?php endwhile;?>
<?php endif; ?>

<?php get_footer(); ?>