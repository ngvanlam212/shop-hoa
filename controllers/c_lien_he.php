
<?php
session_start();
class C_lien_he
{
    public function hien_thi_trang_lien_he()
    {
        include("c_data_contact.php");
        $title = "Liên hệ";
        $view = "./views/v_lien_he.php";
        require_once "./views/layout.php";
    }
}
