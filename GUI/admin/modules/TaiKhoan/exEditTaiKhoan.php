<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 11-12-2018
 * Time: 11:31 AM
 */

/* if(isset($_POST['txtTenNXB'])){
    echo $_POST['txtTenNXB'];
    echo "<br/>";
    echo $_FILES['photo']['name'];
    echo "<br/>";
    echo $_FILES['photo']['tmp_name'];
} */
/* echo dirname(__FILE__.'./'); */
if (isset($_POST['txtUserName']) && isset($_GET['id'])) {
    /* $maTK = $_GET['id'];
    $username = $_POST['txtUserName'];
    $pass = $_POST['txtPassword'];
    $tenHienThi = $_POST['txtHoTen'];

    $ngay=$_POST['txtNgaySinh'];
    $thang=$_POST['txtThangSinh'];
    $nam=$_POST['txtNamSinh'];
    $ngaySinh=$nam.'-'.$thang.'-'.$ngay;
    if(strlen($ngaySinh)>10){
        $ngaySinh = substr($ngaySinh,0,10);
    }

    $diaChi=$_POST['txtQueQuan'];
    $dienThoai=$_POST['txtDienThoai'];
    $email=$_POST['txtEmail']; */
    
    $taiKhoan = new TaiKhoanDTO();
    $taiKhoan->MaTaiKhoan = $_GET['id'];
    $taiKhoan->TenDangNhap = $_POST['txtUserName'];
    $taiKhoan->MatKhau = $_POST['txtPassword'];
    $taiKhoan->TenHienThi = $_POST['txtHoTen'];

    $ngay=$_POST['txtNgaySinh'];
    $thang=$_POST['txtThangSinh'];
    $nam=$_POST['txtNamSinh'];
    $taiKhoan->NgaySinh = $nam.'-'.$thang.'-'.$ngay;
    if(strlen($taiKhoan->NgaySinh)>10){
        $taiKhoan->NgaySinh = substr($taiKhoan->NgaySinh,0,10);
    }

    $taiKhoan->DiaChi = $_POST['txtQueQuan'];
    $taiKhoan->DienThoai = $_POST['txtDienThoai'];
    $taiKhoan->Email =$_POST['txtEmail'];

    $taiKhoanBUS = new TaiKhoanBUS();

    if($taiKhoanBUS->Update($taiKhoan)){
        echo "<script type='text/javascript'>location='admin.php?a=5';</script>";
    }
    else{
        echo "<a href='admin.php?a=5'>Quay lại</a> <br/>";
        echo "Cập nhật không thành công";
    }  
}
?>