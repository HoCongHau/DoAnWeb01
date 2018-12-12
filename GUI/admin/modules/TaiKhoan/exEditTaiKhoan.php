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
$data=new DB();
if (isset($_POST['txtUserName']) && isset($_GET['id'])) {
    $maTK = $_GET['id'];
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
    $email=$_POST['txtEmail'];
    
    /* echo $maTK;
    echo "<br/>";
    echo $username;
    echo "<br/>";
    echo $pass;
    echo "<br/>";
    echo $tenHienThi;
    echo "<br/>";
    echo $ngaySinh;
    echo "<br/>";
    echo $diaChi;
    echo "<br/>";
    echo $dienThoai;
    echo "<br/>";
    echo $email; */

    $sql = "UPDATE taikhoan SET TenDangNhap='$username',MatKhau='$pass',TenHienThi='$tenHienThi',
    NgaySinh='$ngaySinh',DiaChi='$diaChi',DienThoai='$dienThoai',Email='$email' WHERE MaTaiKhoan = '$maTK'"; 

    $result = $data->ExecuteQuery($sql);

    if($result == false){
        //do some thing
        echo "Khong thanh công";
        /*  echo "<script type='text/javascript'>location='admin.php?a=5';</script>"; */
    }
    else{
        echo "<script type='text/javascript'>location='admin.php?a=5';</script>";     
    }
}
?>