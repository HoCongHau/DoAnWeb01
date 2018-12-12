<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 9:23 AM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $sql = "DELETE  from loaisach where MaLoaiSach= $maLoaiSach";

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }  
    }
?>