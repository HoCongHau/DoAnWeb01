<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 11:31 AM
 */
    $data=new DB();
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];
        $tenCapNhat = $_POST['txtTenLoaiSanPham'];
        $sql = "UPDATE loaisach SET TenLoaiSach='$tenCapNhat' WHERE MaLoaiSach = $maLoaiSach"; 

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "Khong thanh công";
           /*  echo "<script type='text/javascript'>location='admin.php?a=3';</script>"; */
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=3';</script>";
        }  
    }
?>