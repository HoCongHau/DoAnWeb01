<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:09 AM
 */
class DonHangDTO{
    var $MaDonDatHang;
    var $NgayLap;
    var $TongThanhTien;
    var $MaTaiKhoan;
    var $MaTinhTrang;

    public function __construct()
    {
        $this->MaDonDatHang="";
        $this->NgayLap=null;
        $this->TongThanhTien=0;
        $this->MaTaiKhoan=0;
        $this->MaTinhTrang=0;
    }
}