<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 11:09 PM
 */
    $loaiSachBUS = new LoaiSachBUS();
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $trangThai = $_GET['status'];
        if($trangThai==0){
            if($loaiSachBUS->SetDelete($maLoaiSach)){
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }
            else{
                echo "<a href='admin.php?a=3'>Quay lại</a> <br/>";
                echo "Đánh dấu xoá không thành công";
            }
            
        }
        else if ($trangThai==1){
            if($loaiSachBUS->UnSetDelete($maLoaiSach)){
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }
            else{
                echo "<a href='admin.php?a=3'>Quay lại</a> <br/>";
                echo "Huỷ đánh dấu xoá không thành công";
            }
        }
    }
?>