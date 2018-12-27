<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 4:48 PM
 */
include_once(__DIR__."/DB.php");
class ChiTietDonDatHangDAO extends DB
{
    public function CreatID(){
        $sql="SELECT MAX(MaChiTietDonDatHang) AS MaChiTietDonDatHang From ChiTietDonDatHang";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row==null){
            return "CT1";
        }

        $temp=$row["MaChiTietDonDatHang"];
        $ma=substr($temp,2);
        $ma=(int)$ma+1;
        return "CT".$ma;
    }

    public function Insert($ChiTiet)
    {
        $sql ="Insert into ChiTietDonDatHang(MaChiTietDonDatHang,SoLuong,GiaBan,MaDonDatHang,MaSach)
            values ('$ChiTiet->MaChiTietDonDatHang','$ChiTiet->SoLuong','$ChiTiet->GiaBan','$ChiTiet->MaDonDatHang','$ChiTiet->MaSach')";
        $result=$this->ExecuteQuery($sql);
        return $result;
    }

    // get by ma don dat hang
    public function GetByMaDonHang($maDonDatHang){
        $sql = "Select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSach 
                from ChiTietDonDatHang where MaDonDatHang= '$maDonDatHang'";
        $result = $this->ExecuteQuery($sql);
        $lstCTDH = array();
        while($row = mysqli_fetch_array($result)){

        $chiTiet = new ChiTietDonDatHangDTO();
        $chiTiet->MaChiTietDonDatHang = $row["MaChiTietDonDatHang"];
        $chiTiet->SoLuong = $row["SoLuong"];
        $chiTiet->GiaBan = $row["GiaBan"];
        $chiTiet->MaDonDatHang = $row["MaDonDatHang"];
        $chiTiet->MaSach = $row["MaSach"];

        $lstCTDH[]=$chiTiet;
        }
        return $lstCTDH;
    }

    // get all chi danh cho admin
    public function GetAll(){
        $sql = "Select MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSach from chitietdondathang";
        $result = $this->ExecuteQuery($sql);
        $lstCTDH = array();
        while($row = mysqli_fetch_array($result)){
            $chiTiet = new ChiTietDonDatHangDTO();
            $chiTiet->MaChiTietDonDatHang = $row["MaChiTietDonDatHang"];
            $chiTiet->SoLuong = $row["SoLuong"];
            $chiTiet->GiaBan = $row["GiaBan"];
            $chiTiet->MaDonDatHang = $row["MaDonDatHang"];
            $chiTiet->MaSach = $row["MaSach"];
            $lstCTDH[]=$chiTiet;
        }
        return $lstCTDH;
    }
}