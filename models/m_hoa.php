<?php
require_once("database.php");
class M_hoa extends database
{
    function doc_tat_ca_hoa($vt=-1,$limit=-1){
        $sql = "select * from hoa";
        if($vt>=0 && $limit>0){
			       $sql.=" limit $vt,$limit";
        }
        return $this->loadAllRows($sql);
    }
    function doc_ds_loai_hoa($ma_loai,$vt=-1,$limit=-1){
      $sql = "select * from hoa where Maloai =".$ma_loai;
      if($vt>=0 && $limit>0){
           $sql.=" limit $vt,$limit";
      }
      return $this->loadAllRows($sql);
    }
    function doc_theo_ma_loai_gia($maloai,$gia_1,$gia_2,$vt=-1,$limit=-1){
      $sql = "select * from hoa where GiaKhuyenMai>=".$gia_1." and GiaKhuyenMai<=".$gia_2." and Maloai =".$maloai;
      if($vt>=0 && $limit>0){
           $sql.=" limit $vt,$limit";
      }
      return $this->loadAllRows($sql);
    }
    function doc_theo_gia($gia_1,$gia_2,$vt=-1,$limit=-1){
      $sql = "SELECT * FROM hoa where GiaKhuyenMai>=".$gia_1." and GiaKhuyenMai<=".$gia_2;
      if($vt>=0 && $limit>0){
           $sql.=" limit $vt,$limit";
      }
      return $this->loadAllRows($sql);
    }
    function doc_hoa_theo_ma($ma_hoa){
      $sql="select * from hoa inner join loai_hoa on hoa.MaLoai =loai_hoa.MaLoai where MaHoa= $ma_hoa";
      return $this->loadRow($sql);
    }
    function doc_loai_hoa(){
        $sql = "select * from loai_hoa";

        return $this->loadAllRows($sql);
    }
    function doc_ten_loai_hoa($maloai) {
      $sql="select TenLoai from loai_hoa where MaLoai=$maloai";
      return $this->loadRow($sql);
    }
    function CapNhapSoLuongHoa($sl,$mahoa){
      $sql = "UPDATE hoa SET SoLuongSP='$sl' WHERE MaHoa='$mahoa'";
      return $this->execute($sql);
    }
}
?>
