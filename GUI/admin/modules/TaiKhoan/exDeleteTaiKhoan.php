<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    if(isset($_GET['id'])){
        $maTK = $_GET['id'];
        
        $taiKhoanBUS = new TaiKhoanBUS();

        if($taiKhoanBUS->DeleteByID($maTK)){
            echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
        }
        else{
            echo "<a href='admin.php?a=5'>Quay lại</a> <br/>";
            echo "Xoá không thành công";
        }  
    }
?>