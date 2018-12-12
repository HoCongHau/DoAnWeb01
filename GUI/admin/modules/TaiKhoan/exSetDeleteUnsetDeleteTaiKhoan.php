<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 12:01 PM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maTK = $_GET['id'];
        $trangThai = $_GET['status'];
        if($trangThai==0){
            $sql = "UPDATE TaiKhoan set BiXoa = 1 where MaTaiKhoan= $maTK";

            $result = $data->ExecuteQuery($sql);
            if($result == false){
                //do some thing
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }
            else{
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }  
        }
        else if ($trangThai==1){
            $sql = "UPDATE TaiKhoan set BiXoa = 0 where MaTaiKhoan= $maTK";

            $result = $data->ExecuteQuery($sql);
            if($result == false){
                //do some thing
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }
            else{
                echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
            }  
        }
    }
?>