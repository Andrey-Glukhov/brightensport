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
                            <!-- stroke-miterlimit: 10; -->
                            <!-- stroke-width: 46px; -->
                            <!-- stroke-linecap: round; -->
                        }
                        </style>
                        <marker id="round" viewBox="0 0 1 1" markerWidth="1" markerUnits="strokeWidth"
                         markerHeight="1" orient="auto" refX="0.5" refY="0.5">
                            <circle r="0.5" cx="0.5" cy="0.5" fill="#44d4bc"/>
                            <!-- cx="23" cy="23" -->
                        </marker>
                    </defs>
                    <g id="line-opener-topper" data-name="Line Opener Topper">
                    <path class="ln-12" d="M123,23V500" marker-start="url(#round)" stroke-width="46"; /> -->
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


        <!-- <div class="col-1"></div>
        <div class="col-lg-4 col-md-5 col-sm-10 col-10 opener_overlay">
            <h1 class="page_title">DEIN WEG MIT<br>
                BRIGHTENSPORT</h1>
            <svg id="Ebene_1" data-name="Ebene 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 681.88 681.89">
                <defs>
                    <style>
                    .cls-1 {
                        fill: #60beb1;
                    }
                    </style>
                </defs>
                <path class="cls-1"
                    d="M183.38,681.89A183.22,183.22,0,0,1,0,499.74V25.4A25.43,25.43,0,0,1,25.39,0h.88a25.44,25.44,0,0,1,25.4,25.4V498.5c0,72.63,59.09,131.72,131.71,131.72S315.11,571.13,315.11,498.5V328.73A183.39,183.39,0,0,1,681.88,328V486.66a25.44,25.44,0,0,1-25.39,25.45h-.88a25.44,25.44,0,0,1-25.39-25.44v-158c0-72.61-59.1-131.7-131.73-131.7S366.77,256.09,366.77,328.73V498.5c.08,101.2-81.89,183.31-183.09,183.39Z"
                    transform="translate(0 0)" />
            </svg>

        </div> -->
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
                <p>Brightensport ist die Plattform, auf der Du die besten Spitzensportler:innen persönlich um Rat fragen
                    kannst.</p>
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
                <p>Melde Dich kostenlos an und erstelle ein Profil​</p>
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
                            d="M43.73,803.68v-417a171.83,171.83,0,0,1,343.66,0l.3,175a171.83,171.83,0,0,0,343.66,0V143"
                            transform="translate(79.08 -119.63)" />
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
                <p>Such Dir Deinen Favoriten oder Deine Favoritin aus allen Spitzensportler:innen aus und wähle
                    einen Termin​</p>
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
                            d="M731.35,804V387a171.83,171.83,0,0,0-343.66,0l-.3,175a171.83,171.83,0,0,1-343.66,0V143.35"
                            transform="translate(79.08 -119.63)" />
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
                <p>Lass Dir in Deinem persönlichen Video-Telefonat von den Besten der Besten helfen.</p>
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
                            d="M1419,805.38v-417a171.83,171.83,0,1,0-343.66,0l-.3,175a171.83,171.83,0,1,1-343.65,0V144.74"
                            transform="translate(79.08 -119.63)" />
                        <rect class="ln-6" width="1643.32" height="707.82" />
                    </g>
                </svg>
            </div>


            <button class="probier" onclick="window.open('https://app.brightensport.com/user-signup','_blank')">PROBIER
                ES GLEICH AUS!</button>


            <div class="straight_line_one sline_block"">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
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

            <div class="straight_line_two sline_block"">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
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

            <div class="straight_line_three sline_block"">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1643.32 707.82">
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
                    <g id="straight_line_three" data-name="Straight Line Three">
                        <line class="slo-1 sline" x1="810.42" y1="679.96" x2="810.42" y2="25.11" />
                        <rect class="slo-2" width="1643.32" height="707.82" />
                    </g>
                </svg>

            </div>

        </div>
    </div>








    <!-- <div id="was_ist" class="row ">
        <div class="col-12">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 930.52 379.66">
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
                        <g id="Ebene_1" data-name="Ebene 1">
                            <path class="num-1"
                                d="M841.47,246.84h51.16a6.35,6.35,0,0,1,6.4,6.39V613.54a6.37,6.37,0,0,1-6.4,6.4h-49a6.38,6.38,0,0,1-6.4-6.4V310.8a2.33,2.33,0,0,0-1.06-1.87,1.94,1.94,0,0,0-2.14-.27l-53.29,16.53a5.91,5.91,0,0,1-2.67.53,4.27,4.27,0,0,1-3.46-1.6,6.36,6.36,0,0,1-1.34-4.26l-1.6-35.18q0-5.32,4.27-7.46l57.56-28.78A22.75,22.75,0,0,1,841.47,246.84Z"
                                transform="translate(-59.94 -243.46)" />
                            <rect class="num-2" width="930.52" height="379.66" />
                        </g>
                    </svg>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <p>Melde Dich kostenlos an und​ erstelle ein Profil​</p>
                </div>
            </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 930.52 708.68">
                        <defs>
                            <style>
                            .ln-1 {
                                fill: #44d4bc;
                            }

                            .ln-2 {
                                fill: none;
                            }
                            </style>
                        </defs>
                        <g id="line_one" data-name="Line One">
                            <path class="ln-1"
                                d="M303,780.77V374c0-3.41,0-6.82,0-10.23,0-5.82.29-11.62.87-17.41.16-1.59.45-3.19.55-4.79,0-.31-.84,5.64-.38,3,.15-.9.27-1.8.42-2.7.52-3.13,1.12-6.24,1.82-9.33a169.21,169.21,0,0,1,5.31-18.73c.95-2.72,2-5.39,3-8.09s-2.13,4.81-.88,2.06c.28-.6.53-1.22.8-1.82q1.08-2.42,2.23-4.8a172.16,172.16,0,0,1,8.9-16.13q2.43-3.88,5.06-7.65c.88-1.25,1.79-2.47,2.68-3.72,3-4.2-3,3.69.24-.32A180.92,180.92,0,0,1,359.94,247c.5-.41,1-.8,1.53-1.22,1.93-1.66-2.51,1.89-2.27,1.75,1.28-.79,2.46-1.84,3.68-2.72q4-2.87,8.15-5.51a171.69,171.69,0,0,1,16.05-9c2.77-1.36,5.66-2.49,8.41-3.87.26-.12-5.11,2-2.67,1.15.83-.3,1.65-.66,2.47-1,1.66-.64,3.32-1.25,5-1.84a168.87,168.87,0,0,1,18-5.24q4.64-1.06,9.31-1.88c1.57-.28,3.17-.44,4.72-.76.32-.06-5.66.7-3,.4,1.14-.12,2.28-.27,3.42-.39a173.74,173.74,0,0,1,19.49-.94,187.83,187.83,0,0,1,19.41,1.25c4.27.48-5.59-.85-.27,0,1.57.25,3.14.51,4.7.81q5,.93,9.93,2.15A172.23,172.23,0,0,1,504,225.63c1.46.54,2.9,1.12,4.35,1.67,3.83,1.46-5.41-2.44-.24-.1,2.82,1.27,5.61,2.56,8.36,4a171.12,171.12,0,0,1,16.49,9.56c2.37,1.55,4.71,3.17,7,4.84.71.52,1.39,1.06,2.1,1.56,2.1,1.47-2.47-2-2.26-1.76,1.28,1.17,2.74,2.18,4.07,3.29a173.08,173.08,0,0,1,13.41,12.43q3.18,3.29,6.19,6.73,1.5,1.72,3,3.48c.77.94,4.31,5.43,1.79,2.18s.77,1.08,1.26,1.76c.77,1.06,1.52,2.13,2.27,3.21q2.79,4.05,5.35,8.25a173.16,173.16,0,0,1,9,16.84c.56,1.2,1.08,2.41,1.63,3.62,1.65,3.64-2-5.18-.13-.22,1.19,3.11,2.36,6.23,3.41,9.39a171.06,171.06,0,0,1,4.89,18.18c.66,3.11,1.17,6.24,1.71,9.38.71,4.17-.72-6.12,0-.27q.33,2.75.55,5.49c.42,4.91.6,9.82.62,14.74.1,24.34.08,48.67.12,73l.16,94.57c.08,42.46,10.14,84.05,35.07,119.05,16.36,23,36.85,42.54,61.18,57,24.81,14.7,52.27,23.07,80.83,26.17,55.82,6.06,112.8-14.41,153.49-52.71,38.91-36.62,60.93-88.9,61.11-142.2,0-13.1,0-26.21,0-39.31V120.13c0-12.56-11-24.58-24-24s-24,10.54-24,24V527.87c0,3.63,0,7.25,0,10.87,0,4.91-.21,9.8-.62,14.69-.14,1.6-.29,3.21-.47,4.81-.08.68-.17,1.36-.25,2-.35,3.12.81-5.38.3-2.3s-1,6.27-1.67,9.38a168.34,168.34,0,0,1-5,18.85c-.9,2.74-1.88,5.46-2.92,8.15-.32.83-.68,1.64-1,2.47-.87,2.44,1.28-2.92,1.15-2.67-.79,1.58-1.42,3.24-2.16,4.84a170.19,170.19,0,0,1-8.66,16.28q-2.37,3.93-5,7.73-1.29,1.9-2.62,3.76c-.71,1-4.17,5.55-1.65,2.3s-.84,1-1.37,1.66c-.83,1-1.67,2-2.52,3q-3.19,3.71-6.6,7.24a172.44,172.44,0,0,1-13.86,12.9c-1,.84-2,1.65-3,2.48-3,2.5,4.43-3.25.19-.17-2.65,1.93-5.32,3.83-8.06,5.63a172.32,172.32,0,0,1-15.9,9.25q-4.11,2.11-8.34,4l-1.82.79c-2.75,1.26,4.9-1.93,2.07-.88-1.67.61-3.3,1.3-5,1.92A172.41,172.41,0,0,1,830,682.41c-3.07.76-6.15,1.44-9.26,2-1.56.29-3.12.57-4.69.82-.68.11-1.36.2-2,.32-2.89.5,6.54-.77,1.63-.22a188.2,188.2,0,0,1-19.42,1.25,174,174,0,0,1-19.49-.94c-1.14-.12-6.53-.79-2.26-.23s-1.09-.21-2.22-.4c-3.35-.57-6.68-1.23-10-2a169,169,0,0,1-18-5.24c-1.46-.51-2.92-1-4.37-1.6-.93-.35-6.07-2.5-2.07-.77,3.82,1.64-.51-.24-1.39-.64-1.6-.72-3.2-1.47-4.78-2.24A170.51,170.51,0,0,1,715,663.24c-2.4-1.52-4.76-3.11-7.08-4.75-1.24-.88-2.47-1.79-3.7-2.69s-3-2.84,1.74,1.37c-.65-.58-1.38-1.08-2.05-1.63a182.87,182.87,0,0,1-26.23-26.33c-3.33-4,2.46,3.4.15.2-.77-1.06-1.56-2.1-2.32-3.17q-2.85-4-5.47-8.17a170.46,170.46,0,0,1-9.25-16.68c-.57-1.19-1.14-2.39-1.68-3.59-.36-.77-2.63-6-.91-2s-.42-1.14-.77-2.07c-.63-1.66-1.24-3.32-1.82-5a171.58,171.58,0,0,1-5.17-18.07c-.71-3.09-1.32-6.19-1.85-9.32-.17-1-1-6.69-.4-2.22s-.21-2-.3-3c-.58-5.79-.85-11.6-.87-17.42-.1-23.7-.08-47.4-.12-71.11L646.71,372a258.44,258.44,0,0,0-3.41-44.24,187.92,187.92,0,0,0-30.15-73.54,201.51,201.51,0,0,0-60.43-57.75c-24.58-15.08-51.88-23.65-80.35-27.21-55.83-7-113,12.9-154.3,50.61-40.07,36.59-62.85,89.83-63,143.93,0,12.74,0,25.48,0,38.21V780.77c0,12.55,11,24.58,24,24s24-10.55,24-24Z"
                                transform="translate(-156.23 -96.11)" />
                            <rect class="ln-2" y="0.61" width="930.52" height="707.82" />
                        </g>
                    </svg>
                </div>
            </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 930.52 379.66">
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
                                d="M252.67,564.57c.18.72.8,1.07,1.87,1.07h151.9a6.35,6.35,0,0,1,6.4,6.39v40.51a6.37,6.37,0,0,1-6.4,6.4H177.25a6.37,6.37,0,0,1-6.39-6.4V574.16a10.82,10.82,0,0,1,3.2-8q40.5-43.17,93.8-106.07l25.06-29.31q49-57,49-86.35,0-21.84-15.45-35.71t-40-13.86q-24.52,0-39.71,13.86t-15.19,36.78v13.85a6.37,6.37,0,0,1-6.4,6.4H175.66a6.35,6.35,0,0,1-6.4-6.4V336.45q1.06-28.79,16.52-50.11t41.84-33q26.38-11.72,58.9-11.73,35.7,0,62.36,13.33t41,36.51q14.4,23.18,14.39,52,0,43.69-46.37,100.73-25.57,32-84.21,95.94l-20.26,22.39A2.21,2.21,0,0,0,252.67,564.57Z"
                                transform="translate(-169.26 -240.28)" />
                            <rect class="num-4" width="930.52" height="379.66" />
                        </g>
                    </svg>

                </div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <p>Such Dir Deinen Favoriten oder Deine Favoritin aus allen Spitzensportler:innen aus und wähle
                        einen Termin​</p>
                </div>
            </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 930.52 708.68">
                        <defs>
                            <style>
                            .ln-3 {
                                fill: #44d4bc;
                            }

                            .ln-4 {
                                fill: none;
                            }
                            </style>
                        </defs>
                        <g id="line_two" data-name="Line Two">
                            <path class="ln-3"
                                d="M990.66,780.77V374c0-3.41,0-6.82,0-10.23-.1-28.56-6.51-56.05-18.1-82.05-22.33-50-67.48-88.51-119.46-105-53.69-17-114.8-9.08-162.34,21.1C644.54,227.18,610.52,276,602,330.44c-4.33,27.53-3,55.7-3,83.49L598.74,518c0,7.15,0,14.31,0,21.47a175.28,175.28,0,0,1-1.17,19.43c-.62,5.36.73-4.49,0-.26-.26,1.57-.51,3.14-.8,4.7-.56,3.12-1.21,6.21-1.95,9.29a170,170,0,0,1-5.6,18.6c-.46,1.25-.93,2.49-1.41,3.73a26.5,26.5,0,0,0-1,2.47c-.08.28,2.22-5,1.13-2.68-1.39,3-2.7,6-4.19,9a171.48,171.48,0,0,1-9.14,16q-2.49,3.85-5.18,7.57c-.64.89-3.77,5-1.26,1.77,2.62-3.38-1.22,1.47-1.79,2.17-8.06,9.74-17.39,17.45-26.63,25.93-.2.18,4.36-3.19,2.26-1.76-.53.36-1,.79-1.57,1.17-1.23.91-2.47,1.79-3.73,2.67q-4,2.81-8.23,5.38a171.15,171.15,0,0,1-16.21,8.78c-1.39.66-2.8,1.29-4.21,1.92-4.74,2.15,4.11-1.57.24-.1-3.12,1.18-6.22,2.38-9.38,3.44a172.63,172.63,0,0,1-18.15,5c-3.1.67-6.23,1.25-9.36,1.74-5.43.85,4.41-.47.27,0-1.83.21-3.65.42-5.48.58a174.77,174.77,0,0,1-19.55.62q-4.87-.12-9.74-.51c-1.38-.11-2.76-.23-4.13-.38-.91-.09-1.83-.2-2.74-.31-3.36-.37,1.56.13,2.3.32-6.32-1.62-12.91-2.26-19.26-3.94a171,171,0,0,1-17.8-5.78c-.62-.24-1.23-.5-1.85-.73-3.65-1.38,1.79.77,2.05.9-1.18-.59-2.43-1.06-3.63-1.61q-4.51-2.06-8.89-4.36a170.83,170.83,0,0,1-16.33-9.8c-2.35-1.59-4.61-3.3-6.92-5s4,3.26,1.75,1.35c-.5-.41-1-.81-1.53-1.22q-2-1.63-4-3.35a171.37,171.37,0,0,1-13.22-12.63q-3.13-3.33-6.09-6.82c-1-1.16-1.94-2.35-2.91-3.53-3.36-4.09,2.95,4.08-.24-.32a180.59,180.59,0,0,1-18.87-32.3c-.27-.6-.52-1.22-.8-1.82-1.1-2.33,1.21,3,1.13,2.68-.4-1.46-1.16-2.91-1.7-4.33q-1.77-4.68-3.26-9.46a172.35,172.35,0,0,1-4.62-18.29c-.3-1.56-.58-3.12-.84-4.69-.11-.68-.21-1.35-.32-2-.66-4,.25,2,.28,2.31-.32-3.44-.78-6.86-1-10.31-.27-4-.39-8-.41-12,0-13.1,0-26.21,0-39.31V120.13c0-12.56-11-24.58-24-24s-24,10.54-24,24V527.87c0,3.63,0,7.25,0,10.87.09,27.68,6.13,54.32,17,79.65,21.74,50.45,66.15,89.27,118,106.56,53.46,17.84,114.69,10.56,162.67-18.88,46.62-28.6,81.17-77.14,90.58-131.29,4.83-27.78,3.44-56.28,3.48-84.36L647,385.88c0-7.37,0-14.74,0-22.11,0-5.82.29-11.63.87-17.42.16-1.59.44-3.19.55-4.79,0-.31-.85,5.64-.39,3,.16-.9.28-1.8.43-2.7.51-3.13,1.12-6.24,1.81-9.33a169.26,169.26,0,0,1,5.32-18.73c.94-2.72,2-5.39,3-8.09s-2.14,4.81-.88,2.06c.27-.6.52-1.22.79-1.82q1.08-2.42,2.23-4.8a174.48,174.48,0,0,1,8.9-16.13q2.43-3.88,5.07-7.65c.87-1.25,1.79-2.48,2.68-3.72,3.09-4.3-3.2,3.88.24-.32A180.85,180.85,0,0,1,703.89,247c.51-.41,1-.8,1.53-1.22,1.93-1.66-2.5,1.89-2.27,1.75,1.28-.79,2.46-1.84,3.69-2.72q4-2.87,8.14-5.51a174.27,174.27,0,0,1,16-9c2.77-1.36,5.66-2.49,8.42-3.87.25-.12-5.11,2-2.68,1.15.84-.3,1.65-.66,2.48-1,1.65-.64,3.32-1.25,5-1.84a169,169,0,0,1,18-5.24c3.08-.71,6.19-1.34,9.31-1.88,1.56-.28,3.16-.44,4.72-.76.31-.06-5.67.7-3,.4,1.14-.12,2.28-.27,3.42-.39a173.85,173.85,0,0,1,19.49-.94,188.2,188.2,0,0,1,19.42,1.25c4.26.48-5.59-.85-.28,0,1.57.25,3.14.51,4.71.81q5,.93,9.92,2.15a172.41,172.41,0,0,1,17.92,5.51c1.45.54,2.89,1.12,4.34,1.67,4,1.51-4.7-2.11-.84-.37,3,1.36,6,2.73,9,4.23a172.18,172.18,0,0,1,16.48,9.56c2.38,1.55,4.71,3.17,7,4.84.71.52,1.39,1.06,2.11,1.56,2.09,1.47-2.48-2-2.26-1.76,1.28,1.17,2.73,2.18,4.06,3.29a171.27,171.27,0,0,1,13.41,12.43q3.18,3.29,6.19,6.73,1.5,1.72,3,3.48c.68.82,4.4,5.53,1.79,2.18s.77,1.08,1.27,1.76c.76,1.06,1.52,2.13,2.26,3.21q2.79,4.05,5.35,8.25a171,171,0,0,1,9,16.84c.56,1.2,1.09,2.41,1.63,3.62,1.65,3.64-2-5.18-.12-.22,1.19,3.11,2.36,6.23,3.4,9.39a171.06,171.06,0,0,1,4.89,18.18c.66,3.11,1.17,6.24,1.71,9.38.72,4.17-.72-6.12,0-.27q.32,2.75.55,5.49c.41,4.89.6,9.79.62,14.69,0,12.74,0,25.48,0,38.21V780.77c0,12.55,11,24.58,24,24s24-10.55,24-24Z"
                                transform="translate(-156.23 -96.11)" />
                            <rect class="ln-4" y="0.3" width="930.52" height="707.82" />
                        </g>
                    </svg>

                </div>
            </div>


            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 930.52 379.66">
                        <defs>
                            <style>
                            .num-5 {
                                fill: #ff6f58;
                            }
                            .num-6 {
                                fill: none;
                            }
                            </style>
                        </defs>
                        <g id="number_three" data-name="Number Three">
                            <path class="num-5"
                                d="M946.88,501.08q0,29.85-9.06,52.76-12.27,33.58-40.51,52T829.09,624.2q-39.45,0-68.49-20t-41.31-54.1q-6.39-16.51-7.46-43.17,0-6.39,6.4-6.4H767.8q6.39,0,6.39,6.4,1.06,17.07,5.33,27.18,4.8,17.07,17.86,26.92t31.71,9.86q35.17,0,48.5-32,6.93-15.45,6.93-40,0-27.19-8-44.78-13.87-29.84-48-29.84-9.07,0-24.52,10.66a8.56,8.56,0,0,1-3.73,1.06c-1.78,0-3.56-1.06-5.33-3.2l-24.52-34.11a9.06,9.06,0,0,1-1.6-4.26,6.63,6.63,0,0,1,2.13-4.8l88-86.35a1.74,1.74,0,0,0,.53-2.13,2.16,2.16,0,0,0-2.13-1.06H724.09a6.38,6.38,0,0,1-6.4-6.4V253.23a6.37,6.37,0,0,1,6.4-6.39H936.76a6.35,6.35,0,0,1,6.39,6.39V299.6a10.85,10.85,0,0,1-3.19,8l-76.22,76.75q-2.15,2.13,2.13,3.2,49.56,6.93,70.35,54.9Q946.89,468,946.88,501.08Z"
                                transform="translate(-22.21 -245.28)" />
                            <rect class="num-6" width="930.52" height="379.66" />
                        </g>
                    </svg>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-10 col-10 line_container">
                    <p>Lass Dir in Deinem persönlichen Video-Telefonat von den Besten der Besten helfen​.</p>
                </div>
            </div>
        </div>

    <div class="back1-img col-12 ">
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

-->
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
                                    <a href="https://app.brightensport.com/user-signup" class="card-link" target="_blank" rel="noopener noreferrer">Session buchen
                                        <span class="book-arrow"><span class="fa  fa-arrow-right"></span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
                <div class="book-link-wrapper">
                    <a href="https://app.brightensport.com/user-signup" class="book-pro-link" target="_blank" rel="noopener noreferrer">SESSION BUCHEN</a>
                </div>
            </div>
        </div>
        <div class="col-12 spitzensportler-message">
            <p>Du bist selbst Spitzensportler:in?​</p>
            <p><a href="https://app.brightensport.com/pro-signup" target="_blank" rel="noopener noreferrer">Dann melde Dich gleich an!</a></p>
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
<img src="https://brightensport.com/wp-content/uploads/2022/01/Final-Exist-Banner-on-white-bg.png"/>
</div>
</div>
</div>

</div>

<?php get_footer(); ?>