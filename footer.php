<?php
/**
 * The footer
 */

?>

<footer id="footer" class="site-footer container-fluid" role="contentinfo">

    <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1">
            <?php
if(is_active_sidebar('true_foot')){
dynamic_sidebar('true_foot');
}
?>
        </div>

    </div>


    <!-- <div class="container-fluid"> 
    <div class="social-icons  d-flex flex-row justify-content-center">
        <a href="https://www.facebook.com/brightensport-111997390525646" target=blank>
            <div class="icon-image" id="icon_fb"></div>
        </a>
        <a href="https://www.instagram.com/brightensport/" target=blank>
            <div class="icon-image" id="icon_inst"></div>
        </a>
        <a href="https://www.linkedin.com/company/brightensport/" target=blank>
            <div class="icon-image" id="icon_ln"></div>
        </a>
        <a href="https://www.crunchbase.com/organization/brightensport" target=blank>
            <div class="icon-image" id="icon_cb"></div>
        </a>
        <a href="https://angel.co/company/brightensport" target=blank>
            <div class="icon-image" id="icon_v"></div>
        </a>
    </div>
   </div> -->

    <div class="row justify-content-center footer-dark">
        <div class="footer-logo col-md-4 col-sm-6 oder-1">
            <img src="<?php echo  get_template_directory_uri()?>/img/blogo-tuerkis.png" />
        </div>
        <nav id="footer-navigation-left" class="footer-navigation col-md-2 col-sm-4 col-6 order-md-2 order-sm-3 order-3" role="navigation">


            <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footermenu_left',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
				?>
        </nav><!-- #footer-navigation -->

        <nav id="footer-navigation-right" class="footer-navigation col-md-2 col-sm-4 order-md-3 order-sm-4 col-6 order-4" role="navigation">


            <?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footermenu_right',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
				?>
        </nav><!-- #footer-navigation -->
        <div class="footer-contact col-md-4 col-sm-6 order-md-4 order-sm-2 order-2">
            <p> <a target="_blank" href="mailto:hello@brightensport.com">hello@brightensport.com</a></p>
            <p> <a target="_blank" href="https://app.brightensport.com/pro-signup">Für Spitzensportler:innen​</a></p>
        </div>
    </div> <!-- row-->
    <div class="row footer-form">

        <?php echo do_shortcode('[mc4wp_form id="41"]'); ?>

    </div>
</footer><!-- #footer -->

<!-- </div>#page -->

<?php wp_footer(); ?>

</body>

</html>