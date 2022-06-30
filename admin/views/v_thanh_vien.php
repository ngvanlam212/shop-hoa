<!-- Example DataTables Card-->
<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col col-6">
                <i class="fa fa-table"></i> Danh sách thành viên
            </div>
            <div class="col col-6">
                <a href="them_thanh_vien.php" class="btn btn-success float-right" target="_blank">Thêm thành viên
                    mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tài khoản</th>
                        <th>Tên</th>
                        <th>Quyền</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($thanh_viens as $thanh_vien) {
                            echo '<tr id="delete'.$thanh_vien["ID"].'">
                            <td>'.$thanh_vien["TaiKhoan"].'</td>
                            <td>'.$thanh_vien["HoTen"].'</td>
                            <td>';
                                if ($thanh_vien["permission"] == 1) echo "Admin";
                                elseif ($thanh_vien["permission"] == 0) echo "Quản lý đơn hàng";
                                else echo "Quản lý sản phẩm";
                            echo '</td>
                            <td>';
                            if ($thanh_vien["permission"] != 1)
                            echo    '<button type="button" class="btn btn-primary" onclick="getId('.$thanh_vien["ID"].')"
                                    id="update'.$thanh_vien["ID"].'" data-toggle="modal"
                                    data-target="#edit'.$thanh_vien["ID"].'">Sửa</button>
                                    <button type="button" onclick="deleteAjax('.$thanh_vien["ID"].')"
                                    class="btn btn-danger">Xóa</button>';
                            else
                                echo    '<button type="button" class="btn btn-primary" onclick="getId('.$thanh_vien["ID"].')"
                                        id="update'.$thanh_vien["ID"].'" data-toggle="modal"
                                        data-target="#edit'.$thanh_vien["ID"].'">Sửa</button>
                                </td>
                        </tr>';
                        
                        echo ' <div class="modal fade" id="edit'.$thanh_vien["ID"].'" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style="max-width: 875px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết'.$thanh_vien["HoTen"].'</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST">
                                            <input type="hidden" name="id" value="'.$thanh_vien["ID"].'">
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Tài khoản:</label>
                                                <input type="text" class="form-control" name="tai_khoan"
                                                    value="'.$thanh_vien["TaiKhoan"].'" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Quyền:</label>
                                                <select class="form-control" name="permission">
                                                    <option '; if ($thanh_vien["permission"] == 1) echo 'selected="selected"';
                                                        echo 'value="1">Admin</option>
                                                    <option '; if ($thanh_vien["permission"] == 0) echo 'selected="selected"';
                                                        echo 'value="0">QL Đơn Hàng</option>
                                                    <option '; if ($thanh_vien["permission"] == 2) echo 'selected="selected"';
                                                        echo 'value="2">QL Sản Phẩm</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-success" name="btn_update"
                                                    id="checkUpdate'.$thanh_vien["ID"].'">Cập nhật</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="public/js/ajax/ajax_delete_thanh_vien.js"></script>
    <!-- <script type='text/javascript'>

        $('select').change(function() {
        alert("hi");
            var op =$(this).val();
            if(op !='') {                 
            $('input[name="processor_details"]').prop('disabled',false);
        } else {
            $('input[name="processor_details"]').prop('disabled', true);
        }   
        });
    </script> -->
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
                    window.location = "thanh_vien.php";
                });
                </script>'; 
        }
    ?>