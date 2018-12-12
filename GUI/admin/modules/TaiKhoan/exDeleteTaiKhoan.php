<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maTK = $_GET['id'];
        $sql = "DELETE  from TaiKhoan where MaTaiKhoan= $maTK";

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
        }  
    }
?>