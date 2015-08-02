<?php
/**
 * Template Name: Course Page
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
					<?php get_sidebar( 'course' ) ?>
				</div>
				<div class="col-md-9 content">
					<div class="about-breadcrumb">
						Khóa học &gt;&gt; <?php the_title() ?>
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
