<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 11-12-2018
 * Time: 2:06 AM
 */
include_once(__DIR__."/DB.php");
class TacGiaHasSachDAO extends DB{
    public function GetAll($id){
        $sql="Select TacGia_MaTacGia,Sach_MaSach
         from TacGia_has_Sach where Sach_MaSach='$id'";
        $result=$this->ExecuteQuery($sql);
        $lstSach=array();
        while ($row=mysqli_fetch_array($result)){
            $TGS=new TacGiaHasSachDTO();
            $TGS->MaTacGia=$row["TacGia_MaTacGia"];
            $TGS->MaSach=$row["Sach_MaSach"];
            $lstSach[]=$TGS;
        }
        return $lstSach;
    }
}