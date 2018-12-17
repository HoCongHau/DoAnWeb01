<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 4:48 PM
 */
class ChiTietDonDatHangBUS
{
    var $ChiTietDonDatHangDAO;
    public function __construct()
    {
        $this->ChiTietDonDatHangDAO=new ChiTietDonDatHangDAO();
    }

    public function CreatID()
    {
        return $this->ChiTietDonDatHangDAO->CreatID();
    }
    public function Insert($ChiTiet)
    {
        return $this->ChiTietDonDatHangDAO->Insert($ChiTiet);
    }
}