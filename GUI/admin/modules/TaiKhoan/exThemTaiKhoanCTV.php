<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 3:57 PM
 */
    //$data=new DB();

    if(isset($_POST['txtHoTen'])){
        $taiKhoan = new TaiKhoanDTO();

        $taiKhoan->TenHienThi =$_POST['txtHoTen'];

        $ngay=$_POST['txtNgaySinh'];
        $thang=$_POST['txtThangSinh'];
        $nam=$_POST['txtNamSinh'];
        $taiKhoan->NgaySinh=$nam.'-'.$thang.'-'.$ngay;

        $taiKhoan->DiaChi=$_POST['txtQueQuan'];
        $taiKhoan->DienThoai=$_POST['txtDienThoai'];
        $taiKhoan->Email = $_POST['txtEmail'];
        $taiKhoan->TenDangNhap=$_POST['txtUserName'];
        $taiKhoan->MatKhau = $_POST['txtPassword'];
       /*  $ten=$_POST['txtHoTen'];
        $ngay=$_POST['txtNgaySinh'];
        $thang=$_POST['txtThangSinh'];
        $nam=$_POST['txtNamSinh'];
        $NgaySinh=$nam.'-'.$thang.'-'.$ngay;

        $diaChi=$_POST['txtQueQuan'];
        $dienThoai=$_POST['txtDienThoai'];
        $email=$_POST['txtEmail'];
        $us=$_POST['txtUserName'];
        $pw=$_POST['txtPassword']; */

        $taiKhoanBUS = new TaiKhoanBUS();
        if($taiKhoanBUS->InsertAdmin($taiKhoan)){
            echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
        }
        else{
            echo "<a href='admin.php?a=5'>Quay lại</a> <br/>";
            echo "Thêm không thành công";
        }  

    }