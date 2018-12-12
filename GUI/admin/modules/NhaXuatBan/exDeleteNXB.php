<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maNXB = $_GET['id'];
        $sql = "DELETE  from NhaXuatBan where MaNhaXuatBan= $maNXB";

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }  
    }
?>