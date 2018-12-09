<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:08 AM
 */
class DonHangDAO extends DB
{
    public function GetAll(){
        $sql="SELECT MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan,MaTinhTrang FROM DONDATHANG";
        $resutl=$this->ExecuteQuery($sql);
        $lstDonDatHang=array();
        while ($row=mysqli_fetch_array($resutl))
        {
            $donHang=new DonHangDTO();
            $donHang->MaDonDatHang=$row['MaDonDatHang'];
            $donHang->NgayLap=$row['NgayLap'];
            $donHang->TongThanhTien=$row['TongThanhTien'];
            $donHang->MaTaiKhoan=$row['MaTaiKhoan'];
            $donHang->MaTinhTrang=$row['MaTinhTrang'];

            $lstDonDatHang[]=$donHang;
        }
        return $lstDonDatHang;
    }

}