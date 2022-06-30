<?php
require_once("database.php");
class M_tin_Tuc extends database
{
    function doc_tat_ca_tin_tuc(){
        unset($_SESSION['thongBao']);
        unset($_SESSION['thongBaoThanhCong']);
        $sql = "select tt.*, lt.TenLoaiTin from tin_tuc tt INNER JOIN loai_tin lt ON lt.MaLoaiTin = tt.MaLoaiTin ORDER BY tt.ThoiGian DESC";
        return $this->loadAllRows($sql);
    }
    function update_tin_tuc($tenTT,$noiDung,$hinh,$maLoaiTin,$maTT){
        $sql = "UPDATE tin_tuc SET TenTT='$tenTT',NoiDung='$noiDung',Hinh='$hinh',ThoiGian=now(),MaLoaiTin=$maLoaiTin WHERE MaTT=$maTT";
        return $this->execute($sql);
    }
    function doc_loai_tin(){
        $sql = "SELECT * FROM loai_tin";
        return $this->loadAllRows($sql);
    }
    function doc_tin_tuc_theo_ma($maTT){
        $sql = "SELECT * FROM tin_tuc WHERE MaTT=$maTT";
        return $this->loadRow($sql);
    }
    public function them_tin_tuc($tenTT,$noiDung,$hinh,$loaiTin){
      $sql = "INSERT INTO tin_tuc(TenTT,NoiDung,Hinh,ThoiGian,MaLoaiTin) VALUES ('$tenTT', '$noiDung', '$hinh', now(), '$loaiTin')";
      return $this->execute($sql);
    }
}
?>
