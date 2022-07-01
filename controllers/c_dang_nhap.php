<?php
session_start();
class C_dang_nhap
{
    public function dang_nhap()
    {
        include("./models/m_khach_hang.php");
        $m_khach_hang= new M_khach_hang();
        if(isset($_POST['btnDangNhap'])){
            $email=$_POST['email'];
            $mat_khau=$_POST['mat_khau'];
            $kq=$m_khach_hang->Doc_khach_hang_theo_email_pass($email,$mat_khau);
            if($kq){
                if ($kq['isBlock'] == 1) {
                    $_SESSION['checkBlock'] = 'Tài khoản đã bị khóa!';
                }
                else{
                    $_SESSION['hoTen']=$kq['ten_khach_hang'];
                    $_SESSION['makh']=$kq['ma_khach_hang'];
                    $_SESSION['email']=$kq['email'];
                    $_SESSION['sdt']=$kq['dien_thoai'];
                    if(isset($_SESSION['giohang'])){
                        header('Location: khach-hang.php');
                    }
                    else{
                        header('Location: .');
                    }
                }
            }
            else{
                echo "<script>alert('Thông tin đăng nhập không hợp lệ')</script>";
            }
        }
        include("c_data_contact.php");
        $title = "Đăng Nhập";
        $view = "./views/v_dang_nhap.php";
        require_once "./views/layout.php";
    }
    
    public function dang_xuat()
    {
        session_destroy();
        header('Location: .');
    }
}
