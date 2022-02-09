<?php
/*
*Template Name: Standard
*/
get_header(); ?>
<div class="container-fluid standard-wrapper">
    <div class="row">
        <?php if (get_field('opener_image')) {?>
        <div class="col-12 standard_opener" style="background-image:url(<?php the_field('opener_image')?>);"></div>
        <?php }?>
    </div>
    <div class="standard-content-wrapper">
        <?php the_content('')?>
    </div>
</div>

<?php get_footer(); ?>