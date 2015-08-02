<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 */

get_header(); ?>

	<div class="container common">
		<?php
		// Start the Loop.
		while ( have_posts() ) : the_post(); ?>
			<div class="row">
				<div class="col-md-3 sidebar">
					<?php get_sidebar( ) ?>
				</div>
				<div class="col-md-9 content">
					<?php the_content() ?>
				</div>
			</div>
		<?php endwhile; ?>
		<hr>
	</div>

<?php
get_footer();
