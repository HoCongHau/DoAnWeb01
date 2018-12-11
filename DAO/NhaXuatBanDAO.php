<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 7-12-2018
 * Time: 6:04 PM
 */

include_once(__DIR__."/DB.php");
class NhaXuatBanDAO extends DB{
    // get all chi danh cho admin
    public function GetAll(){
        $sql = "Select MaNhaXuatBan, TenNhaXuatBan, LogoURL, BiXoa from nhaxuatban";
        $result = $this->ExecuteQuery($sql);
        $lstNXB = array();
        while($row = mysqli_fetch_array($result)){
            $nhaxuatban = new NhaXuatBanDAO();
            $nhaxuatban->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $nhaxuatban->TenNhaXuatBan = $row["TenNhaXuatBan"];
            $nhaxuatban->LogoURL = $row["LogoURL"];
            $nhaxuatban->BiXoa=$row["BiXoa"];
            $lstNXB[]=$nhaxuatban;
        }
        return $lstNXB;
    }

    // get cac loai sach chua bi xoa (dung cho user)
    public function GetAllAvailable(){
        $sql = "Select MaNhaXuatBan, TenNhaXuatBan, LogoURL, BiXoa from nhaxuatban where BiXoa=0";
        $result = $this->ExecuteQuery($sql);
        $lstNXB = array();
        while($row = mysqli_fetch_array($result)){
            $nhaxuatban = new NhaXuatBanDAO();
            $nhaxuatban->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $nhaxuatban->TenNhaXuatBan = $row["TenNhaXuatBan"];
            $nhaxuatban->LogoURL = $row["LogoURL"];
            $nhaxuatban->BiXoa=$row["BiXoa"];
            $lstNXB[]=$nhaxuatban;
        }
        return $lstNXB;
    }

    //lay tên nhà xuất bản
    public function GetName($id)
    {
        $sql="SELECT TenNhaXuatBan FROM NHAXUATBAN WHERE MaNhaXuatBan='$id'";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        return $row['TenNhaXuatBan'];
    }
}