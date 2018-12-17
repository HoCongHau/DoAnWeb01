<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:27 AM
 */
class DonDatHangBUS
{
    var $DonDatHangDAO;
    public function __construct()
    {
        $this->DonDatHangDAO=new DonDatHangDAO();
    }

    //get all
    public function GetAll(){
        return $this->DonDatHangDAO->GetAll();
    }

    public function Insert($donHang)
    {
        return $this->DonDatHangDAO->Insert($donHang);
    }


    public function CreatID(){
        return $this->DonDatHangDAO->CreatID();
    }

}