<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 3:57 PM
 */
    //$data=new DB();
    $data=new DB();

    if(isset($_POST['txtHoTen'])){
        $ten=$_POST['txtHoTen'];
        $ngay=$_POST['txtNgaySinh'];
        $thang=$_POST['txtThangSinh'];
        $nam=$_POST['txtNamSinh'];
        $NgaySinh=$nam.'-'.$thang.'-'.$ngay;

        $diaChi=$_POST['txtQueQuan'];
        $dienThoai=$_POST['txtDienThoai'];
        $email=$_POST['txtEmail'];
        $us=$_POST['txtUserName'];
        $pw=$_POST['txtPassword'];

        $sql = "INSERT INTO TAIKHOAN(TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan) 
        VALUES ('$us', '$pw','$ten','$NgaySinh','$diaChi','$dienThoai', '$email', 0, 111)";

        $result=$data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "Sai Đăng Ký";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
        }

    }