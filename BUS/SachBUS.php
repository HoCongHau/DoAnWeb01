<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 7:37 AM
 */

class SachBUS{
    
    var $sachDAO;
    
    public function __construct()
    {
        $this->sachDAO=new SachDAO();
    }

    public function GetAll(){
        return $this->sachDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->sachDAO->GetAllAvailable();
    }

    public function GetSachBestSeller(){
        return $this->sachDAO->GetSachBestSeller();
    }

    public function GetSachNew(){
        return $this->sachDAO->GetSachNew();
    }
}
