    <div id="bsm_contact">
        <div class="col-md-12 col-sm-12 col-xs-12 bsm_title_section" style="margin-top: 30px">
        <h1><?=$title?></h1>
            <img src="public/img/divider.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <img src="http://45.77.235.110/~chufarmc/public/img/error.jpg" alt="">
            </div>
            <div class="col-lg-8">
                    <!-- <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                        <form method="POST">
                            <div id="imaginary_container"> 
                                <div class="input-group stylish-input-group">
                                    <input type="text" name="search" class="form-control"  placeholder="Nhập số điện thoại để tìm hóa đơn" >
                                    <span class="input-group-addon">
                                        <button type="submit" name="btn_search">
                                            <span class="fa fa-search"></span>
                                        </button>  
                                    </span>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div> -->
                <div class="w3-responsive">
                    <table class="w3-table-all">
                        <thead>
                        <tr class="w3-green">
                            <th class="w3-text-white">Họ và tên</th>
                            <th class="w3-text-white">Sản phẩm đặt</th>
                            <th class="w3-text-white">Số lượng</th>
                            <th class="w3-text-white">Tổng tiền</th>
                            <th class="w3-text-white">Trạng thái</th>
                            <th class="w3-text-white">Thời gian</th>
                        </tr>
                        </thead>
                        <?php 
                         if (isset($hoa_dons)) {
                            foreach ($hoa_dons as $hoa_don)
                            echo '<tr>
                            <td class="w3-text-black w3-large">'.$hoa_don["ten_khach_hang"].'</td>
                            <td><a href="chi_tiet_hoa.php?id='.$hoa_don["MaHoa"].'" class="w3-text-black w3-hover-text-orange w3-large hidden_text" target="_blank">'.$hoa_don["TenHoa"].'</a></td>
                            <td class="w3-text-black w3-large">'.$hoa_don["so_luong"].'</td>
                            <td class="w3-text-black w3-large">'.number_format($hoa_don["tong_thanh_tien"]).' đ</td>
                            <td class="w3-text-black w3-large">'.$hoa_don["trang_thai"].'</td>
                            <td class="w3-text-black w3-large">'.$hoa_don["ngay_dat"].'</td>
                            </tr>';
                         }
                        ?> 
                    </table>
                </div>
            </div>
    </div>

   <?php 
    if (isset($_SESSION['status']))
        echo'<script>swal("'.$_SESSION['status'].'");</script>'
   ?>