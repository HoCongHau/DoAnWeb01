<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 12:07 AM
 */
    if(isset($_POST['txtTenSach'])){
        $tenSach = $_POST['txtTenSach'];
        $hinhURL = $_POST['txtHinhAnh'];
        $giaBan =$_POST['txtGiaSach'];
        $soLuongTon = $_POST['txtSoLuongTon'];
        $xuatXu = $_POST['txtXuatXu'];
        $maLoaiSach = $_POST['txtLoaiSach'];
        $maNXB = $_POST['txtNXB'];
        $moTa = $_POST['txtMoTa'];

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $ngaynhap = date('Y-m-d H:i:s');

        $sachBUS = new SachBUS();
        if($sachBUS->Insert($tenSach, $hinhURL, $giaBan, $ngaynhap, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa)){
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        }
        else{
            echo "<a href='admin.php?a=1'>Quay lại</a> <br/>";
            echo "Thêm sách không thành công";
        }   
    }
?>