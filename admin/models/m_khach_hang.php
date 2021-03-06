<?php
require_once("database.php");
class M_khach_hang extends database
{
    function doc_tat_ca_khach_hang(){
        $sql = "SELECT khach_hang.*, sum(hoa_don.tong_thanh_tien) as tong_chi_tieu, count(hoa_don.ma_hoa_don) as don_hang, max(hoa_don.ma_hoa_don) as don_hang_gan_nhat fROM khach_hang join hoa_don on hoa_don.ma_khach_hang =khach_hang.ma_khach_hang group by hoa_don.ma_khach_hang";
        return $this->loadAllRows($sql);
    }

    function block_khach_hang($id, $isblock) {
        $sql = "UPDATE khach_hang SET isBlock = $isblock where ma_khach_hang = $id";
        return $this->execute($sql);
    }
}
?>