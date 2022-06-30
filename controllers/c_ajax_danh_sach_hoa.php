<?php
session_start();
class C_ajax_danh_sach_hoa
{
    public function ds_hoa()
    {
        include("./models/m_hoa.php");
        $m_hoa = new M_hoa();
        $doc_hoa = $m_hoa->doc_tat_ca_hoa();
        $page=$_POST['page'];
        if (isset($_POST['maloai'])) {
            $ma_loai=$_POST['maloai'];
            $doc_hoa = $m_hoa->doc_ds_loai_hoa($ma_loai);
         }
         elseif (isset($_POST['price_range'])) {
            $priceRange=$_POST['price_range'];
            $priceRangeArr = explode(',', $priceRange);
            $doc_hoa =$m_hoa->doc_theo_gia($priceRangeArr[0], $priceRangeArr[1]);
        } 
        elseif (isset($_POST['maloaigia']) && isset($_POST['loaigia'])) {
            $ma_loai=$_POST['maloaigia'];
            $gia=$_POST['loaigia'];
            $gia = explode(',', $gia);
            $doc_hoa=$m_hoa->doc_theo_ma_loai_gia($ma_loai, $gia[0], $gia[1]);
        }
        $limit=9;
        $tong=count($doc_hoa);
        $vt=($page-1)*$limit;
        if (isset($_POST['maloai'])) {
            $doc_hoa = $m_hoa->doc_ds_loai_hoa($ma_loai, $vt, $limit);
        }
        elseif (isset($_POST['price_range'])) {
             $doc_hoa=$m_hoa->doc_theo_gia($priceRangeArr[0], $priceRangeArr[1], $vt, $limit);
        }
        elseif (isset($_POST['maloaigia']) && isset($_POST['loaigia'])) {
            $doc_hoa=$m_hoa->doc_theo_ma_loai_gia($ma_loai, $gia[0], $gia[1], $vt, $limit);
        } else {
            $doc_hoa = $m_hoa->doc_tat_ca_hoa($vt, $limit);
        }
        $phan_trang=ceil($tong/$limit);
        require_once "./views/hoa/v_danh_sach_hoa.php";
    }
}
