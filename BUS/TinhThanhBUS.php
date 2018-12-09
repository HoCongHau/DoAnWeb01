<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 9-12-2018
 * Time: 1:58 PM
 */

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
