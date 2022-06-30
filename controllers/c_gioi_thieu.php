<?php
session_start();
class C_gioi_thieu
{
    public function hien_thi_trang_gioi_thieu()
    {
        include("c_data_contact.php");
        $title = "Giới thiệu";
        $view = "./views/v_gioi_thieu.php";
        require_once "./views/layout.php";
    }
}
