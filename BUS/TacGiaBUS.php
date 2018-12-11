<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 9-12-2018
 * Time: 2:24 PM
 */

class TacGiaBUS{
    
    var $tacGiaDAO;
    
    public function __construct()
    {
        $this->tacGiaDAO=new TacGiaDAO();
    }

    public function GetAll(){
        return $this->tacGiaDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->tacGiaDAO->GetAllAvailable();
    }

    public function GetByID($id){
        return $this->tacGiaDAO->GetByID($id);
    }
    public function GetNameForm($idS)
    {
        return $this->tacGiaDAO->GetNameForm($idS);
    }
}
