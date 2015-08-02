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
		<ul>
			<li><a href="#">Tầm nhìn-Sứ mệnh-Định hướng</a></li>
			<li><a href="#" class="active">Vì sao nên chọn Rai-Nichi?</a></li>
			<li><a href="about-teacher.html">Giáo viên</a></li>
			<li><a href="about-share.html">Chia sẽ từ học viên</a></li>
			<li><a href="#">Cơ hội nghề nghiệp</a></li>
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
	<?php echo do_shortcode('[contact-form-7 id="40" title=""]') ?>
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
