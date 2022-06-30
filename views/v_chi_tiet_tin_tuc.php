<div class="container">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a href="." title="Trở về trang chủ">Trang chủ</a>
                </li>
                <li class="category22">
                    <a href="" title="<?=$tin_tuc["TenLoaiTin"]?>"><?=$tin_tuc["TenLoaiTin"]?></a>
                </li>
                <li class="category22">
                    <strong><?=$tin_tuc["TenTT"]?></strong>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="main">
        <div class="row">
            <div class="container">
                <div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 col-xs-12 left-color color f-left hidden-xs">
                    <div class="anav-container">
                        <div class="block block-anav">
                            <ul class="magictabs">
                                <li class="item active loaded single">
                                    <span class="title">Tin tức liên quan</span>
                                </li>
                            </ul>
                            <?php 
                                foreach ($tin_cung_loai as $tintuc)
                                echo '<div class="thumbnail">
                                <a href="ct_tin_tuc.php?id='.$tintuc["MaTT"].'" target="_blank">
                                    <img src="public/images/tin_tuc/'.$tintuc["Hinh"].'" alt="'.$tintuc["TenTT"].'" style="width:100%">
                                    <div class="caption">
                                        <p>'.$tintuc["TenTT"].'</p>
                                    </div>
                                </a>
                                </div>';
                            ?>
                        </div>
                    </div>
                </div>
            <!-- Right -->
                <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color f-right chi_tiet_tt">
                    <h1 class="ten_tt"><?=$tin_tuc["TenTT"]?></h1>
                    <h5 class="ngay_dang"><b>Ngày đăng:</b> <?=$tin_tuc["ThoiGian"]?></h5>
                    <p><?=$tin_tuc["NoiDung"]?></p>
                </div>
            </div>
        </div>
    </div>