<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 11:47 AM
 */

if(isset($_POST["muaThem"]))
{
    echo "<script type='text/javascript'>location='index.php';</script>";
}
if(isset($_POST["xoaHet"])){
    unset($_SESSION["cart"]);
    echo "<script> window.history.back();</script>";
}
if(isset($_POST["capNhat"])){
    //echo "<pre>";
    //print_r($_POST["qty"]);
    foreach ($_POST["qty"] as $key=>$value){
        if($value<=0)
        {
            unset($_SESSION["cart"][$key]);
        }
        else
        {
            if($value>100){
                $value=100;
            }
            $_SESSION["cart"][$key]["sl"]=$value;
        }
    }
    echo "<script> window.history.back();</script>";
}
if(isset($_POST["thanhToan"])){
        if($_SESSION["cart"]!=null){
            $DonHangBUS=new DonDatHangBUS();
            $ma=$DonHangBUS->CreatID();
            $DonHangDTO=new DonDatHangDTO();
            $DonHangDTO->MaDonDatHang=$ma;
            $DonHangDTO->NgayLap=date("Y-m-d H:i:s");
            $DonHangDTO->TongThanhTien=$_SESSION["TongTien"];
            $DonHangDTO->MaTaiKhoan=$_SESSION["uid"];
            $DonHangDTO->MaTinhTrang=1;
            $result=$DonHangBUS->Insert($DonHangDTO);
            if($result==true){
                foreach ($_SESSION["cart"] as $cart){
                    $ChiTietBUS=new ChiTietDonDatHangBUS();
                    $maCT=$ChiTietBUS->CreatID();
                    $ChiTietDTO=new ChiTietDonDatHangDTO();
                    $ChiTietDTO->MaChiTietDonDatHang=$maCT;
                    $ChiTietDTO->SoLuong=$cart["sl"];
                    $ChiTietDTO->GiaBan=$cart["price"];
                    $ChiTietDTO->MaDonDatHang=$ma;
                    $ChiTietDTO->MaSach=$cart["key"];

                    $result=$ChiTietBUS->Insert($ChiTietDTO);
                    //sau khi insert vào ChiTietDonHang tiến hành update lại so luong san pham
                        //lấy ra san pham
                        $maS=$cart["key"];
                        $slMua=$cart["sl"];
                        $sachOLDBUS=new SachBUS();
                        $sachOLD=$sachOLDBUS->GetByID($maS);
                        $slTon=$sachOLD->SoLuongTon;
                        $slCon=$slTon-$slMua;
                        $sachOLDBUS->UpDateSoLuong($maS,$slCon);
                }

                unset($_SESSION["cart"]);
                echo "Bạn Đã Đặt Hàng Thành Công<br>";
                echo "<a href='index.php?a=1'>Quay Về Trang Chủ</a>";
            }
        }
        else{
            echo "<script> window.history.back();</script>";
        }
}else{
    echo "<script> window.history.back();</script>";
    }