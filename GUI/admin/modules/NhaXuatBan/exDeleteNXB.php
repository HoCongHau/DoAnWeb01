<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    if(isset($_GET['id'])){
        $maNXB = $_GET['id'];
        $nhaXuatBanBUS = new NhaXuatBanBUS();

        if($nhaXuatBanBUS->DeleteById($maNXB)){
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }
        else{
            echo "<a href='admin.php?a=4'>Quay lại</a> <br/>";
            echo "Xoá không thành công";
        }  
    }
?>