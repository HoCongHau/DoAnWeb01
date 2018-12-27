<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 08-12-2018
 * Time: 11:41 PM
 */
include(__DIR__."./../DAO/TaiKhoanDAO.php");
class TaiKhoanBUS{
    var $taiKhoanDAO;

    public function __construct()
    {
        $this->taiKhoanDAO=new TaiKhoanDAO();
    }

    public function GetAll(){
        return $this->taiKhoanDAO->GetAll();
    }

    public function GetById($id){
        return $this->taiKhoanDAO->GetById($id);
    }


    public function DeleteByID($id){
        return $this->taiKhoanDAO->DeleteByID($id);
    }

    public function Update($taiKhoan){
        return $this->taiKhoanDAO->Update($taiKhoan);
    }

    public function GetAllByKeyWord($key){
        return $this->taiKhoanDAO->GetAllByKeyWord($key);
    }

    // đánh dấu xoá tài khoản
    public function SetDelete($id){
        return $this->taiKhoanDAO->SetDelete($id);
    }

    // huỷ đánh dấu xoá tài khoản
    public function UnSetDelete($id){
        return $this->taiKhoanDAO->UnSetDelete($id);
    }

    // thêm tài khoản admin
    public function InsertAdmin($taiKhoan){
        return $this->taiKhoanDAO->InsertAdmin($taiKhoan);
    }

}
