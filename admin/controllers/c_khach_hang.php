<?php
session_start();
include("kiem_tra_session.php");
class C_khach_hang {
    function hien_thi_trang_khach_hang(){
        include("./models/m_khach_hang.php");
        $m_khach_hang = new M_khach_hang();
        $ds_khach_hang=$m_khach_hang->doc_tat_ca_khach_hang();
        $this->block_khach_hang();
        $this->unblock_khach_hang();
        $view = "./views/v_khach_hang.php";
        $title = "Trang khách hàng";
        require_once "./views/layout.php";
    }

    function block_khach_hang() {
        if (isset($_POST['action']) && $_POST['action'] == 'block') {
            $m_khach_hang = new M_khach_hang();
            $id= $_POST['ma_khach_hang'];
            $m_khach_hang->block_khach_hang($id, 1);
        }
    }

    function unblock_khach_hang() {
        if (isset($_POST['action']) && $_POST['action'] == 'unblock')
        {
            $m_khach_hang = new M_khach_hang();
            $id= $_POST['ma_khach_hang'];
            $m_khach_hang->block_khach_hang($id, 0);
        }
    }
}
?>
