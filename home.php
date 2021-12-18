<?php
/*
*Template Name: Home Page
*/
get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="back1-img col-12">
           
            <svg version="1.1" viewBox="0 0 1440 7580" xmlns="http://www.w3.org/2000/svg"
                xmlns:svg="http://www.w3.org/2000/svg">
                <defs>
                    <clipPath id="cut-img">
                        <path d="M 0,0 h 1440 v 690 L 0,940 v -940 z" id="path2140" />
                    </clipPath>
                    <pattern id="pattern_L9vFRE" patternUnits="userSpaceOnUse" width="9.5" height="9.5"
                        patternTransform="rotate(45)">
                        <line x1="0" y="0" x2="0" y2="9.5" stroke="#FF6F58" stroke-width="4" />
                    </pattern>
                    <mask id="cut11">
                        <circle cx="0" cy="1400" r="300" style="fill:#ffffff" />
                    </mask>
                    <mask id="cut12">
                        <circle cx="1440" cy="2570" r="300" style="fill:#ffffff" />
                    </mask>
                    <mask id="cut13">
                        <circle cx="0" cy="3315" r="300" style="fill:#ffffff" />
                    </mask>
                    <mask id="cut14">
                        <circle cx="1440" cy="5150" r="300" style="fill:#ffffff" />
                    </mask>
                    <mask id="cut15">
                        <circle cx="1440" cy="7580" r="300" style="fill:#ffffff" />
                    </mask>
                </defs>
                <g id="back1">
                   
                    <image href="<?php echo  get_template_directory_uri()?>/img/hr1.png" x="0" y="0" width="1440" height="940" clip-path="url(#cut-img)" />
                    <path d="M 0,940 h 1440 v 1630 L 0,2820 v -1880 z" id="path2141" style="fill:#ffffff;" />
                    <path d="M 0,2820 L 1440,2570 v 1190 L 0,4010 v -1190 z" id="path2142" style="fill:#003641;" />
                    <path d="M 0,4010 L 1440,3760 v 1190 L 0,5200 v -1190 z" id="path2143" style="fill:#44D4BC;" />
                    <path d="M 0,5200 L 1440,4950 v 1190 L 0,6390 v -1190 z" id="path2144" style="fill:#003641;" />
                    <rect mask="url(#cut11)" x="-300" y="1100" width="600" height="600" fill="url(#pattern_L9vFRE)"
                        opacity="1" />
                    <rect mask="url(#cut12)" x="1140" y="2270" width="600" height="600" fill="url(#pattern_L9vFRE)"
                        opacity="1" />
                    <rect mask="url(#cut13)" x="-300" y="3015" width="600" height="600" fill="url(#pattern_L9vFRE)"
                        opacity="1" />
                    <rect mask="url(#cut14)" x="1140" y="4850" width="600" height="600" fill="url(#pattern_L9vFRE)"
                        opacity="1" />
                    <rect mask="url(#cut15)" x="1140" y="7280" width="600" height="600" fill="url(#pattern_L9vFRE)"
                        opacity="1" />
                    <image href="<?php echo  get_template_directory_uri()?>/img/tennis-player 1.png" x="0" y="1300" width="400" height="800" />
                    <image href="<?php echo  get_template_directory_uri()?>/img/basketball-player 1.png" x="640" y="1800" width="800" height="800" />
                    <image href="<?php echo  get_template_directory_uri()?>/img/run 1.png" x="840" y="3160" width="800" height="800" />


                </g>
            </svg>
        </div>
    </div>
</div>

<?php get_footer(); ?>