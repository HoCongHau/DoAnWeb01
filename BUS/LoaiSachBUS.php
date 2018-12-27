<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 5:11 AM
 */
include(__DIR__."./../DAO/LoaiSachDAO.php");
class LoaiSachBUS{
    
    var $loaiSachDAO;
    
    public function __construct()
    {
        $this->loaiSachDAO=new LoaiSachDAO();
    }

    public function GetAll(){
        return $this->loaiSachDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->loaiSachDAO->GetAllAvailable();
    }

    public function GetWithName($maLoaiSach){
        return $this->loaiSachDAO->GetWithName($maLoaiSach);
    }

    public function GetAllByKeyWord($key){
        return $this->loaiSachDAO->GetAllByKeyWord($key);
    }

    public function DeleteLoaiSachById($id){
        return $this->loaiSachDAO->DeleteLoaiSachById($id);
    }

    public function EditById($id, $ten){
        return $this->loaiSachDAO->EditById($id, $ten);
    }

    // đánh dấu xoá loại sản phẩm
    public function SetDelete($id){
        return $this->loaiSachDAO->SetDelete($id);
    }
    // huỷ đánh dấu xoá loại sản phẩm
    public function UnSetDelete($id){
        return $this->loaiSachDAO->UnSetDelete($id);
    }

    public function Insert($tenLoaiSanPham){
        return $this->loaiSachDAO->Insert($tenLoaiSanPham);
    }
}
