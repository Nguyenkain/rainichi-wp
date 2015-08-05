<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/apple-touch-icon.png">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/swiper.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/main.css">

	<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/bootstrap.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/swiper.jquery.min.js"></script>

	<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

</head>

<body <?php body_class(); ?>>
<div class="container nav-container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/logo.png"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<?php
			$args = array(
				'theme_location'  => 'primary',
				'container'       => 'div',
				'container_class' => 'navbar-collapse collapse in',
				'container_id'    => 'bs-example-navbar-collapse-1',
				'menu_class'      => 'nav navbar-nav navbar-right',
				'echo'            => true,
				'walker' => new wp_bootstrap_navwalker()
			);
			wp_nav_menu( $args );
			?>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="slider">
	<?php layerslider(1) ?>
</div>

<div id="background">
