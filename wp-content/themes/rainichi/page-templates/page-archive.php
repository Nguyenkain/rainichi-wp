<?php
/**
 * Template Name: Archives
 *
 * @package WordPress
 */

get_header(); ?>

	<div class="container common">
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-3 sidebar">
				<?php get_sidebar() ?>
			</div>
			<div class="col-md-9 content">
				<?php if ( have_posts() ) : ?>

					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
//						get_template_part( 'content', get_post_format() );
						?>
						<div class="row news-item">
							<div class="col-xs-2 news-item-date">
								<?php $date = date('Y-m-d',strtotime(the_date()));?>
								<div><?php echo date('d/m',strtotime($date)); ?><br/><?php echo date('Y',strtotime($date)); ?></div>
							</div>
							<div class="col-xs-10 news-item-info">
								<h4>RAI-NICHI KHAI TRƯƠNG TRUNG TÂM MỚI</h4>
								<div class="row">
									<div class="col-sm-12 col-sm-4 thum-img">
										<?php the_post_thumbnail(array('class' => 'img-responsive')); ?>
									</div>
									<div class="col-sm-12 col-sm-8 short-des">
										<?php the_excerpt() ?>
									</div>
								</div>
								<div class="row options">
									<div class="col-xs-12 col-sm-9 link-map">
										<ul>
											<li><a href="<?php the_permalink() ?>">Đọc tiếp</a></li>
											<li><a href="<?php comment_link()?>"><?php comments_number()?></a></li>
											<li><a href="#"><?php if(has_tag()) { the_tags(); } else { echo 'Tags:'; }?></a></li>
											<li><a href="#">Share</a></li>
										</ul>
									</div>
									<div class="col-xs-12 col-sm-3 sns">
										<ul>
											<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/sns-1-hover.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/sns-2-hover.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/sns-3-hover.png" class="img-responsive"></a></li>
											<li><a href="#"><img src="<?php bloginfo( 'template_url' ); ?>/img/sns-4-hover.png" class="img-responsive"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<?php
						// End the loop.
					endwhile;

					// Previous/next page navigation.
					the_posts_pagination( array(
						'prev_text'          => __( '<<', 'twentyfifteen' ),
						'next_text'          => __( '>>', 'twentyfifteen' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
					) );

				// If no content, include the "No posts found" template.
				else :
					get_template_part( 'content', 'none' );

				endif;
				?>

				<div class="row pagination">
					<ul>
						<li><a href="#">&lt;&lt;</a></li>
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">&gt;&gt;</a></li>
					</ul>
				</div>
				<div class="bottom-triangle">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/bottom-triangle.png" class="img-responsive">
				</div>
			</div>
		</div>
		<hr>
	</div>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
