<?php
require_once("database.php");
class M_loai_hoa extends database
{
    function doc_tat_ca_loai_hoa(){
        $sql = "select * from loai_hoa";
        return $this->loadAllRows($sql);
    }
    function update_loai_hoa($tenLoai,$maLoai){
        $sql = "UPDATE loai_hoa SET TenLoai='$tenLoai' WHERE MaLoai=$maLoai";
        return $this->execute($sql);
    }
    function kiem_tra_loai_hoa($tenLoai){
        $sql = "SELECT TenLoai FROM loai_hoa WHERE TenLoai='$tenLoai";
        return $this->loadRow($sql);
    }
}
?>