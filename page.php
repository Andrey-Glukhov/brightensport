<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();?>
<h1>HOME</h1>
<?php
/* Start the Loop */
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		the_content();

		// If comments are open or there is at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	endwhile; // End of the loop.
endif;
get_footer();
