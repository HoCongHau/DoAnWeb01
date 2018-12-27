<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 12:01 PM
 */
    
    if(isset($_GET['id'])){
        $maDonDatHang = $_GET['id'];
        $trangThai = $_GET['status'];
        echo $maDonDatHang;
        echo $trangThai;
        $donDatHangBUS = new DonDatHangBUS();
        if($trangThai==0){
            if($donDatHangBUS->SetDelete($maDonDatHang)){
                echo "<script type='text/javascript'>location='admin.php?a=6';</script>";
            }
            else{
                echo "<a href='admin.php?a=6'>Quay lại</a> <br/>";
                echo "Đánh dấu xoá không thành công";
            }  
        }
        else if ($trangThai==1){
            if($donDatHangBUS->UnSetDelete($maDonDatHang)){
                echo "<script type='text/javascript'>location='admin.php?a=6';</script>";
            }
            else{
                echo "<a href='admin.php?a=6'>Quay lại</a> <br/>";
                echo "Huỷ đánh dấu xoá không thành công";
            }  
        }
    }
?>