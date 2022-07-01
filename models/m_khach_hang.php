<?php
require_once("database.php");
class M_khach_hang extends database
{
  public function Them_khach_hang($ten_kh,$phai,$email,$dia_chi,$dien_thoai,$mat_khau){
    $bm = md5($mat_khau);
    $sql="INSERT INTO khach_hang values(NULL, '$ten_kh','$phai','$email','$dia_chi','$dien_thoai', '$bm', 0)";
    return $this->execute($sql);
  }
  public function Doc_khach_hang_theo_email_pass($email,$mk)
  {
    $bm = md5($mk);
    $sql="select * from khach_hang where email='$email' and matKhau='$bm'";
		return $this->loadRow($sql);
  }
    public function Doc_khach_hang_theo_ma_kh($ma_kh)
  {
    $sql="select * from khach_hang where ma_khach_hang=$ma_kh";
    return $this->loadRow($sql);
  }
   public function Sua_khach_hang($ten_kh,$phai,$dia_chi,$dien_thoai,$ma_kh)
	{
		$sql="UPDATE khach_hang set ten_khach_hang='$ten_kh',phai='$phai',dia_chi='$dia_chi',dien_thoai='$dien_thoai' where ma_khach_hang=$ma_kh";
    $this->execute($sql);
    return $this->getLastId();
	}
}
?>
