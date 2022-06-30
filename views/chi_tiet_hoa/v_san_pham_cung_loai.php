<div class="container">
  <ul class="magictabs">
        <li class="item active loaded single">
            <span class="title cung_loai">Sản phẩm cùng loại</span>
        </li>
  </ul>
  <div class="category-products">
    <ul class="products-grid row">
      <?php 
      $i=0;
      $j=0;
      foreach ($hoa_cung_loai as $hoa) {
        $j=$j+1;
        $i=$j*300;
        echo '<li class="item" data-aos="flip-left" data-aos-duration="300"  data-aos-delay="'.$i.'">
          <div class="category-products-grid">
              <div class="images-container">
                  <div class="product-hover cp_img">
                      <a href="chi_tiet_hoa.php?id='.$hoa["MaHoa"].'" title="'.$hoa["TenHoa"].'" class="product-image">
                          <img class="img-responsive hinh_hoa" src="public/images/hoa/'.$hoa["Hinh"].'"  alt="'.$hoa["TenHoa"].'">
                      </a>
                  </div>

                  <h2 class="product-name">
                  <a href="chi_tiet_hoa.php?id='.$hoa["MaHoa"].'" title="'.$hoa["TenHoa"].'">'.$hoa["TenHoa"].'</a>
                  </h2>
                  <div class="actions-no hover-box">
                      <div class="actions">
                          <div class="price-box">
                              <a class="minimal-price-link">
                                  <span class="mua_online">Mua online:</span>
                                  <span class="price" id="product-minimal-price-2678">'.number_format($hoa["GiaKhuyenMai"]).' ₫</span>
                              </a>
                          </div>
                      </div>';
                        if ($hoa["SoLuongSP"] > 0)
                          echo '<div class="notify-dat-hang">
                            <button onclick="addToCart('.$hoa["MaHoa"].',1)">Thêm vào giỏ hàng</button>
                            </div>';
                        else
                          echo '<div class="notify"><button>Đã hết hàng</button></div>';
                 echo '</div>
              </div>
          </div>
      </li>';
      }
      ?>
    </ul>
  </div>
</div>
