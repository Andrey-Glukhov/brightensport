<?php
/*
*Template Name: Home Page
*/
get_header(); ?>

<div class="container-fluid main-wrapper">
    <div class="row">
        <div class="back1-img col-12 opener" style="background-image:url(<?php the_field('opener_image')?>);"></div>

        <div class="opener_grid_container opener_grid">
            <div class="slogan">
                <h1>Dein Weg mit<br>
                    brightensport
                </h1>
            </div>
            <div class="line-opener-topper">
                <svg id="f_line" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 500">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 181.93"> -->
                    <defs>
                        <style>
                        .ln-12,
                        .ln-13 {
                            fill: none;
                        }

                        .ln-12 {
                            stroke: #44d4bc;
                            < !-- stroke-miterlimit: 10;
                            -->< !-- stroke-width: 46px;
                            -->< !-- stroke-linecap: round;
                            -->
                        }
                        </style>
                        <marker id="round" viewBox="0 0 1 1" markerWidth="1" markerUnits="strokeWidth" markerHeight="1"
                            orient="auto" refX="0.5" refY="0.5">
                            <circle r="0.5" cx="0.5" cy="0.5" fill="#44d4bc" />
                            <!-- cx="23" cy="23" -->
                        </marker>
                    </defs>
                    <g id="line-opener-topper" data-name="Line Opener Topper">
                        <path class="ln-12" d="M123,23V500" marker-start="url(#round)" stroke-width="46" ; /> -->
                        <!-- <path class="ln-12" d="M63.87,692.91V524.65" transform="translate(58.94 -497.9)"/> -->
                        <!-- <rect class="ln-13" width="1643.32" height="194.58"/> -->
                    </g>
                </svg>
            </div>
            <div class="line-opener">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 550.16">
                    <defs>
                        <style>
                        .ln-10,
                        .ln-11 {
                            fill: none;
                        }

                        .ln-10 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 46px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="line_opener" data-name="Line Opener">
                        <path class="ln-10"
                            d="M751.48,425V385.91a171.83,171.83,0,1,0-343.65,0l-.3,123.14a171.83,171.83,0,0,1-343.66,0V159.93"
                            transform="translate(58.94 -159.93)" />
                        <rect class="ln-11" width="1643.32" height="550.16" />
                    </g>
                </svg>
            </div>
            <div class="probier_wrapper"><button class="probier"
                    onclick="window.open('https://app.brightensport.com/user-signup','_blank')">PROBIER ES GLEICH
                    AUS!​</button></div>
        </div>
    </div>

    <!--       steps line         -->

    <div class="row with_background main_white margin_negative" id="was_ist">
        <div class="grid_container">
            <div class="circle_one">
            </div>
            <div class="tennis-player">
            </div>
            <div class="circle_two">
            </div>
            <div class="basketball-player">
            </div>
            <div class="circle_three">
            </div>
            <div class="run">
            </div>

            <div class="about_app_begining">
                <?php the_field('about'); ?>
            </div>


            <div class="number_one">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 379.66">
                    <defs>
                        <style>
                        .num-1 {
                            fill: #ff6f58;
                        }

                        .num-2 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <g id="number_one" data-name="Number One">
                        <path class="num-1"
                            d="M702.46,269.93h51.16a6.38,6.38,0,0,1,6.4,6.4v360.3a6.37,6.37,0,0,1-6.4,6.4h-49a6.37,6.37,0,0,1-6.4-6.4V333.89a2.3,2.3,0,0,0-1.07-1.86,1.9,1.9,0,0,0-2.13-.27l-53.3,16.52a5.86,5.86,0,0,1-2.66.54,4.32,4.32,0,0,1-3.47-1.6,6.46,6.46,0,0,1-1.33-4.27l-1.6-35.18q0-5.31,4.27-7.46l57.56-28.78A22.71,22.71,0,0,1,702.46,269.93Z"
                            transform="translate(79.08 -266.55)" />
                        <rect class="num-2" width="1643.32" height="379.66" />
                    </g>
                </svg>
            </div>


            <div class="number_one_action">
                <?php the_field('step_one'); ?>
            </div>


            <div class="line_one sline_block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .ln-1,
                        .ln-2 {
                            fill: none;
                        }

                        .ln-1 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 46px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="line_one" data-name="Line One">
                        <path class="ln-1 sline"
                            d="M-121,568.31V987A171.83,171.83,0,0,1-292.87,1158.8,171.83,171.83,0,0,1-464.7,987l-.29-175A171.83,171.83,0,0,0-636.82,640.11,171.83,171.83,0,0,0-808.65,811.93v417"
                            transform="translate(931.46 -544.91)" />
                        <rect class="ln-2" width="1643.32" height="707.82" />
                    </g>
                </svg>
            </div>


            <div class="number_two">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 379.66">
                    <defs>
                        <style>
                        .num-3 {
                            fill: #ff6f58;
                        }

                        .num-4 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <g id="number_two" data-name="Number Two">
                        <path class="num-3"
                            d="M17.36,588.67c.18.71.8,1.06,1.87,1.06H171.14a6.37,6.37,0,0,1,6.39,6.4v40.5a6.35,6.35,0,0,1-6.39,6.4H-58a6.11,6.11,0,0,1-4.53-1.86,6.16,6.16,0,0,1-1.87-4.54V598.26a10.88,10.88,0,0,1,3.2-8q40.5-43.17,93.81-106.06l25-29.32q49-57,49-86.34,0-21.85-15.45-35.72T51.21,319q-24.52,0-39.71,13.85T-3.69,369.6v13.86A6.17,6.17,0,0,1-5.55,388a6.17,6.17,0,0,1-4.53,1.87H-59.65A6.12,6.12,0,0,1-64.18,388,6.14,6.14,0,0,1-66,383.46V360.54q1.06-28.79,16.52-50.1t41.84-33.05q26.39-11.72,58.9-11.72,35.7,0,62.36,13.32t41,36.51q14.4,23.19,14.39,52,0,43.71-46.37,100.74-25.57,32-84.21,95.94L18.16,586.53A2.23,2.23,0,0,0,17.36,588.67Z"
                            transform="translate(66.05 -263.37)" />
                        <rect class="num-4" width="1643.32" height="379.66" />
                    </g>
                </svg>
            </div>

            <div class="number_two_action">
                <?php the_field('step_two'); ?>
            </div>


            <div class="number_two_alternative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 379.66">
                    <defs>
                        <style>
                        .nta-1 {
                            fill: #fd705d;
                        }

                        .nta-2 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <g id="number_two_alternative" data-name="Number Two Alternative">
                        <path class="nta-1"
                            d="M720.25,397.15c.17.72.8,1.07,1.86,1.07H874a6.35,6.35,0,0,1,6.39,6.4v40.5a6.37,6.37,0,0,1-6.39,6.4H644.83a6.38,6.38,0,0,1-6.4-6.4V406.75a10.86,10.86,0,0,1,3.2-8q40.5-43.17,93.81-106.06l25-29.32q49-57,49-86.35,0-21.84-15.46-35.71t-40-13.85q-24.51,0-39.71,13.85t-15.19,36.78V192a6.35,6.35,0,0,1-6.39,6.39H643.23a6.37,6.37,0,0,1-6.4-6.39V169q1.06-28.78,16.53-50.1T695.2,85.88q26.38-11.72,58.89-11.72,35.7,0,62.36,13.32t41,36.51q14.38,23.19,14.39,52,0,43.71-46.37,100.74-25.59,32-84.22,95.94L721.05,395A2.18,2.18,0,0,0,720.25,397.15Z"
                            transform="translate(58.94 -71.86)" />
                        <rect class="nta-2" width="1643.32" height="379.66" />
                    </g>
                </svg>

            </div>

            <div class="line_two sline_block">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .ln-3,
                        .ln-4 {
                            fill: none;
                        }

                        .ln-3 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 46px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="line_two" data-name="Line Two">
                        <path class="ln-3 sline"
                            d="M-229.45,1060.79v418.66A171.83,171.83,0,0,0-57.62,1651.28a171.83,171.83,0,0,0,171.83-171.83l.29-175a171.83,171.83,0,1,1,343.66,0v417"
                            transform="translate(352.26 -1037.07)" />
                        <rect class="ln-4" width="1643.32" height="707.82" />
                    </g>
                </svg>
            </div>


            <div class="number_three">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 379.92">
                    <defs>
                        <style>
                        .num-5 {
                            fill: #fd705d;
                        }

                        .num-6 {
                            fill: none;
                        }
                        </style>
                    </defs>
                    <g id="number_three" data-name="Number Three">
                        <path class="num-5"
                            d="M845.6,524.17q0,29.87-9.06,52.77-12.27,33.59-40.51,52T727.8,647.29q-39.45,0-68.49-20T618,573.21q-6.4-16.51-7.47-43.17,0-6.4,6.4-6.4h49.57q6.39,0,6.39,6.4,1.07,17.06,5.33,27.18,4.8,17.06,17.86,26.91T727.8,594q35.19,0,48.51-32,6.91-15.46,6.93-40,0-27.18-8-44.77-13.86-29.85-48-29.85-9.07,0-24.52,10.66a8.45,8.45,0,0,1-3.73,1.07q-2.67,0-5.33-3.2l-24.52-34.11a9.2,9.2,0,0,1-1.6-4.27,6.6,6.6,0,0,1,2.14-4.79l87.94-86.35a1.74,1.74,0,0,0,.53-2.13,2.14,2.14,0,0,0-2.13-1.07H622.8a6.35,6.35,0,0,1-6.39-6.4v-40.5a6.37,6.37,0,0,1,6.39-6.4H835.47a6.38,6.38,0,0,1,6.4,6.4V322.7a10.84,10.84,0,0,1-3.2,8l-76.22,76.76c-1.43,1.42-.72,2.49,2.13,3.19q49.57,6.94,70.36,54.9Q845.59,491.13,845.6,524.17Z"
                            transform="translate(79.08 -267.37)" />
                        <rect class="num-6" width="1643.32" height="379.66" />
                    </g>
                </svg>

            </div>
            <div class="number_three_action">
                <?php the_field('step_three'); ?>
            </div>

            <div class="line_three sline_block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .ln-5,
                        .ln-6 {
                            fill: none;
                        }

                        .ln-5 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 46px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="line_three" data-name="Line Three">
                        <path class="ln-5 sline"
                            d="M244.61,865.6v418.65a171.83,171.83,0,0,0,343.66,0l.3-175a171.83,171.83,0,1,1,343.65,0v417"
                            transform="translate(587.77 -841.88)" />
                        <rect class="ln-6" width="1643.32" height="707.82" />
                    </g>
                </svg>
            </div>


            <button class="probier" onclick="window.open('https://app.brightensport.com/user-signup','_blank')">PROBIER
                ES GLEICH AUS!</button>


            <div class="straight_line_one sline_block">
                <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .slo-1,
                        .slo-2 {
                            fill: none;
                        }

                        .slo-1 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 48px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="straight_line_one" data-name="Straight Line One">
                        <line class="slo-1 sline" x1="810.42" y1="679.96" x2="810.42" y2="25.11" />
                        <rect class="slo-2" width="1643.32" height="707.82" />
                    </g>
                </svg>

            </div>

            <div class="straight_line_two sline_block">
                <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .slo-1,
                        .slo-2 {
                            fill: none;
                        }

                        .slo-1 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 48px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <g id="straight_line_two" data-name="Straight Line Two">
                        <line class="slo-1 sline" x1="810.42" y1="679.96" x2="810.42" y2="25.11" />
                        <rect class="slo-2" width="1643.32" height="707.82" />
                    </g>
                </svg>

            </div>

            <div class="straight_line_three sline_block">
                <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
                    <defs>
                        <style>
                        .slo-1,
                        .slo-2 {
                            fill: none;
                        }
                        .slo-1 {
                            stroke: #44d4bc;
                            stroke-miterlimit: 10;
                            stroke-width: 48px;
                            stroke-linecap: round;
                        }
                        </style>
                    </defs>
                    <!-- <g id="straight_line_three" data-name="Straight Line Three">
                        <line class="slo-1 sline" x1="810.42" y1="679.96" x2="810.42" y2="25.11" />
                        <rect class="slo-2" width="1643.32" height="707.82" />
                    </g> -->
                    <g id="straight_line_three" data-name="Straight Line Three">
                        <line class="slo-1" x1="810.42" y1="25.11" x2="810.42" y2="679.96" />
                        <rect class="slo-2" width="1643.32" height="707.82" />
                    </g>
                </svg>

            </div>

        </div>
    </div>

    <!--       profi gallery         -->

    <div id="die_profis" class="row justify-content-center with_background main_green">
        <div class="col-md-10 col-sm-11 col-11">
            <h2 class="section_title profis">AUSGEWÄHLTE PROFIS</h2>
        </div>
        <div class="back1-img col-12">
            <div class="green-back-1">
                <div class="owl-carousel" id="owl-carousel">
                    <?php $args = array(  
                            'post_type' => 'cardgallery',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            // 'orderby' => 'title', 
                            // 'order' => 'ASC', 
                        );

                    $loop = new WP_Query( $args ); 
                    $count = 1;  
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="header-title-wrapper">
                                    <h5 class="card-title"><?php the_field('sub_title'); ?></h5>
                                </div>
                                <div class="title-placeholder"></div>
                            </div>
                            <div class="modal-body card-modal-body">
                                <div class="card-body-left">
                                    <img src="<?php the_field('image')?>" class="d-block " alt="">
                                    <p class="card-text"><?php the_field('name')?></p>
                                </div>
                                <div class="card-body-right">
                                    <div class="card-right-text"><?php the_field('description')?></div>
                                    <a href="https://app.brightensport.com/user-signup" class="card-link"
                                        target="_blank" rel="noopener noreferrer">Session buchen
                                        <span class="book-arrow"><span class="fa  fa-arrow-right"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <div class="book-link-wrapper">
                    <a href="https://app.brightensport.com/user-signup" class="book-pro-link" target="_blank"
                        rel="noopener noreferrer">SESSION BUCHEN</a>
                </div>
            </div>
        </div>
        <div class="col-12 spitzensportler-message">
            <p>Du bist selbst Spitzensportler:in?​</p>
            <p><a href="https://app.brightensport.com/pro-signup" target="_blank" rel="noopener noreferrer">Dann melde
                    Dich gleich an!</a></p>
        </div>
    </div>

    <?php the_content();?>

    <div id="testimonials" class="row justify-content-center with_background main_white">
        <div class="col-md-10 col-sm-11 col-11">
            <h2 class="section_title testimonials-heading">TESTIMONIALS​</h2>
        </div>
        <div class="back1-img col-12">
            <div class="white-back-3">
                <div class="owl-testimonial owl-carousel owl-theme" id="owl-testimonial">
                    <?php $args = array(  
                            'post_type' => 'testimonials',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,                           
                        );
                    $loopt = new WP_Query( $args ); 
                    while ( $loopt->have_posts() ) : $loopt->the_post(); ?>
                    <div class="card" id="gallery_card_<?php the_ID()?>">
                        <div class="card-body">
                            <img src="<?php the_field('image')?>" class="d-block w-100" alt="">
                            <div class="card-text card-name"><?php the_field('name')?></div>
                            <div class="card-text card-content"><?php the_field('age')?></div>
                            <h5 class="card-title"><?php the_field('sport'); ?></h5>
                            <div class="card-text"><?php the_field('heading')?></div>
                            <div class="point_down"><i class="fas fa-chevron-down"></i></div>
                            <div class="card-text card-content fold content-hidden"><?php the_field('content')?></div>
                        </div>
                    </div>

                    <?php  endwhile;
                wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row support-logoes">
        <div class="col-12">
            <img src="https://brightensport.com/wp-content/uploads/2022/01/Final-Exist-Banner-on-white-bg.png" />
        </div>
    </div>
</div>

</div>

<?php get_footer(); ?>