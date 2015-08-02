<?php
/**
 * Created by PhpStorm.
 * User: Nguyenkain
 * Date: 02/08/2015
 * Time: 4:42 CH
 */
?>
<div class="sidebar-sub-menu">
	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
		        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Về Rainichi
			<span class="caret"></span>
		</button>

		<?php
		$page_id = get_the_ID();
		$args = array(
			'sort_order'  => 'asc',
			'sort_column' => 'ID',
			'include'     => array(13, 20, 15),
			'post_type'   => 'page',
			'post_status' => 'publish'
		);
		$pages      = get_pages( $args );
		?>

		<ul>
			<?php foreach ( $pages as $page ) { ?>
				<li>
					<a class="<?php echo $page_id == $page->ID ? "active" : "" ?>" href="<?php echo get_the_permalink( $page->ID ) ?>"><?php echo get_the_title( $page->ID ) ?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<div class="sidebar-logo">
	<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/sidebar-logo.png">
</div>
<div class="row title">
	<div class="common-title">
		<img src="<?php bloginfo( 'template_url' ); ?>/img/mui-ten-cam.png">
		<span class="intro-head-title">HÃY GỌI CHO CHÚNG TÔI</span>
		<span class="telephone-num">09000000888</span>
	</div>
</div>
<div class="row contact">
	<?php echo do_shortcode( '[contact-form-7 id="40" title=""]' ) ?>
</div>
<div class="row sidebar-broch">
	<a href="#">
		<img src="<?php bloginfo( 'template_url' ); ?>/img/sidebar-broch.png">
	</a>
</div>
<div class="row sidebar-fb">
	<a href="#">
		<img src="<?php bloginfo( 'template_url' ); ?>/img/sidebar-fb.png">
	</a>
</div>
