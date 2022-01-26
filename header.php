<?php
/**
 * The header.
 */
?>
<!doctype html >
<html lang="de" xml:lang="de">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="keywords" content="Brightensport" />
  <meta name="description" content="Brightensport" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-197010923-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-197010923-1');
</script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- <div id="page" class="site"> -->
	
	<header id="masthead" class="main_header" role="banner">

		<?php get_template_part( 'template-parts/header/site-nav' ); ?>

	</header><!-- #masthead -->
	
