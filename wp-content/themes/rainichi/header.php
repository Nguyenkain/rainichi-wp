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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.html">Trang chủ <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						   aria-expanded="false">Về Rainichi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Câu chuyện về Rai-nichi</a></li>
							<li><a href="about-reason.html">Vì sao nên học tại Rai-nichi</a></li>
							<li><a href="#">Sứ mệnh</a></li>
							<li><a href="about-teacher.html">Giáo viên</a></li>
							<li><a href="about-share.html">Nhận xét của học viên</a></li>
						</ul>
					</li>
					<li><a href="course.html">Khoá học</a></li>
					<li><a href="plan.html">Lịch học</a></li>
					<li><a href="login.html">Học viên</a></li>
					<li><a href="news.html">Tin tức</a></li>
					<li><a href="contact.html">Liên hệ</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="slides">
	<div class="slide-wrapper swiper-wrapper">
		<div class="swiper-slide">
			<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/slide-01.png">
		</div>
		<div class="swiper-slide">
			<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/slide-01.png">
		</div>
		<div class="swiper-slide">
			<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/slide-01.png">
		</div>
	</div>
	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>
</div>

<div id="background">
