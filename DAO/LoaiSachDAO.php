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

    // xoá loai sach theo id
    public function DeleteLoaiSachById($id){
        $sql = "DELETE  from loaisach where MaLoaiSach= $id";
        return  $this->ExecuteQuery($sql);
    }

    // sửa loại sách
    public function EditById($id, $ten){
        $sql = "UPDATE loaisach SET TenLoaiSach='$ten' WHERE MaLoaiSach = '$id' ";
        return  $this->ExecuteQuery($sql);
    }

    // đánh dấu xoá loại sản phẩm
    public function SetDelete($id){
        $sql = "UPDATE loaisach set BiXoa = 1 where MaLoaiSach= $id";
        return  $this->ExecuteQuery($sql);
    }
    // huỷ đánh dấu xoá loại sản phẩm
    public function UnSetDelete($id){
        $sql = "UPDATE loaisach set BiXoa = 0 where MaLoaiSach= $id";
        return $this->ExecuteQuery($sql);
    }

    // thêm loại sản phẩm
    public function Insert($tenLoaiSanPham){
        $sql = "INSERT INTO LoaiSach(TenLoaiSach) 
        VALUES ('$tenLoaiSanPham')";
        return $this->ExecuteQuery($sql);
    }
}