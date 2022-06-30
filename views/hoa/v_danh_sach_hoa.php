    <div class="category-products">
        <ul class="products-grid row aos-all" id="transcroller-body">
          <?php 
            if (count($doc_hoa) == 0)
              echo 'Rất tiếc chưa có sản phẩm';
            $dem=0;
            foreach ($doc_hoa as $hoa) {
              $dem=$dem+1;
              if ($dem%3==1) 
                echo '<li class="item do_dai aos-item" data-aos="fade-up">';
              elseif ($dem%3==2) 
                echo '<li class="item do_dai aos-item" data-aos="fade-down">';
              else
                echo '<li class="item do_dai aos-item" data-aos="flip-down">';
              echo '<div class="category-products-grid">
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
                            echo '<p class="notify"><button>Đã hết hàng</button></p>';
                    echo'</div>
                </div>
            </div>
        </li>';
            }
          ?>
        </ul>
    </div>
    <div class="bsm_products_pagination" >
    <?php 
      for ($i=1;$i<=$phan_trang;$i++)
        echo '<span class="pagination_link" id="'.$i.'">'.$i.'</span>'
    ?>
</div>
</div>
