<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Họ tên</th>
      <th>Email</th>
      <th>Tổng đơn hàng</th>
      <th>Đơn hàng gần nhất</th>
      <th>Tổng chi tiêu</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($ds_khach_hang as $khach_hang) {
        echo '<tr>
      <td>'.$khach_hang["ten_khach_hang"].'</td>
      <td>'.$khach_hang["email"].'</td>
      <td>'.$khach_hang["don_hang"].'</td>
      <td><a href="chi_tiet_hoa_don.php?ma_hoa_don='.$khach_hang['don_hang_gan_nhat'].'" title="Xem chi tiết đơn hàng" >'.$khach_hang['don_hang_gan_nhat'].'</a></td>
      <td>'.number_format($khach_hang["tong_chi_tieu"]).' đ</td>
      <td>';
        if ($khach_hang["isBlock"]==0)
          echo '<button type="button" name="btn-block" class="btn btn-danger" onclick="blockAjax('.$khach_hang["ma_khach_hang"].')">Block</button>';
        else 
          echo '<button type="button" class="btn btn-primary" onclick="unblockAjax('.$khach_hang["ma_khach_hang"].')">UnBlock</button>
          <button type="button" class="btn btn-danger" disabled>Blocked</button>
          ';
      echo'</td>
    </tr>';
    }
    
  ?>
  </tbody>
</table>
