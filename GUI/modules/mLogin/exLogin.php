<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 06-12-2018
 * Time: 3:35 PM
 */
//include_once(__DIR__."./../../../DAO/DB.php");
        $data=new DB();

        if (isset($_POST['txtUserName']))
        {
            $us = $_POST['txtUserName'];
            $pw = $_POST['txtPassword'];
            $sql = "SELECT MaTaiKhoan, TenHienThi, MaLoaiTaiKhoan FROM TaiKhoan WHERE TenDangNhap = '$us' AND MatKhau = '$pw' AND BiXoa =0 ";
            $result = $data->ExecuteQuery($sql);
            if($result == null){
                //header("location:index.php?a=404");
                echo "<script type='text/javascript'>location='index.php?a=404';</script>";

            }
            else{
                $row = mysqli_fetch_array($result);
                extract($row);

                $_SESSION["uid"]=$MaTaiKhoan;
                $_SESSION["TenHienThi"]=$TenHienThi;
                $_SESSION["tuid"]=$MaLoaiTaiKhoan;

                //echo $MaTaiKhoan;
                //echo $TenHienThi;
                //echo $MaLoaiTaiKhoan;
                //echo "Em yeu cuoc song";
                echo "<script type='text/javascript'>location='index.php';</script>";
                //header("location:index.php");
            }
        }
        else {
            //header("location:index.php?a=404");
            echo "<script type='text/javascript'>location='index.php?a=404';</script>";
        }



