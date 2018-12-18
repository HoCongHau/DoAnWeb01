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
if(__uploadFile('photo')){
        if (isset($_POST['txtTenSach']) && isset($_GET['id'])) {
        $tenSach = $_POST['txtTenSach'];
        $maSach = $_GET['id'];
        $giaSach = $_POST['txtGiaSach'];
        $soLuongTon = $_POST['txtSoLuongTon'];
        $xuatXu = $_POST['txtXuatXu'];
        $maLoaiSach = $_POST['txtLoaiSach'];
        $maNXB = $_POST['txtNXB'];
        $moTa = $_POST['txtMoTa'];
        $tenHinh = __uploadFile('photo');

        $sachBUS = new SachBUS();
        if($sachBUS->EditById($tenSach,$tenHinh,$giaSach,$soLuongTon,$xuatXu,$maLoaiSach,$maNXB,$moTa,$maSach)){
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        }
        else{
            echo "<a href='admin.php?a=1'>Quay lại</a> <br/>";
            echo "Cập nhật không thành công";
        }    
    }
} 
?>