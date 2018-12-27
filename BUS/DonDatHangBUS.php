<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:27 AM
 */
include(__DIR__."./../DAO/DonDatHangDAO.php");
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

    public function EditByIDandStatus($id, $status){
        return $this->DonDatHangDAO->EditByIDandStatus($id, $status);
    }

    public function GetByID($id){
        return $this->DonDatHangDAO->GetByID($id);
    }
    public function GetAllByKeyWord($key){
        return $this->DonDatHangDAO->GetAllByKeyWord($key);
    }

    // xoá đơn đặt hàng
    public function DeleteById($id){
        return $this->DonDatHangDAO->DeleteById($id);
    }

    // đánh dấu xoá đơn đặt hàng
    public function SetDelete($id){
        return $this->DonDatHangDAO->SetDelete($id); 
    }

    // huỷ đánh dấu xoá đơn đặt hàng
    public function UnSetDelete($id){
        return $this->DonDatHangDAO->UnSetDelete($id);
    }

}