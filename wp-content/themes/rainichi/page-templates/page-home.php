<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 */

get_header(); ?>

	<div class="container">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			the_content();
		endwhile; ?>
		<hr>
	</div>

<?php
get_footer();
