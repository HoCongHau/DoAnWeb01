<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 5:04 PM
 */

include_once(__DIR__."/DB.php");
class LoaiSachDAO extends DB{
    // get all chi danh cho admin
    public function GetAll(){
        $sql = "Select MaLoaiSach, TenLoaiSach, BiXoa from loaisach";
        $result = $this->ExecuteQuery($sql);
        $lstLoaiSach = array();
        while($row = mysqli_fetch_array($result)){
            $loaiSach = new LoaiSachDAO();
            $loaiSach->MaLoaiSach = $row["MaLoaiSach"];
            $loaiSach->TenLoaiSach = $row["TenLoaiSach"];
            $loaiSach->BiXoa=$row["BiXoa"];
            $lstLoaiSach[]=$loaiSach;
        }
        return $lstLoaiSach;
    }

    // get cac loai sach chua bi xoa (dung cho user)
    public function GetAllAvailable(){
        $sql = "Select MaLoaiSach, TenLoaiSach, BiXoa from loaisach where BiXoa = 0";
        $result = $this->ExecuteQuery($sql);
        $lstLoaiSach = array();
        while($row = mysqli_fetch_array($result)){
            $loaiSach = new LoaiSachDAO();
            $loaiSach->MaLoaiSach = $row["MaLoaiSach"];
            $loaiSach->TenLoaiSach = $row["TenLoaiSach"];
            $loaiSach->BiXoa=$row["BiXoa"];
            $lstLoaiSach[]=$loaiSach;
        }
        return $lstLoaiSach;
    }
}