<?php
session_start();
include("kiem_tra_session.php");
class C_index {
    function hien_thi_trang_index(){
        include("./models/m_index.php");
        $m_index = new M_index();
        if($_COOKIE['permission']==0 || $_COOKIE['permission']==1){
            if(isset($_POST['hien_thi'])){
                $so_hoa_don_trong_ngay  = $m_index->so_hoa_don_da_dat_trong_ngay();
                $so_hoa_don_chua_duyet = $m_index->so_hoa_don_chua_duyet_trong_ngay();
                $mang_hoa_don = array(count($so_hoa_don_chua_duyet) , count($so_hoa_don_trong_ngay) );
                echo json_encode($mang_hoa_don);
                return;
            }
        }
        if($_COOKIE['permission']==2){
            $dshoa=$m_index->ds_hoa_het_hang();
            $dem_hoa = $m_index->dem_hoa()['count'];
            $dem_loai_hoa = $m_index->dem_loai_hoa()['count'];
            $hoa_het_hang= $m_index->hoa_het_hang()['count'];
        }
        
        $view = "./views/v_index.php";
        $title = "Trang quản lý";
        require_once "./views/layout.php";
    }

    //gọi từ ds_hoa_don_chua_duyet.php
    public function hoa_don_chua_xu_ly()
    {
        if(isset($_POST['hien_thi'])){
            include("./models/m_hoa_don.php");
            $m_hoa_don=new M_hoa_don();
            $doc_hoa_don=$m_hoa_don->xem_hoa_don_chua_xu_ly_hom_nay();
            require_once "./views/index/v_ds_hoa_don_chua_duyet.php";
        }
    }

    //ajax_hoa_het_hang
    public function sua_sl_hoa()
    {
        $maHoa=$_POST['pk'];
        $sl=$_POST['value'];
        include("./models/m_index.php");
        $m_index = new M_index();
        $update = $m_index->sua_sl($maHoa, $sl);
        echo $maHoa;
    }
}
?>
