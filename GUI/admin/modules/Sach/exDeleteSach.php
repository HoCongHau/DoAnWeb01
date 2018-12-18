<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    if(isset($_GET['id'])){
        $maSach = $_GET['id'];
        
        $sachBUS = new SachBUS();
        if($sachBUS->DeleteById($maSach)){
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        }
        else{
            echo "<a href='admin.php?a=1'>Quay lại</a> <br/>";
            echo "Xoá không thành công";
        }   
    }
?>