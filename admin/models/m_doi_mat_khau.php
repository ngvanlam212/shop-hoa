<?php
require_once("database.php");
class M_doi_mat_khau extends database
{
    function doi_mat_khau($matKhauMoi,$id,$matKhau){
        $sql = "UPDATE admin SET MatKhau = '$matKhauMoi' WHERE ID= $id and MatKhau = '$matKhau'";
        return $this->execute($sql);
    }
    function kiem_tra_mat_khau_cu($id, $matKhau){
        $sql ="SELECT MatKhau FROM admin WHERE ID=$id and MatKhau='$matKhau'";
        return $this->loadRow($sql);
    }
}
?>