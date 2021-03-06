<?php
require_once("database.php");
class M_index extends database
{
    public function dem_hoa()
    {
        $sql = "select COUNT(*) as count from hoa";
        return $this->loadRow($sql);
    }
    public function dem_loai_hoa()
    {
        $sql = "select COUNT(*) as count from loai_hoa";
        return $this->loadRow($sql);
    }

    public function hoa_het_hang()
    {
        $sql = "select COUNT(*) as count from hoa where SoLuongSP = 0";
        return $this->loadRow($sql);
    }
    public function ds_hoa_het_hang()
    {
        $sql = "select *  from hoa where SoLuongSP = 0";
        return $this->loadAllRows($sql);
    }
    
    public function so_hoa_don_da_dat_trong_ngay()
    {
        $sql = "select * from hoa_don  WHERE day(ngay_dat) = day(curdate())";
       return $this->loadAllRows($sql);
    }
    public function so_hoa_don_chua_duyet_trong_ngay()
    {
        $sql = "select * from hoa_don WHERE day(ngay_dat) = day(curdate()) and trang_thai = 'Chưa xử lý'";
        return $this->loadAllRows($sql);
    }
    public function sua_sl($maHoa,$sl)
    {
        $sql = "UPDATE hoa SET ThoiGian=now(),SoLuongSP='$sl' WHERE MaHoa='$maHoa'";
        return $this->execute($sql);
    }

}
