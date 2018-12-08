<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 5:11 AM
 */

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
}
