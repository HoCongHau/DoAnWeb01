<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 4:48 PM
 */
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
}