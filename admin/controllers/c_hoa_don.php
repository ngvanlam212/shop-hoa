<?php
session_start();
include("kiem_tra_session.php");
class C_hoa_don
{
    function hien_thi_hoa_don_chua_duyet(){
        //Model
        include("./models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $doc_hoa_don=$m_hoa_don->xem_hoa_don_chua_duyet();
        //Controller
        $view = "./views/v_hoa_don.php";
        $title = "Danh sách hóa đơn chưa duyệt";
        require_once "./views/layout.php";
    }

    function hien_thi_hoa_don_da_duyet(){
        //Model
        include("./models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $doc_hoa_don=$m_hoa_don->xem_hoa_don_da_duyet();
        //Controller
        $view = "views/v_hoa_don.php";
        $title = "Danh sách hóa đơn đã duyệt";
        require_once "./views/layout.php";
    }
    
    function ChiTiet(){
      if(isset($_GET['ma_hoa_don'])){
        $ma_hoa_don=$_GET['ma_hoa_don'];
        include("./models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $chi_tiet_hoa_don=$m_hoa_don->Chi_Tiet($ma_hoa_don);
        $doc_san_pham=$m_hoa_don->SanPhamTheoMaHoaDon($ma_hoa_don);
        //Controller
        $view = "./views/v_chi_tiet_hoa_don.php";
        $title = "Chi tiết hóa đơn";
        require_once "./views/layout.php";
      }
    }
}
?>
