<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $loaiSachBUS = new LoaiSachBUS();
        if($loaiSachBUS->DeleteLoaiSachById($maLoaiSach)){
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }
        else{
            echo "<a href='admin.php?a=3'>Quay lại</a> <br/>";
            echo "Xoá không thành công";
        }
    }
?>