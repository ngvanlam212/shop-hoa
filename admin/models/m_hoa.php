<?php
require_once("database.php");
class M_hoa extends database
{
    function doc_tat_ca_hoa(){
        if(isset($_GET['loai_hoa'])){
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai where h.Maloai =".$_GET['loai_hoa'];
            $sql .= " ORDER BY h.ThoiGian DESC";
        }else{
            $sql = "select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh on lh.MaLoai = h.MaLoai ORDER BY ThoiGian DESC";
        }
        return $this->loadAllRows($sql);
    }
    function update_hoa($tenHoa,$gia,$giakm,$thanhPhan,$noiDung,$hinh,$maLoai,$sl,$maHoa){
        $sql = "UPDATE hoa SET TenHoa='$tenHoa',
         Gia='$gia',GiaKhuyenMai='$giakm', ThanhPhan='$thanhPhan', NoiDung='$noiDung',
         Hinh='$hinh', MaLoai='$maLoai',ThoiGian=now(),SoLuongSP='$sl' WHERE MaHoa='$maHoa'";
        return $this->execute($sql);
    }
    function doc_hoa_theo_ma($maHoa){
        $sql = "SELECT * FROM hoa WHERE MaHoa=$maHoa";
        return $this->loadRow($sql);
    }
    public function them_hoa($tenHoa, $gia,$gia_khuyen_mai, $thanhPhan, $noiDung, $hinh, $maLoai,$sl){
      $sql = "INSERT INTO hoa(TenHoa,Gia,GiaKhuyenMai,ThanhPhan,NoiDung,Hinh,MaLoai,ThoiGian,SoLuongSP) VALUES ('$tenHoa','$gia','$gia_khuyen_mai', '$thanhPhan', '$noiDung', '$hinh', '$maLoai', now(),'$sl')";
      return $this->execute($sql);
    }
}
?>
