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

    // get ten loai khi truyen vao id
    public function GetWithName($maLoaiSanPham){
        $sql = "Select TenLoaiSach from loaisach where MaLoaiSach = $maLoaiSanPham";
        $result = $this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        $loaiSach = new LoaiSachDAO();
        $loaiSach->TenLoaiSach = $row["TenLoaiSach"];
        return $loaiSach;
    } 

    // get all loai sach theo key word search
    public function GetAllByKeyWord($key){
        $sql = "Select MaLoaiSach, TenLoaiSach, BiXoa from loaisach where TenLoaiSach LIKE '%$key%' ";
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