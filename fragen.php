<?php
/*
*Template Name: Fragen
*/
get_header(); ?>
<div class="container-fluid standard-wrapper">
    <div class="row">
        <div class="col-12 fragen_opener" style="background-image:url(<?php the_field('opener_image')?>);"></div>
    </div>

    <div class="row with_background main_black margin_negative justify-content-center">
        <div class="col-md-10 col-sm-11 col-11">
            <h2 class="section_title fragen_title">Häufige Fragen</h2>
        </div>
        <div class="col-md-8 col-sm-10 col-12">
        <?php
$faq = new WP_Query(array( 'page_id' => '259' ));
if ( $faq->have_posts() ) : while ( $faq->have_posts() ) : $faq->the_post();
?>
        <?php if( have_rows('faq_group') ): ?>


        <div class="accordion accordion-faq" id="faq_accordion">

            <?php while( have_rows('faq_group') ): the_row();
    $id = get_sub_field('id');
    ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-heading<?php echo $id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#faq-collapse<?php echo $id ?>" aria-expanded="false"
                        aria-controls="faq-collapse<?php echo $id ?>">
                        <?php the_sub_field('question'); ?>
                    </button>
                </h2>
                <div id="faq-collapse<?php echo $id ?>" class="accordion-collapse collapse"
                    aria-labelledby="faq-heading<?php echo $id ?>" data-bs-parent="#faq_accordion">
                    <div class="accordion-body">
                        <p><?php the_sub_field('answer'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php endwhile;?>
        <?php endif; ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>