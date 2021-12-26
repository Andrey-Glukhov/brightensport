<?php
/*
*Template Name: Home Page
*/
get_header(); ?>

<div class="container-fluid main-wrapper">
    <div class="row">
        <div class="back1-img col-12">
            <svg version="1.1" width="1440" height="940" viewBox="0 0 1440 940" xmlns="http://www.w3.org/2000/svg"
                xmlns:svg="http://www.w3.org/2000/svg">
                <defs id="defs2">
                    <clipPath id="cut-img">
                        <path d="M 0,0 h 1440 v 690 L 0,940 v -940 z" id="path2140" />
                    </clipPath>
                </defs>
                <g id="layer1">
                    <image href="<?php echo  get_template_directory_uri()?>/img/hr1.png" x="0" y="0" width="1440"
                        height="940" clip-path="url(#cut-img)" />
                </g>
            </svg>
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <div class="white-back-2"></div>
            <div class="circle cir_1">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
            <div class="circle cir_2">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
            <div class="abs-picture pic_1">
                <img src="<?php echo  get_template_directory_uri()?>/img/tennis-player 1.png" alt="">
            </div>
            <div class="abs-picture pic_2">
                <img src="<?php echo  get_template_directory_uri()?>/img/basketball-player 1.png" alt="">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="back1-img col-12">
            <img src="<?php echo  get_template_directory_uri()?>/img/back2.svg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <div class="black-back-1"></div>
            <div class="circle cir_3">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
            <div class="abs-picture pic_3">
                <img src="<?php echo  get_template_directory_uri()?>/img/run 1.png" alt="">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="back1-img col-12">
            <img src="<?php echo  get_template_directory_uri()?>/img/back3.svg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <div class="green-back-1">
                <div class="owl-carousel">
                    <?php $args = array(  
                            'post_type' => 'cardgallery',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            // 'orderby' => 'title', 
                            // 'order' => 'ASC', 
                        );

                    $loop = new WP_Query( $args ); 
                    $count = 1;  
                    //error_log('---LOOP--'. print_r($loop->have_posts(),true)); 
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="card" id="gallery_card_<?php echo $count;?>" data-bs-toggle="modal"
                        data-bs-target="#gallery_modal_<?php the_ID()?>">
                        <?php if ($count % 2 == 0):?>
                        <div class="card_placeholder"></div>
                        <?php endif;?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_field('sub_title'); ?></h5>
                            <img src="<?php the_field('image')?>" class="d-block w-100" alt="">
                            <p class="card-text"><?php the_field('name')?></p>
                        </div>
                        <?php if ($count % 2 != 0):?>
                        <div class="card_placeholder"></div>
                        <?php endif;?>
                    </div>

                    <?php  $count++;
                    endwhile;
                wp_reset_postdata(); ?>
                </div>
                <?php  while ( $loop->have_posts() ) : $loop->the_post();?>
                <div class="modal fade" id="gallery_modal_<?php the_ID()?>">
                    <div class="modal-dialog modal-dialog-centered">

                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="card-title"><?php the_field('sub_title'); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body card-modal-body">
                                <img src="<?php the_field('image')?>" class="d-block " alt="">
                                <div><?php the_field('description')?>)</div>
                            </div>
                            <div class="modal-footer">
                            <p class="card-text"><?php the_field('name')?></p>
                                <a href="#" class="card-text">Book a session now<span class="book-pro-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <img src="<?php echo  get_template_directory_uri()?>/img/back4.svg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <div class="black-back-1"></div>
            <div class="circle cir_4">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
            <div class="circle cir_5">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
        </div>

    </div>
    <div class="row">
        <div class="back1-img col-12">
            <img src="<?php echo  get_template_directory_uri()?>/img/back5.svg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="back1-img col-12">
            <div class="white-back-2"></div>
            <div class="circle cir_6">
                <img src="<?php echo  get_template_directory_uri()?>/img/stripe.svg" alt="">
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>