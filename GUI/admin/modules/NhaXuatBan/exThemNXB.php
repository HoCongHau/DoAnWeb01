<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 9:59 PM
 */
    if(isset($_POST['txtTenNXB'])){
        $tenNXB = $_POST['txtTenNXB'];
        $hinhURL = $_POST['txtLogoNXB'];
        
        $nhaXuatBanBUS = new NhaXuatBanBUS();
        if($nhaXuatBanBUS->Insert($tenNXB, $hinhURL)){
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }
        else{
            echo "<a href='admin.php?a=4'>Quay lại</a> <br/>";
            echo "Thêm nhà xuất bản không thành công";
        } 
    }
?>