<?php require_once "./views/chi_tiet_hoa/v_thanh_danh_muc.php"; ?>
<div class="container">
  <div class="product-view">
    <form method="post" action="gio_hang.php?MaHoa=<?=$hoa["MaHoa"]?>">
      <div class="row">
        <div class="col-md-5">
            <img class="img-responsive hinh_ct" src="public/images/hoa/<?=$hoa["Hinh"]?>" alt="<?=$hoa["TenHoa"]?>" title="<?=$hoa["TenHoa"]?>">
        </div>
        <div class="product-shop col-md-7 col-sm-6 col-xs-12">
          <div class="product-shop-content">
            <?php 
            require_once "./views/chi_tiet_hoa/v_chi_tiet_hoa.php";
            require_once "./views/chi_tiet_hoa/v_thong_tin_khac.php"; 
            require_once "./views/chi_tiet_hoa/v_thong_tin_hoa.php"; 
            ?>
          </div>
      </div>
    </div>
  </form>
</div>
  <?php require_once "./views/chi_tiet_hoa/v_san_pham_cung_loai.php"; ?>
</div>
<?php require_once "./views/v_gio_hang_ajax.php"; ?>
