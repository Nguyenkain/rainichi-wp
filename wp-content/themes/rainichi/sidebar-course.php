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
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Khoá học
			<span class="caret"></span>
		</button>
		<ul>
			<li><a href="#" class="active">RAN</a></li>
			<li>
				<a href="#" class="active">Giới thiệu</a>
				<br/>
				<a href="course-package.html">Chương trình học</a>
				<br/>
				<a href="course-teacher.html">Giáo viên</a>
				<br/>
				<a href="#">Điều kiện - Học phí</a>
			</li>
			<li><a href="#">YOKEN</a></li>
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
