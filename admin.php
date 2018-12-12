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
    include("./DAO/TinhThanhDAO.php");
    include("./BUS/TinhThanhBUS.php");
    include("./GUI/modules/fCatChuoi.php");
    include("./GUI/admin/modules/uploadFile.php");

if(isset($_SESSION['tuid'])==true &&$_SESSION['tuid']==111){
        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch ($a){
            case 1:
                include("./GUI/admin/pages/Sach/pAdmin.php");
                break;
            case 3:
                include("./GUI/admin/pages/LoaiSach/pLoaiSanPham.php");
                break;
            case 4:
                include ("./GUI/admin/pages/NhaXuatBan/pNhaXuatBan.php");
                break;
            case 5:
                include ("./GUI/admin/pages/TaiKhoan/pTaiKhoan.php");
                break;
            case 6:
                include ("./GUI/admin/pages/pDonHang.php");
                break;
            case 7:
                include ("./GUI/admin/pages/Sach/pThemSanPham.php");
                break;
            case 8:
                include ("./GUI/admin/modules/Sach/exThemSanPham.php");
                break;
            case 9:
                include("./GUI/admin/pages/LoaiSach/pThemLoaiSanPham.php");
                break;
            case 10:
                include("./GUI/admin/pages/LoaiSach/pSuaLoaiSanPham.php");
                break;
            case 11:
                include("./GUI/admin/pages/NhaXuatBan/pThemNhaXuatBan.php");
                break;
            case 12:
                include("./GUI/admin/pages/TaiKhoan/pThemTaiKhoanQTV.php");
                break;
            case 13:
                include("./GUI/admin/pages/NhaXuatBan/pSuaNhaXuatBan.php");
                break;
            case 14:
                include("./GUI/admin/pages/Sach/pSuaSanPham.php");
                break;
            case 15:
                include("./GUI/admin/pages/TaiKhoan/pSuaTaiKhoan.php");
                break;

            /* ------------------ MODULES LOẠI SÁCH -------------------------- */
            case 102:
                include("./GUI/admin/modules/LoaiSach/exThemLoaiSanPham.php");
                break;
            case 103:
                include("./GUI/admin/modules/LoaiSach/exSetDeleteUnsetDeleteLoaiSach.php");
                break;
            case 104:
                include("./GUI/admin/modules/LoaiSach/exDeleteLoaiSach.php");
                break;
            case 105:
                include("./GUI/admin/modules/LoaiSach/exEditLoaiSach.php");
                break;
            /* --------------------------==-------------------------- */
            
             /* ------------------ MODULES NHÀ XUẤT BẢN -------------------------- */
            case 106:
                include("./GUI/admin/modules/NhaXuatBan/exSetDeleteUnsetDeleteNXB.php");
                break;
            case 107:
                include("./GUI/admin/modules/NhaXuatBan/exDeleteNXB.php");
                break;
            case 108:
                include("./GUI/admin/modules/NhaXuatBan/exThemNXB.php");
                break;
            case 109:
                include("./GUI/admin/modules/NhaXuatBan/exEditNXB.php");
                break;
            
            /* --------------------------==-------------------------- */


             /* ------------------ MODULES TÀI KHOẢN -------------------------- */
            case 110:
                include("./GUI/admin/modules/TaiKhoan/exThemTaiKhoanCTV.php");
                break;
            case 115:
                include("./GUI/admin/modules/TaiKhoan/exSetDeleteUnsetDeleteTaiKhoan.php");
                break;
            case 116:
                include("./GUI/admin/modules/TaiKhoan/exDeleteTaiKhoan.php");
                break;
            case 117:
                include("./GUI/admin/modules/TaiKhoan/exEditTaiKhoan.php"); 
                break;
            /* --------------------------==-------------------------- */

             /* ------------------ MODULES SÁCH -------------------------- */
            case 111:
                include("./GUI/admin/modules/Sach/exDeleteSach.php");
                break;
            case 112:
                include("./GUI/admin/modules/Sach/exEditSach.php");
                break;
            case 113:
                include("./GUI/admin/modules/Sach/exSetDeleteUnsetDeleteSach.php");
                break;
            case 114:
                include("./GUI/admin/modules/Sach/exThemSanPham.php");
                break;
        }
    }
    else
    {
        include("./GUI/pages/pError.php");
    }
?>
<script src="./GUI/js/admin.js"></script>
<script type="text/javascript">
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>