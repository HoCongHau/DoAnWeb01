<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 9-12-2018
 * Time: 2:15 PM
 */

class TacGiaDTO{
    var $MaTacGia;
    var $TenTacGia;
    var $NgaySinh;
    var $TieuSu;
    var $BiXoa;

    public function __construct()
    {
        $this->MaTacGia="";
        $this->TenTacGia="";
        $this->NgaySinh="";
        $this->TieuSu="";
        $this->BiXoa=0;
    }
}