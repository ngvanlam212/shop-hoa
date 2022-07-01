<?php
session_start();
class C_dang_nhap
{
    public function hien_thi_trang_dang_nhap()
    {
        //Model
        unset($_SESSION['thongBao']);
        if (isset($_POST["btn_dang_nhap"])) {
            $taiKhoan=$_POST["tai_khoan"];
            $matKhau=$_POST["mat_khau"];
            if ($this->luu_dang_nhap($taiKhoan, $matKhau)) {
                if (isset($_POST['checked'])) {
                    setcookie('checked', true, time() + 86400 * 3, '/');
                }
                header('Location: index.php');
            }
        }
        //View
        $title = "Đăng nhập";
        $view = "./views/v_dang_nhap.php";
        require_once "./views/layout_dang_nhap.php";
    }

    public function luu_dang_nhap($taiKhoan, $matKhau)
    {
        include("./models/m_dang_nhap.php");
        $m_dang_nhap = new M_dang_nhap();
        $user=$m_dang_nhap->kt_dang_nhap($taiKhoan, $matKhau);
        if ($user) {
            $cookie_id=$user['ID'];
            $cookie_hoTen=$user['HoTen'];
            $cookie_taiKhoan=$user['TaiKhoan'];
            $cookie_permission=$user['permission'];
            //set cookie trong 5
            setcookie('id', $cookie_id, time() + 86400 * 3, '/');
            setcookie('hoTen', $cookie_hoTen, time() + (86400 * 3), '/');
            setcookie('taiKhoan', $cookie_taiKhoan, time() + (86400 * 3), '/');
            setcookie('permission', $cookie_permission);
            return true;
        }
        $_SESSION['thongBao']="Tài khoản hoặc mật khẩu không hợp lệ";
        return false;
    }
}
