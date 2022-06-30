<?php
  if($_COOKIE['permission']==0 || $_COOKIE['permission']==1){ 
    require_once "./views/index/v_don_hang.php";
    echo '<div class="container auto_refresh">
    <div class="card mb-3" id="chua_duyet"></div>';
  }
  else {
    require_once "./views/index/v_san_pham.php";
    echo '<div class="card mb-3" id="het_hang">';
    require_once "./views/index/v_ds_hoa_het_hang.php";
    echo '</div>';
  }
?>

</div>
	<script src="./public/js/ajax/ajax_update_hoa_don.js"></script>
  <script src="./public/js/ajax/ajax_delete_hoa_don.js"></script>
