<?php 
	if (isset($_SESSION['giohang']))
		echo '<div class="cd-cart-container">';
  	else
		echo '<div class="cd-cart-container empty">';
?>
	<a  class="cd-cart-trigger">
		Cart
		<ul class="count" id="count">
		<?php 
			if (isset($_SESSION["tong_gio_hang"]))
				echo '<li>'.$_SESSION["tong_gio_hang"].'</li>
				<li>'.$_SESSION["tong_gio_hang"].'</li>';
			else
				echo '<li>0</li>
				<li>0</li>';
		?>
		</ul> <!-- .count -->
	</a>

	<div class="cd-cart">
		<div class="wrapper">
			<header>
				<h2>Giỏ Hàng</h2>
			</header>

			<div class="body">
				<ul id="listGioHang">
					<!-- products added to the cart will be inserted here using JavaScript -->
				</ul>
			</div>

			<footer class='footer_gio_hang'>
				<a href="khach_hang.php" alt="Xem giỏ hàng" class="checkout">
					<em>Đặt hàng - 
						<span id="tong_thanh_tien">
          		 0 đ
      			</span>
					</em>
				</a>
			</footer>
		</div>
	</div> <!-- .cd-cart -->
</div> <!-- cd-cart-container -->
