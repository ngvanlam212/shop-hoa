<?php
require_once("database.php");
class M_thong_tin extends database
{
    function doc_tat_ca_thong_tin(){
        $sql = "select * from thong_tin ORDER BY ThoiGian DESC";
        return $this->loadAllRows($sql);
    }
    function doc_thong_tin_theo_id($id){
        $sql = "SELECT * FROM thong_tin WHERE id=$id";
        return $this->loadRow($sql);
    }
    function update_thong_tin($tieuDe,$hinh,$duongDan,$hanhDong,$id){
        $sql = "UPDATE thong_tin SET TieuDe='$tieuDe',Hinh='$hinh',DuongDan='$duongDan',HanhDong='$hanhDong',ThoiGian=now() WHERE id=$id";
        return $this->execute($sql);
    }
    public function them_thong_tin($tieuDe,$hinh,$duongDan,$hanhDong){
      $sql = "INSERT INTO thong_tin(TieuDe,Hinh,DuongDan,HanhDong,ThoiGian) VALUES ('$tieuDe', '$hinh', '$duongDan','$hanhDong', now())";
      return $this->execute($sql);
    }
}
?>
