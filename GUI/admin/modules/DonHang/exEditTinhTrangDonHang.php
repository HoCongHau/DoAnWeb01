<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 11:31 AM
 */
    if(isset($_POST['updateTinhTrang'])){
        $status = $_POST['updateTinhTrang'];
        $maDonDatHang = $_GET['id'];

        $donDatHangBUS = new DonDatHangBUS();
        if($donDatHangBUS->EditByIDandStatus($maDonDatHang, $status)){
            echo "<script type='text/javascript'>location='admin.php?a=6';</script>";
        }
        else{
            echo "<a href='admin.php?a=6'>Quay lại</a> <br/>";
            echo "Cập nhật không thành công";
        }
    }
?>