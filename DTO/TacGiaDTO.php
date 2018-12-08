<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 8:15 PM
 */

class TacGiaDTO{
    var $MaTacGia;
    var $TenTacGia;
    var $NgaySinh;
    var $TieuSu;

    public function __construct()
    {
        $this->MaTacGia="";
        $this->TenTacGia="";
        $this->NgaySinh="";
        $this->TieuSu="";
    }
}