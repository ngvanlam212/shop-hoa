<?php
session_start();
include("kiem_tra_session.php");

class C_loai_hoa 
{
    function hien_thi_loai_hoa(){
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        //Model
        include("models/m_loai_hoa.php");
        $m_loai_hoa = new M_loai_hoa();
        $doc_loai_hoa = $m_loai_hoa->doc_tat_ca_loai_hoa();
        if(isset($_POST['btn_update'])){
            $tenLoai = $_POST['ten_loai'];
            $maLoai = $_POST['ma_loai'];
            $kiem_tra = $m_loai_hoa->kiem_tra_loai_hoa($tenLoai);
            if(!$kiem_tra){
                $update = $m_loai_hoa->update_loai_hoa($tenLoai,$maLoai);
                if($update){
                    $_SESSION['thongBaoThanhCong']="Cập nhật loại hoa thành công";
                }
            }
        }
        //Controller
        $view = "./views/v_loai_hoa.php";
        $title = "Danh sách loại hoa";
        require_once "./views/layout.php";
    }
}
?>