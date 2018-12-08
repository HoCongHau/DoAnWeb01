<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 5:33 AM
 */

class NhaXuatBanDTO{
    var $MaNhaXuatBan;
    var $TenNhaXuatBan;
    var $LogoURL;
    var $BiXoa;

    public function __construct()
    {
        $this->MaNhaXuatBan=0;
        $this->TenNhaXuatBan="";
        $this->LogoURL="";
        $this->BiXoa=0;
    }
}