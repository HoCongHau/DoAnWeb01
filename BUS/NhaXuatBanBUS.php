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

    //lay tên nhà xuất bản
    public function GetName($id){
        return $this->nhaXuatBanDAO->GetName($id);
    }
}
