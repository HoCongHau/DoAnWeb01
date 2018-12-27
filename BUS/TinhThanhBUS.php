<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 9-12-2018
 * Time: 1:58 PM
 */
include(__DIR__."./../DAO/TinhThanhDAO.php");
class TinhThanhBUS{
    
    var $tinhThanhDAO;
    
    public function __construct()
    {
        $this->tinhThanhDAO=new TinhThanhDAO();
    }

    public function GetAll(){
        return $this->tinhThanhDAO->GetAll();
    }
}
