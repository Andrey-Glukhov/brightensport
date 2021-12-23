<?php
/**
 * Displays the site navigation.
 *
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<div class="menu-wrapper">
    <nav id="site-navigation" class="navbar navbar-expand-lg primary-navigation" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo  get_template_directory_uri()?>/img/blogo-white.png">
            </a>

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse offcanvas-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'menu_class' => 'navbar ml-auto',
					'items_wrap' => '<li id="%1$s" data-scroll class="navbar-item %2$s">%3$s</li>',
					'item_spacing' => 'preserve'
				)
				);
				?>
                </ul>
            </div> <!-- #navbarSupportedContent -->
        </div> <!-- .container-fluid -->

    </nav><!-- #site-navigation -->



    <nav id="site-buttons" class="buttons-navigation" role="navigation">

        <?php
		wp_nav_menu(
			array(
				'theme_location'  => 'secondary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'secondary-menu-container',
				'items_wrap'      => '<ul id="secondary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
    </nav><!-- #site-navigation -->
</div>
<?php endif; ?>