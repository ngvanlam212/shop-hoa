<!-- Example DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Danh sách loại hoa
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?php require_once "./views/loai_hoa/v_danh_sach_loai_hoa.php" ?>
        </div>
    </div>
    <script src="public/js/ajax/ajax_delete_loai_hoa.js"></script>
    <script src="public/js/ajax/ajax_kt_trung_loai_hoa.js"></script>
    <?php 
        if (isset($_SESSION['thongBao'])) {
            $thongBao = $_SESSION['thongBao'];
            echo "<script>swal('$thongBao');</script>";
        }

        if (isset($_SESSION['thongBaoThanhCong'])) {
            echo ' <script>
                swal({
                    title: "Thành công!",
                    text: "'.$_SESSION['thongBaoThanhCong'].'!",
                    icon: "success"
                }).then(function() {
                    $.ajax({
                        success: function() {
                            window.location = "loai_hoa.php";
                        }
                    });
                });
                </script>'; 
        }
    ?>