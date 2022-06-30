<?php
session_start();
include("kiem_tra_session.php");

class C_thong_ke_san_pham
{
    function hien_thi_thong_ke_san_pham(){
        include("models/m_thong_ke_doanh_thu.php");
        $m_thong_ke_doanh_thu = new M_thong_ke_doanh_thu();
        $theo_sp=$m_thong_ke_doanh_thu->theo_san_pham();
        //Controller
        $view = "./views/v_thong_ke_san_pham.php";
        $title = "Thống kê sản phẩm";
        require_once "./views/layout.php";
    }
 
}
?>
