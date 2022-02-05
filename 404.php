<?php


get_header(); ?>

<div class="wrap-404">
	
		<main id="main" class="site-main" role="main">

			<section class="error_404_section not-found">
				<header class="page-header">
					<h1 class="page-title">404 Page not found</h1>
				</header><!-- .page-header -->
				<div class="page-content">
				<div class="gohome" >
					<a href="<?php echo home_url();?>" rel="">Home</a>
				</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	
</div><!-- .wrap -->

<?php
get_footer();
