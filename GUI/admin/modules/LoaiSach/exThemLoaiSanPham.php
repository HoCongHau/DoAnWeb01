<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 9:59 PM
 */
    if(isset($_POST['txtTenLoaiSanPham'])){
        $tenLoaiSanPham = $_POST['txtTenLoaiSanPham'];
        $loaiSachBUS = new LoaiSachBUS();
        if($loaiSachBUS->Insert($tenLoaiSanPham)){
            //do some thing
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }
        else{
            echo "<a href='admin.php?a=3'>Quay lại</a> <br/>";
            echo "Thêm không thành công<br>";
        }  
    }
?>