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

    public function GetAllDescDate(){
        return $this->sachDAO->GetAllDescDate();
    }

    public function GetSachBestSeller(){
        return $this->sachDAO->GetSachBestSeller();
    }

    public function GetSachNew(){
        return $this->sachDAO->GetSachNew();
    }

    public function DemSoSach(){
        return $this->sachDAO->DemSoSach();
    }

    public function DemTatCaSach(){
        return $this->sachDAO->DemTatCaSach();
    }

    public function GetAllowLimit($start, $limit){
        return $this->sachDAO->GetAllowLimit($start,$limit);
    }

    public function GetAllAllowLimit($start, $limit){
        return $this->sachDAO->GetAllAllowLimit($start,$limit);
    }

    //GetByID
    public function GetByID($id){
        return $this->sachDAO->GetByID($id);
    }
    //getBymaloai sach
    public function GetByMaLoai($maL){
        return $this->sachDAO->GetByMaLoai($maL);
    }

    //GetByNXB sach
    public function GetByNXB($maNXB){
        return $this->sachDAO->GetByNXB($maNXB);
    }

    // GetAllBook By KeyWord
    public function GetBookByKeyWord($book){
        return $this->sachDAO->GetBookByKeyWord($book);
    }
    // GetAllBook By KeyWord Cho Admin
    public function GetBookByKeyWordForAdmin($book){
        return $this->sachDAO->GetBookByKeyWordForAdmin($book);
    }

    public function GetBySearchAdvange($loaisach, $nxb, $giamin, $giamax){
        return $this->sachDAO->GetBySearchAdvange($loaisach, $nxb, $giamin, $giamax);
    }
}
