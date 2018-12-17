<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 4:44 PM
 */
class ChiTietDonDatHangDTO{
    var $MaChiTietDonDatHang;
    var $SoLuong;
    var $GiaBan;
    var $MaDonDatHang;
    var $MaSach;

    public function __construct()
    {
        $this->MaChiTietDonDatHang="";
        $this->SoLuong=0;
        $this->GiaBan=0;
        $this->MaDonDatHang="";
        $this->MaSach=0;
    }
}