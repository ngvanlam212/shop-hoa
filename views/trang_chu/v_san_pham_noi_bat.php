<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 custom-product custom2">
  <div class= "bmqodnfrgh magicproduct mage-custom">
    <div class="block-title-tabs">
      <ul class="magictabs">
        <li class="item active loaded single" >
          <span class ="title">Sản phẩm nổi bật</span>
        </li>
      </ul>
    </div>
    <div class="content-products" >
      <div class="mage-magictabs mc-featured">
        <ul class="flexisel-content products-grid random zoomOut play">
        <?php 
            foreach ($san_pham_noi_bat as $noi_bat) {
              echo '<li data-aos="fade-up"data-aos-duration="600">
              <div class="per-product clearfix">
                <div class="images-container">
                  <div class="product-hover">
                    <a href="chi_tiet_hoa.php?id='.$noi_bat["MaHoa"].'" title="'.$noi_bat["TenHoa"].'" class="product-image">
                      <img class="img-responsive hinh_san_pham" src="public/images/hoa/'.$noi_bat["Hinh"].'" alt="'.$noi_bat["TenHoa"].'" />
                    </a>
                  </div>
                </div>
                <div class="products-textlink product-featured-custom clearfix">
                  <h2 class="product-name">
                    <a href="chi_tiet_hoa.php?id='.$noi_bat["MaHoa"].'" title="'.$noi_bat["TenHoa"].'">'.$noi_bat["TenHoa"].'</a>
                  </h2>
                  <div class="price-box">
                    <p class="old-price">
                      <span class="price-label">Giá mới:</span>
                      <span class="price" id="product-price-2107">
                    '.number_format($noi_bat["Gia"]).'  đ</span>
                    </p>
                    <a href="chi_tiet_hoa.php?id='.$noi_bat["MaHoa"].'" class="minimal-price-link">
                      <span class="label">Mua online:</span>
                      <span class="price" id="product-minimal-price-2107">
                      '.number_format($noi_bat["GiaKhuyenMai"]).'  đ   </span>
                    </a>
                  </div>
                  <div class="actions"></div>
                </div>
              </div>
            </li>';
            }   
        ?>
        </ul>
      </div>
    </div>
    <!-- MAP -->
    <!-- MAP -->
  </div>
</div>
