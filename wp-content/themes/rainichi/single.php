<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container common">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-3 sidebar">
			<?php get_sidebar() ?>
		</div>
		<div class="col-md-9 content">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				?>
				<div class="row news-item">
					<div class="col-xs-2 news-item-date">
						<?php $date = date('Y-m-d',strtotime(get_the_date()));?>
						<div><?php echo date('d/m',strtotime($date)); ?><br/><?php echo date('Y',strtotime($date)); ?></div>
					</div>
					<div class="col-xs-10 news-item-info">
						<h4><?php the_title() ?></h4>
						<?php the_content() ?>
						<div class="row options">
							<div class="col-xs-12 col-sm-9 link-map">
								<ul>
									<li><a href="<?php the_permalink() ?>"><?php comments_number() ?></a></li>
									<li><a href="<?php comment_link()?>"><?php if(has_tag()) { the_tags(); } else { echo 'Tags:'; }?></a></li>
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

						<div class="row comment">
							<textarea class="form-control" placeholder="Ý kiến của bạn"></textarea>
							<div class="submit-btn">
								<button type="button">Gửi</button>
							</div>
						</div>

						<div class="row more-news">
							<?php
							$related = get_posts( array( 'category__in' => wp_get_post_categories(get_the_ID()), 'numberposts' => 4, 'post__not_in' => array(get_the_ID()) ) );
							if( $related ) foreach( $related as $post ) {
								setup_postdata($post); ?>
								<div class="col-xs-6 col-sm-3 more-news-item">
									<div class="date"><?php $date = date('Y-m-d',strtotime(get_the_date()));?>
										<?php echo date('d/m',strtotime($date)); ?><br/><?php echo date('Y',strtotime($date)); ?></div>
									<div class="news-title"><a href="<?php the_permalink()?>"><span><?php the_title()?></span></a></div>
								</div>
							<?php }
							wp_reset_postdata(); ?>
						</div>

						<div class="row related-news">
							<ul>
								<?php
								$related = get_posts( array( 'category__in' => wp_get_post_categories(get_the_ID()), 'numberposts' => 4, 'post__not_in' => array(get_the_ID()) ) );
								if( $related ) foreach( $related as $post ) {
									setup_postdata($post); ?>
									<li><a href="<?php the_permalink()?>"><?php the_title()?></a></li>
								<?php }
								wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>
				</div>
				<?php
//				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
//					comments_template();
				endif;

				// End the loop.
			endwhile;
			?>

			<div class="see-more">
				<a href="#">&gt;&gt; Xem thêm</a>
			</div>
			<div class="bottom-triangle">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/bottom-triangle.png" class="img-responsive">
			</div>
		</div>
	</div>
	<hr>
</div>

<?php get_footer(); ?>
