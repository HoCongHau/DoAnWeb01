<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 02-12-2018
 * Time: 8:36 PM
 */
 //include("/GUI/pages/pHead.php"); 
 //include("/GUI/pages/pTopHeader.php");
    session_start();//phải run nó mới sử dụng được
    //khởi tạo session cart
    //$_SESSION["cart"]="";
    include_once("./DAO/DB.php");
//echo 'Current PHP version: ' . phpversion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(__DIR__."./GUI/modules/mHead.php");?>
</head>
<body>
    <?php
        //include mLogin
        include("./GUI/modules/mLogin/mLogin.php");
        //các lớp tương ứng
        //
        include("./DTO/LoaiSachDTO.php");
        include("./BUS/LoaiSachBUS.php");
        //include("./DAO/LoaiSachDAO.php");
        //
        include("./DTO/NhaXuatBanDTO.php");
        include("./BUS/NhaXuatBanBUS.php");
        //include("./DAO/NhaXuatBanDAO.php");
        //
        include("./DTO/SachDTO.php");
        //include("./DAO/SachDAO.php");
        include("./BUS/SachBUS.php");
        //
        include("./DTO/TacGiaDTO.php");
        //include("./DAO/TacGiaDAO.php");
        include("./BUS/TacGiaBUS.php");
        //
        include("./DTO/TinhThanhDTO.php");
        //include("./DAO/TinhThanhDAO.php");
        include("./BUS/TinhThanhBUS.php");
        //đơn hàng
        //include("./DAO/DonDatHangDAO.php");
        include("./BUS/DonDatHangBUS.php");
        //include("./DAO/ChiTietDonDatHangDAO.php");
        include("./BUS/ChiTietDonDatHangBUS.php");
        include("./DTO/DonDatHangDTO.php");
        include("./DTO/ChiTietDonDatHangDTO.php");
        // load ham cat chuoi
        include(__DIR__."/GUI/modules/fCatChuoi.php");
        //cart
        //$_SESSION["cart"]="";
        //include (__DIR__."/GUI/modules/mGioHang/exAddCard.php");

        // ham chuyen doi chu tieng viet co dau ve chu khong dau
        include(__DIR__."/GUI/modules/fBoDauTiengViet.php");
    ?>
    <?php
        //$_SESSION["cart"]="";
        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch($a){
            case 1:
                include("./GUI/pages/pIndex.php");
                break;
            case 2:
                include("./GUI/modules/mLogin/exLogin.php");
                break;
            case 3:
                if(isset($_SESSION['uid'])!=null)
                    include("./GUI/pages/pGioHang.php");
                else
                    echo "Bạn phải đăng nhập";
                break;
            case 5:
                include("./GUI/modules/mLogin/exLogout.php");
                break;
            case 6:
                include("./GUI/pages/pCreateAccount.php");
                break;
            case 7:
                include("./GUI/modules/mDangKy/exDangKy.php");
                break;
            case 8:
                include ("./GUI/pages/pProductDetail.php");
                break;
            case 9:
                include ("./GUI/pages/pGioHang.php");
                break;
            case 10:
                include ("./GUI/pages/pProductByTyped.php");
                break;
            case 11:
                include ("./GUI/pages/pProductByNXB.php");
                break;
            case 12://cart
                include ("./GUI/modules/mGioHang/exAddCard.php");
                break;
            case 13://xoa san pham
                include("./GUI/modules/mGioHang/delete.php");
                break;
            case 14://update sp
                include("./GUI/modules/mGioHang/UpdateCart.php");
                break;
            case 404:
                include("./GUI/pages/pError.php");
                break;
        }


    ?>
    <?php include("./GUI/modules/mFooter.php");?>
</body>
</html>