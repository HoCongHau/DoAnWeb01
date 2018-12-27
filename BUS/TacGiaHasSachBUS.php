<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 11-12-2018
 * Time: 2:14 AM
 */
include(__DIR__."./../DAO/TacGiaHasSachDAO.php");
class TacGiaHasSachBUS{
    var $tacGiaHasSachDAO;

    public function __construct()
    {
        $this->tacGiaHasSachDAO=new TacGiaHasSachDAO();
    }

    public function GetAll($id){
        return $this->tacGiaHasSachDAO->GetAll($id);
    }
}