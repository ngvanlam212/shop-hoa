<div class="col-md-5 ">
  <h3 class="canh_giua khach_hang thong_tin">Đơn hàng</h3>
  <div class="product-right-block">
    <div class="border_bottom">
      <div class="sl_don_hang">
        Đơn hàng của bạn (<?=$_SESSION['tong_gio_hang']?> sản phẩm)
      </div>
    </div>
    <div class="san_pham border_bottom_1px">
      <table>
      <?php
        foreach ($_SESSION["giohang"] as $k=>$gh)
        foreach ($hoa as $sp)
          if ($k==$sp['MaHoa']) {
            echo '<tr class="bang_don_hang">
            <td class="ten_hoa_kh">
              <a href="chi_tiet_hoa.php?id='.$sp['MaHoa'].'">'.$sp['TenHoa'].'</a>
            </td>
            <td>
              <div class="sl_kh">x'.$gh.'</div>
            </td>
            <td>
              <div class="tong_kh">'.number_format($sp['GiaKhuyenMai']*$gh).' đ</div>
            </td>
            </tr>';
          }
      ?>
      </table>
    </div>
    <div class="thanh_tien">
      <span class="chu_in">Thành tiền:</span>
      <span class="tong_thanh_tien"><?=number_format($_SESSION['tong_tt'])?> đ</span>
    </div>
  </div>
</div>
