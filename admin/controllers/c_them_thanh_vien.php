<?php
session_start();
include("kiem_tra_session.php");

class C_them_thanh_vien
{
    public function hien_thi_them_thanh_vien()
    {
        //Model
        include("./models/m_them_thanh_vien.php");
        $m_them_thanh_vien = new M_them_thanh_vien();
        $m_them_thanh_vien->data_dang_ky();
        //Controller
        $view = "./views/v_them_thanh_vien.php";
        $title = "Thêm thành viên";
        require_once "./views/layout.php";
    }
}
