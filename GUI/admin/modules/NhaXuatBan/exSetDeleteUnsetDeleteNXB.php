<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 12:01 PM
 */
    
    if(isset($_GET['id'])){
        $maNXB = $_GET['id'];
        $trangThai = $_GET['status'];

        $nhaXuatBanBUS = new NhaXuatBanBUS();
        if($trangThai==0){
            if($nhaXuatBanBUS->SetDelete($maNXB)){
                echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
            }
            else{
                echo "<a href='admin.php?a=4'>Quay lại</a> <br/>";
                echo "Đánh dấu xoá không thành công";
            }  
        }
        else if ($trangThai==1){
            if($nhaXuatBanBUS->UnSetDelete($maNXB)){
                echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
            }
            else{
                echo "<a href='admin.php?a=4'>Quay lại</a> <br/>";
                echo "Huỷ đánh dấu xoá không thành công";
            }  
        }
    }
?>