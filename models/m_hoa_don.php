<?php
require_once("database.php");
class M_hoa_don extends database
{
    public function luu_hoa_don($maKH, $tongtt)
    {
        $sql="INSERT INTO  hoa_don values(null,$maKH,NOW(),'Chưa xử lý',$tongtt)";
        $result = $this->execute($sql);
        if ($result) {
            return $this->getLastId();
        }
    }
    public function luu_chi_tiet_hoa_don($maHoa, $sl, $maHoaDon)
    {
        $sql="INSERT INTO  chi_tiet_hoa_don values(null,$maHoa,$sl, $maHoaDon)";
        return $this->execute($sql);
    }
}
