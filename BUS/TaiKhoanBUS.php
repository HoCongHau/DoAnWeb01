<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 08-12-2018
 * Time: 11:41 PM
 */
class TaiKhoanBUS{
    var $taiKhoanDAO;

    public function __construct()
    {
        $this->taiKhoanDAO=new TaiKhoanDAO();
    }

    public function GetAll(){
        return $this->taiKhoanDAO->GetAll();
    }

    public function DeleteByID($id){
        return $this->taiKhoanDAO->DeleteByID($id);
    }

    public function Update($taiKhoan){
        return $this->Update($taiKhoan);
    }
}
