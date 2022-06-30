<?php
require_once("database.php");
class M_tin_tuc extends database
{
    public function doc_tat_ca_su_kien()
    {
        $sql = "select * from tin_tuc";
        return $this->loadAllRows($sql);
    }
    public function chi_tiet_tt($ma_tin)
    {
        $sql="select tt.*, lt.TenLoaiTin from tin_tuc tt INNER JOIN loai_tin lt ON lt.MaLoaiTin = tt.MaLoaiTin where tt.MaTT=$ma_tin";
        return $this->loadRow($sql);
    }
    public function doc_tin_tuc_cung_loai($maLoaiTin, $ma_tin)
    {
        $sql = "select * from tin_tuc where MaLoaiTin = $maLoaiTin and MaTT != $ma_tin limit 0,8";
        return $this->loadAllRows($sql);
    }
}
