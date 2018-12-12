<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 10-12-2018
 * Time: 12:07 AM
 */
    $data=new DB();
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

        $sql = "INSERT INTO sach(TenSach,HinhURL,GiaSach,NgayNhap,SoLuongTon,XuatXu,MaLoaiSach,MaNhaXuatBan,MoTa,SoLuongBan,SoLuocXem) 
                        VALUES ('$tenSach', '$hinhURL','$giaBan','$ngaynhap','$soLuongTon','$xuatXu', '$maLoaiSach', '$maNXB', '$moTa',0,0)";

        $result = $data->ExecuteQuery($sql);
        if($result == false){
            //do some thing
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        } 
    }
?>