<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 8:19 PM
 */

class TacGiaBUS{
    var $tacGiaDAO;

    public function __construct()
    {
        $this->tacGiaDAO= new TacGiaDAO();
    }

    public function GetAll(){
        return $this->tacGiaDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->tacGiaDAO->GetAllAvailable();
    }
}