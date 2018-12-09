<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 08-12-2018
 * Time: 7:31 PM
 */
include_once(__DIR__."/DB.php");
class SachDAO extends DB{
    // get all sach (cho admin)
    public function GetAll(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // get all ma chua bi xoa sach (cho user)
    public function GetAllAvailable(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // lay 10 san pham ban chay nhat
    public function GetSachBestSeller(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0 
        ORDER by SoLuongBan DESC 
        LIMIT 10";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // lay 10 san pham moi nhat
    public function GetSachNew(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0 
        ORDER by NgayNhap DESC 
        LIMIT 10";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }


    public function DemSoSach(){
        $sql = "Select count(MaSach) as Total from sach where BiXoa=0";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_assoc($result);
        return $row["Total"];
    }

    public function GetAllowLimit($start, $limit){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0
        LIMIT $start, $limit";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }


}