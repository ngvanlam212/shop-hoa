<section>
				<div class="tabs tabs-style-fillup">
					<nav>
						<ul>
							<li><a href="#section-fillup-1"><span>Theo ngày</span></a></li>
							<li><a href="#section-fillup-2"><span>Theo tuần</span></a></li>
							<li><a href="#section-fillup-3"><span>Theo tháng</span></a></li>
							<li><a href="#section-fillup-4"><span>Theo Quý</span></a></li>

						</ul>
					</nav>
					<div class="content-wrap">
						<?php 
							require_once "./views/thong_ke_theo_doanh_thu/v_theo_ngay.php";
							require_once "./views/thong_ke_theo_doanh_thu/v_theo_tuan.php";
							require_once "./views/thong_ke_theo_doanh_thu/v_theo_thang.php";
							require_once "./views/thong_ke_theo_doanh_thu/v_theo_quy.php";
						?>

					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
