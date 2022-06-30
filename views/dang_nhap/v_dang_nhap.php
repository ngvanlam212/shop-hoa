	<div class="login">
		<div class="container">
			<h2 class="h2Login">Đăng Nhập</h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<?php 
					if (isset($_SESSION['giohang']))
						echo '<div class="alert alert-warning" role="alert">
	            		Vui lòng đăng nhập để tiếp tục mua hàng!!!
						</div>';  
				?>
				<form method="post">
					<input type="email" name="email" placeholder="Email" required=" " value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">
					<input type="password" name="mat_khau" placeholder="Mật Khẩu" required=" ">
				
					<input type="submit" name="btnDangNhap" value="Đăng Nhập">
				</form>
			</div>
			<h4>Dành cho khách hàng mới</h4>
			<p><a href="dang-ki.php">Đăng kí tại đây</a> (Hoặc) trở vể <a href=".">Trang chủ <span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
		</div>
	</div>