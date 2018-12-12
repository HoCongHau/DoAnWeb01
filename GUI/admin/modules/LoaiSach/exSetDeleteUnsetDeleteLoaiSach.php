<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 11:09 PM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $trangThai = $_GET['status'];
        if($trangThai==0){
            $sql = "UPDATE loaisach set BiXoa = 1 where MaLoaiSach= $maLoaiSach";

            $result = $data->ExecuteQuery($sql);
            if($result == false){
                //do some thing
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }
            else{
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }  
        }
        else if ($trangThai==1){
            $sql = "UPDATE loaisach set BiXoa = 0 where MaLoaiSach= $maLoaiSach";

            $result = $data->ExecuteQuery($sql);
            if($result == false){
                //do some thing
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }
            else{
                echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
            }  
        }
    }
?>