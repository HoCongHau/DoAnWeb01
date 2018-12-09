<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 07-12-2018
 * Time: 6:40 AM
 */
session_start();//phải run nó mới sử dụng được
include_once("./DAO/DB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(__DIR__."./GUI/admin/modules/mHead.php");?>
</head>
<body>

<?php
    include "./DTO/TaiKhoanDTO.php";
    include "./DAO/TaiKhoanDAO.php";
    include "./BUS/TaiKhoanBUS.php";
    include "./DTO/SachDTO.php";
    include "./DAO/SachDAO.php";
    include "./BUS/SachBUS.php";
    include "./DTO/LoaiSachDTO.php";
    include "./DAO/LoaiSachDAO.php";
    include "./BUS/LoaiSachBUS.php";
    include "./DTO/NhaXuatBanDTO.php";
    include "./DAO/NhaXuatBanDAO.php";
    include "./BUS/NhaXuatBanBUS.php";
    include "./DTO/DonHangDTO.php";
    include "./DAO/DonHangDAO.php";
    include "./BUS/DonHangBUS.php";

if(isset($_SESSION['tuid'])==true &&$_SESSION['tuid']==111){
        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch ($a){
            case 1:
                include("./GUI/admin/pages/pAdmin.php");
                break;
            case 3:
                include("./GUI/admin/pages/pLoaiSanPham.php");
                break;
            case 4:
                include ("./GUI/admin/pages/pNhaXuatBan.php");
                break;
            case 5:
                include ("./GUI/admin/pages/pTaiKhoan.php");
                break;
            case 6:
                include ("./GUI/admin/pages/pDonHang.php");
                break;
        }

    }
    else
    {
        include("./GUI/pages/pError.php");
    }
?>
</body>
</html>