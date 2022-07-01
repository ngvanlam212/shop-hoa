<?php
class C_tin_tuc
{
  public function hien_thi_tin_tuc(){
    include("c_data_contact.php");
    include("./models/m_tin_tuc.php");
    $m_tin_tuc = new M_tin_tuc();
    $tin_tuc = $m_tin_tuc->doc_tat_ca_su_kien();
    $title = "Trang tin tức";
    $view = "./views/v_tin_tuc.php";
    require_once "./views/layout.php";
  }
    public function hien_thi_ct_tin_tuc()
    {
        include("c_data_contact.php");
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        include("./models/m_tin_tuc.php");
        $m_tin_tuc = new M_tin_tuc();
        $tin_tuc = $m_tin_tuc->chi_tiet_tt($id);
        $MaLoaiTin = $tin_tuc['MaLoaiTin'];
        $tin_cung_loai = $m_tin_tuc->doc_tin_tuc_cung_loai($MaLoaiTin,$id);
        $view = "./views/v_chi_tiet_tin_tuc.php";
        $title = $tin_tuc['TenTT'];
        require_once "./views/layout.php";
    }
}
