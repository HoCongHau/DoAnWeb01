<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 11:31 AM
 */
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $tenCapNhat = $_POST['txtTenLoaiSanPham'];

        $loaiSachBUS = new LoaiSachBUS();
        if($loaiSachBUS->EditById($maLoaiSach, $tenCapNhat)){
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }
        else{
            echo "<a href='admin.php?a=3'>Quay lại</a> <br/>";
            echo "Cập nhật không thành công";
        }
    }
?>