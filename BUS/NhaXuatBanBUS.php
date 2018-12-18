<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 6:04 AM
 */

class NhaXuatBanBUS{
    
    var $nhaXuatBanDAO;
    
    public function __construct()
    {
        $this->nhaXuatBanDAO=new NhaXuatBanDAO();
    }

    public function GetAll(){
        return $this->nhaXuatBanDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->nhaXuatBanDAO->GetAllAvailable();
    }

    public function GetByID($id){
        return $this->nhaXuatBanDAO->GetByID($id);
    }
    //lay tên nhà xuất bản
    public function GetName($id){
        return $this->nhaXuatBanDAO->GetName($id);
    }

    public function GetAllByKeyWord($key){
        return $this->nhaXuatBanDAO->GetAllByKeyWord($key);
    }

    // xoá nhà xuất bản
    public function DeleteById($id){
        return $this->nhaXuatBanDAO->DeleteById($id);
    }

    public function EditById($id, $tenNXB, $tenHinh){
        return $this->nhaXuatBanDAO->EditById($id, $tenNXB, $tenHinh);
    }

    // đánh dấu xoá nhà xuất bản
    public function SetDelete($id){
        return $this->nhaXuatBanDAO->SetDelete($id);
    }

    // huỷ đánh dấu xoá nhà xuất bản
    public function UnSetDelete($id){
        return $this->nhaXuatBanDAO->UnSetDelete($id);
    }

    //  thêm nhà xuất bản
    public function Insert($tenNXB, $hinhURL){
        return $this->nhaXuatBanDAO->Insert($tenNXB, $hinhURL);
    }
}
