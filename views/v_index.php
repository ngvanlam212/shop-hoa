<?php
require_once "./views/trang_chu/v_slider.php";
require_once "./views/trang_chu/v_banner.php";
?>
<div class="container mau_hoa">
    <div class="magic-category clearfix">
        <div class="block-title-tabs clearfix">
            <ul class="magictabs">
                <li class="item active loaded">
                    <span class="title" data-toggle="tab" href="#menu1">Mẫu hoa mới</span>
                </li>
                <li class="item" >
                    <span class="title" data-toggle="tab" href="#menu2">Mẫu hoa bán chạy</span>
                </li>
                <li class="item">
                    <span class="title" data-toggle="tab" href="#menu3">Mẫu hoa giảm giá</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <?php
         require_once "./views/trang_chu/v_mau_hoa_moi.php";
         require_once "./views/trang_chu/v_mau_hoa_ban_chay.php";
         require_once "./views/trang_chu/v_mau_hoa_giam_gia.php";
        ?>
    </div>
</div>
<div class="container">
  <div class="cms-static-mix-custom-product block-custom-product">
  	<div class="container">
  		<div class="row">
  			<?php
            require_once "./views/trang_chu/v_san_pham_giam_gia.php";
            require_once "./views/trang_chu/v_san_pham_noi_bat.php";
            require_once "./views/trang_chu/v_san_pham_re_nhat.php";
            ?>
  		</div>
  	</div>
  </div>
</div>
<?php require_once "./views/v_gio_hang_ajax.php"; ?>
