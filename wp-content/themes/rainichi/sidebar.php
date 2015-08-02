<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

?>

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
	<form>
		<div class="col-xs-12 contact-item">
			<div class="form-group">
				<label>Họ và tên:</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>Điện thoại:</label>
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<label>Lời nhắn:</label>
				<textarea class="form-control" cols="6" rows="6"> </textarea>
			</div>
			<div class="submit-btn">
				<button type="button">GỬI</button>
			</div>
		</div>
	</form>
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
