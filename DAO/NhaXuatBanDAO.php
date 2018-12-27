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
            $nhaxuatban = new NhaXuatBanDTO();
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
            $nhaxuatban = new NhaXuatBanDTO();
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

    // get by id
    public function GetByID($id){
        $sql = "Select TenNhaXuatBan ,LogoURL from nhaxuatban where MaNhaXuatBan='$id'";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        $nxb =  new NhaXuatBanDTO();
        $nxb->TenNhaXuatBan = $row["TenNhaXuatBan"];
        $nxb->LogoURL = $row["LogoURL"];
        return $nxb;
    }

    // get all chi danh cho admin theo keyword
    public function GetAllByKeyWord($key){
        $sql = "Select MaNhaXuatBan, TenNhaXuatBan, LogoURL, BiXoa from nhaxuatban where TenNhaXuatBan LIKE N'%$key%'";
        $result = $this->ExecuteQuery($sql);
        $lstNXB = array();
        while($row = mysqli_fetch_array($result)){
            $nhaxuatban = new NhaXuatBanDTO();
            $nhaxuatban->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $nhaxuatban->TenNhaXuatBan = $row["TenNhaXuatBan"];
            $nhaxuatban->LogoURL = $row["LogoURL"];
            $nhaxuatban->BiXoa=$row["BiXoa"];
            $lstNXB[]=$nhaxuatban;
        }
        return $lstNXB;
    }

    // xoá nhà xuất bản
    public function DeleteById($id){
        $sql = "DELETE  from NhaXuatBan where MaNhaXuatBan= $id";
        return $this->ExecuteQuery($sql);
    }

    // chỉnh sửa nhà xuất bản
    public function EditById($id, $tenNXB, $tenHinh){
        $sql = "UPDATE nhaxuatban SET TenNhaXuatBan= '$tenNXB' , LogoURL= '$tenHinh' WHERE MaNhaXuatBan='$id'"; 
        return $this->ExecuteQuery($sql);
    }

    // đánh dấu xoá nhà xuất bản
    public function SetDelete($id){
        $sql = "UPDATE NhaXuatBan set BiXoa = 1 where MaNhaXuatBan= $id";
        return $this->ExecuteQuery($sql);
    }

    // huỷ đánh dấu xoá nhà xuất bản
    public function UnSetDelete($id){
        $sql = "UPDATE NhaXuatBan set BiXoa = 0 where MaNhaXuatBan= $id";
        return $this->ExecuteQuery($sql);
    }

    //  thêm nhà xuất bản
    public function Insert($tenNXB, $hinhURL){
        $sql = "INSERT INTO NhaXuatBan(TenNhaXuatBan, LogoURL) VALUES ('$tenNXB', '$hinhURL')";
        return $this->ExecuteQuery($sql);
    }
}