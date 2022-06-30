<?php
session_start();
include("kiem_tra_session.php");

class C_thanh_vien
{
    public function trang_thanh_vien()
    {
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        include("./models/m_thanh_vien.php");
        $m_thanh_vien = new M_thanh_vien();
        $thanh_viens = $m_thanh_vien->doc_tat_ca_thanh_vien();

        if (isset($_POST['btn_update'])) {
          $id = $_POST['id'];
          $permission = $_POST['permission'];
          $update = $m_thanh_vien->update_thanh_vien($permission, $id);
          if ($update) {
              $_SESSION['thongBaoThanhCong']="Cập nhật thành viên thành công";
          }
        }
        
        $view = "./views/v_thanh_vien.php";
        $title = "Danh sách thành viên";

        require_once "./views/layout.php";
    }


}
