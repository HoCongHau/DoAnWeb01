<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 7:26 PM
 */

class SachDTO{
    var $MaSach;
    var $TenSach;
    var $HinhURL;
    var $GiaSach;
    var $NgayNhap;
    var $SoLuongTon;
    var $SoLuongBan;
    var $SoLuocXem;
    var $MoTa;
    var $BiXoa;
    var $MaLoaiSach;
    var $MaNhaXuatBan;

    public function __construct()
    {
        $this->MaSach=0;
        $this->TenSach="";
        $this->HinhURL="";
        $this->GiaSach=0;
        $this->NgayNhap="";
        $this->SoLuongTon=0;
        $this->SoLuongBan =0;
        $this->SoLuocXem=0;
        $this->MoTa="";
        $this->BiXoa=0;
        $this->MaLoaiSach=0;
        $this->MaNhaXuatBan=0;
    }
}