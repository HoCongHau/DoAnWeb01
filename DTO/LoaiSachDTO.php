<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 5:00 AM
 */

class LoaiSachDTO{
    var $MaLoaiSach;
    var $TenLoaiSach;
    var $BiXoa;

    public function __construct()
    {
        $this->MaLoaiSach=0;
        $this->TenLoaiSach="";
        $this->BiXoa=0;
    }
}
