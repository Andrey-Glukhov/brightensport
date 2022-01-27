<?php
/*
*Template Name: About
*/
get_header(); ?>

<div class="container-fluid standard-wrapper">
    <div class="row">
        <div class="col-12 standard_opener" style="background-image:url(<?php the_field('opener_image')?>);"></div>
    </div>
    <div class="row with_background main_white margin_negative justify-content-center">
        <div class="col-md-10 col-sm-11 col-11">
            <h2 class="section_title fragen_title">ÜBER UNS</h2>
        </div>
        <div class="about_grid_container">
            <div class="about_par_one">
                <p>Weißt Du, wie viel deutsche Spitzensportler:innen durchschnittlich pro Stunde verdienen? Wir sagen es
                    Dir:​</p>
            </div>
            <div class="basket"></div>
            <div class="about_circle_one"></div>
            <div class="income">
                <p>7,41 €​</p>
            </div>

        </div>
    </div>


    <div class="standard-content-wrapper">
        <?php the_content('')?>
    </div>
</div>

<?php get_footer(); ?>