<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    if(isset($_GET['id'])){
        $maDonDatHang = $_GET['id'];
        echo $maDonDatHang;

        $donDatHangBUS = new DonDatHangBUS();

        if($donDatHangBUS->DeleteById($maDonDatHang)){
            echo "<script type='text/javascript'>location='admin.php?a=6';</script>";
        }
        else{
            echo "<a href='admin.php?a=6'>Quay lại</a> <br/>";
            echo "Xoá không thành công";
        }  
    }
?>