<?php
session_start();
class C_chi_tiet_hoa
{
    public function hien_thi_trang_chi_tiet_hoa()
    {
        include("c_data_contact.php");
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        include("./models/m_chi_tiet_hoa.php");
        $m_chi_tiet_hoa = new M_chi_tiet_hoa();
        $hoa = $m_chi_tiet_hoa->doc_theo_ma_hoa($id);
        $maLoai = $hoa["MaLoai"];
        $hoa_cung_loai = $m_chi_tiet_hoa->doc_hoa_cung_loai($maLoai, $id);
        $view = "./views/v_chi_tiet_hoa.php";
        $title = $hoa["TenHoa"];
        require_once "./views/layout.php";
    }
}
