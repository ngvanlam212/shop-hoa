<?php
require_once("database.php");
class M_chi_tiet_hoa extends database
{
    public function doc_theo_ma_hoa($id)
    {
        $sql="select h.*, lh.TenLoai from hoa h INNER JOIN loai_hoa lh ON lh.MaLoai = h.MaLoai WHERE h.MaHoa =$id";
        return $this->loadRow($sql);
    }
    public function doc_hoa_cung_loai($maLoai, $id)
    {
        $sql = "select * from hoa where MaLoai = $maLoai and MaHoa != $id limit 0,4";
        return $this->loadAllRows($sql);
    }
}
