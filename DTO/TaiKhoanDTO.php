<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 08-12-2018
 * Time: 11:29 PM
 */
class TaiKhoanDTO{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $MatKhau;
    var $TenHienThi;
    var $NgaySinh;
    var $DiaChi;
    var $DienThoai;
    var $Email;
    var $BiXoa;
    var $MaLoaiTaiKhoan;

    public  function  __construct()
    {
        $this->MaTaiKhoan=0;
        $this->TenDangNhap="";
        $this->MatKhau="";
        $this->TenHienThi="";
        $this->NgaySinh=null;
        $this->DiaChi="";
        $this->DienThoai="";
        $this->Email="";
        $this->BiXoa=0;
        $this->MaLoaiTaiKhoan=222;
    }
}