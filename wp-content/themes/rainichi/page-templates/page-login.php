<?php
/**
 * Template Name: Login Page
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
					<?php get_sidebar( ) ?>
				</div>
				<div class="col-md-9 content">
					<div class="login-bg">
						<img class="img-responsive" id="login-bg" src="<?php  ?>img/login-bg.png">
						<div class="row login-form">
							<div class="col-xs-5"></div>
							<div class="col-xs-7 login-area">
								<div class="row">
									<div class="col-sm-3"></div>
									<div class="col-sm-9 login-title">
										NHẬN TÀI KHOẢN RAI-NICHI
										<br>KHI ĐĂNG KÝ NHẬP HỌC
									</div>
								</div>
								<div class="row">
									<form class="form-horizontal" action="student.html">
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-3 control-label">Tên đăng nhập:</label>
											<div class="col-sm-9">
												<input type="email" class="form-control" id="inputEmail3">
											</div>
										</div>
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu:</label>
											<div class="col-sm-9">
												<input type="password" class="form-control" id="inputPassword3">
											</div>
										</div>
										<div class="forgot-password"><a href="#">Quên mật khẩu</a></div>
										<div class="form-group">
											<div class="col-xs-12 login-btn">
												<button type="submit" class="btn btn-default ">ĐĂNG NHẬP</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<hr>
	</div>

<?php
get_footer();
