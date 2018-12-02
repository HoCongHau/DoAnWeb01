<?php 
    if(isset($_GET['txtUserName'])){
        $hoten = $_GET['txtHoTen'];
        $ngaysinh = $_GET['txtNgaySinh'];
        $thangsinh = $_GET['txtThangSinh'];
        $namsinh = $_GET['txtNamSinh'];
        $username = $_GET['txtUserName'];
        $pass = $_GET['txtPassword'];
        $repass = $_GET['txtRePassword'];
        $makt = $_GET['txtMaKiemTra'];

        echo $hoten;
    }
?>