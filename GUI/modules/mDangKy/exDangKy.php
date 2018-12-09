<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 08-12-2018
 * Time: 9:49 PM
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
        $pw=$_POST['txtPassWord'];

        $sql = "INSERT INTO TAIKHOAN(TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan) 
        VALUES ('$us', '$pw','$ten','$NgaySinh','$diaChi','$dienThoai', '$email', 0, 222)";

        $result=$data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "Sai Đăng Ký";
        }
        else{
            echo "Bạn đã tạo thành công tài khoản<br>";
            echo"<p><a href='index.php?a=1'>Quay Lại Trang Chủ</a></p>";
        }

    }