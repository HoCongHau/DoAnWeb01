<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 12:01 PM
 */
    if(isset($_GET['id'])){
        $maSach = $_GET['id'];
        $trangThai = $_GET['status'];

        $sachBUS = new SachBUS();
        if($trangThai==0){
            if($sachBUS->SetDelete($maSach)){
                echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
            }
            else{
                echo "<a href='admin.php?a=1'>Quay lại</a> <br/>";
                echo "Đánh dấu xoá không thành công";
            }  
        }
        else if ($trangThai==1){
            if($sachBUS->UnSetDelete($maSach)){
                echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
            }
            else{
                echo "<a href='admin.php?a=1'>Quay lại</a> <br/>";
                echo "Huỷ đánh dấu xoá không thành công";
            }  
        } 
    }
?>