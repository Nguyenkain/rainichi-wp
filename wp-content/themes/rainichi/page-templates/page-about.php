<?php
/**
 * Template Name: About Page
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
					<?php get_sidebar( 'about' ) ?>
				</div>
				<div class="col-md-9 content">
					<div class="about-breadcrumb">
						Về Rai-nichi >> <?php the_title() ?>
						<img class="img-responsive" src="<?php bloginfo('template_url') ?>/img/about-reason-hr.png">
					</div>
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
		<hr>
	</div>

<?php
get_footer();
