<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 09-12-2018
 * Time: 8:08 AM
 */
//include(__DIR__."./../DAO/DB.php");
class DonDatHangDAO extends DB
{
    public function GetAll(){
        $sql="SELECT MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan,MaTinhTrang FROM DONDATHANG";
        $resutl=$this->ExecuteQuery($sql);
        $lstDonDatHang=array();
        while ($row=mysqli_fetch_array($resutl))
        {
            $donHang=new DonDatHangDTO();
            $donHang->MaDonDatHang=$row['MaDonDatHang'];
            $donHang->NgayLap=$row['NgayLap'];
            $donHang->TongThanhTien=$row['TongThanhTien'];
            $donHang->MaTaiKhoan=$row['MaTaiKhoan'];
            $donHang->MaTinhTrang=$row['MaTinhTrang'];

            $lstDonDatHang[]=$donHang;
        }
        return $lstDonDatHang;
    }

    //insert
    public function Insert($donHang){
        $MaDonDat=$donHang->MaDonDatHang;
        $Ngay=$donHang->NgayLap;
        //$Ngay=getdate();
        $TongThanh=$donHang->TongThanhTien;
        $MaTai=$donHang->MaTaiKhoan;
        $MaTinh=$donHang->MaTinhTrang;
        $sql ="INSERT INTO DonDatHang(MaDonDatHang,NgayLap,TongThanhTien,MaTaiKhoan,MaTinhTrang)values('$MaDonDat','$Ngay','$TongThanh','$MaTai','$MaTinh')";
        $result=$this->ExecuteQuery($sql);
        return $result;
    }

    //getMaDonHang Last
    public function CreatID(){
        $sql="select MAX(MaDonDatHang) AS MaDonDatHang From DONDATHANG";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        if($row==null)
        {
            return "DH1";
        }

        $temp=$row["MaDonDatHang"];
        $ma=substr($temp,2);
        $ma=(int)$ma+1;
        return "DH".$ma;
    }
}