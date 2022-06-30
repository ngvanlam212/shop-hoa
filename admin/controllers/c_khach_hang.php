<?php
session_start();
include("kiem_tra_session.php");
class C_khach_hang {
    function hien_thi_trang_khach_hang(){
        include("./models/m_khach_hang.php");
        $m_khach_hang = new M_khach_hang();
        $ds_khach_hang=$m_khach_hang->doc_tat_ca_khach_hang();
        
        $view = "./views/v_khach_hang.php";
        $title = "Trang khách hàng";
        require_once "./views/layout.php";
    }
}
?>
