<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer>
	<div class="footer-area clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-6 link-map">
					<ul>
						<li><a href="#">Trang chủ</a></li>
						|
						<li><a href="#">Câu hỏi thường gặp</a></li>
						|
						<li><a href="#">Site Map</a></li>
						|
						<li><a href="#">Việc làm</a></li>
						|
						<li><a href="#">Liên lạc</a></li>
					</ul>
					<p> Rai-Nichi (cơ sở chính)</p>

					<p>112 Đường số 1 ,quận 1 ,TP.HCM</p>

					<p>08 6227172</p>

					<p>rai-nichi@gmail.com</p>
				</div>

				<div class="col-md-6 logo">
					<img class="img-responsive" src="<?php bloginfo( 'template_url' ); ?>/img/footer-logo.png">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<p class="copyright">&copy; Rai-Nichi Vietnam.All rights reserved. Developed by Your Business Vietnam</p>
</footer>
</div>
<!-- /background -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/vendor/swiper.jquery.min.js"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
