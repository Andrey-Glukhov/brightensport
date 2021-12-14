<?php
/**
 * The footer
 */

?>

	<footer id="footer" class="site-footer container-fluid" role="contentinfo">
		<!-- <div class="container-fluid"> -->
			<div class="social-icons  d-flex flex-row justify-content-center">
				<a href="http://facebook.com/brightensport-111997390525646" target=blank>	
					<div class="icon-image" id="icon_fb"></div>
				</a>	
				<a href="https://www.instagram.com/brightensport/" target=blank>
					<div class="icon-image" id="icon_inst"></div>
				</a>
				<a href="https://www.linkedin.com/company/brightensport" target=blank>
					<div class="icon-image" id="icon_ln"></div>
				</a>
				<a href="https://www.crunchbase.com/organization/brightensport" target=blank>
					<div class="icon-image" id="icon_cb"></div>
				</a>
				<a href="https://angel.co/company/brightensport" target=blank>
					<div class="icon-image" id="icon_v"></div>
				</a>
			</div>
		<!-- </div> -->
		<div class="row footer-dark">
			<div class="footer-logo col-3">
			<img src="<?php echo  get_template_directory_uri()?>/img/logo_g.png" />
			</div>
			<nav id="footer-navigation" class="footer-navigation col-6" role="navigation" >

				
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footermenu',
						'menu_class'      => 'menu-wrapper',
						'container_class' => 'primary-menu-container',
						'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
				);
				?>
			</nav><!-- #footer-navigation -->
		</div>
		<div class="col-3">
		<div class="row footer-form">

		</div>	
	</footer><!-- #footer -->

<!-- </div>#page -->

<?php wp_footer(); ?>

</body>
</html>
