<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 9:59 PM
 */
    $data=new DB();
    if(isset($_POST['txtTenLoaiSanPham'])){
        $tenLoaiSanPham = $_POST['txtTenLoaiSanPham'];
        $sql = "INSERT INTO LoaiSach(TenLoaiSach) 
                        VALUES ('$tenLoaiSanPham')";

        $result = $data->ExecuteQuery($sql);
        if($result != false){
            //do some thing
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }
        else{
            echo "Thêm không thành công<br>";
        }  
    }
?>