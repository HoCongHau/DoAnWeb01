<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 9:59 PM
 */
    $data=new DB();
    if(isset($_POST['txtTenNXB'])){
        $tenNXB = $_POST['txtTenNXB'];
        $hinhURL = $_POST['txtLogoNXB'];
        $sql = "INSERT INTO NhaXuatBan(TenNhaXuatBan, LogoURL) 
                        VALUES ('$tenNXB', '$hinhURL')";

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        } 
    }
?>