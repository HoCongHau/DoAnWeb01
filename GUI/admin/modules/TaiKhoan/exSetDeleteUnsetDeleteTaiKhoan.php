<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 12:01 PM
 */
    if(isset($_GET['id'])){
        $maTK = $_GET['id'];
        $trangThai = $_GET['status'];

        $taiKhoanBUS = new TaiKhoanBUS();
        if($trangThai==0){
            if($taiKhoanBUS->SetDelete($maTK)){
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }
            else{
                echo "<a href='admin.php?a=5'>Quay lại</a> <br/>";
                echo "Đánh dấu xoá không thành công";
            }  
        }
        else if ($trangThai==1){
            if($taiKhoanBUS->UnSetDelete($maTK)){
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }
            else{
                echo "<a href='admin.php?a=5'>Quay lại</a> <br/>";
                echo "Huỷ đánh dấu xoá không thành công";
            }  
        }
    }
?>