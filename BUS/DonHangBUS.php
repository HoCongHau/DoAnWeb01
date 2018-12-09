<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:27 AM
 */
class DonHangBUS
{
    var $donHangDAO;
    public function __construct()
    {
        $this->donHangDAO=new DonHangDAO();
    }

    //get all
    public function GetAll(){
        return $this->donHangDAO->GetAll();
    }


}