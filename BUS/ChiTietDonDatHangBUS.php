<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 4:48 PM
 */
include(__DIR__."./../DAO/ChiTietDonDatHangDAO.php");
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

    public function GetByMaDonHang($maDonDatHang){
        return $this->ChiTietDonDatHangDAO->GetByMaDonHang($maDonDatHang);
    }

    public function GetAll(){
        return $this->ChiTietDonDatHangDAO->GetAll();
    }
}