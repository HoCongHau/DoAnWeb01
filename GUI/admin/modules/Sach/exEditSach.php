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

/*         echo $tenSach;
        echo "<br/>";
        echo $maSach;
        echo "<br/>";
        echo $giaSach;
        echo "<br/>";
        echo $soLuongTon;
        echo "<br/>";
        echo $xuatXu;
        echo "<br/>";
        echo $maLoaiSach;
        echo "<br/>";
        echo $maNXB;
        echo "<br/>";
        echo $moTa;
        echo "<br/>";
        echo $tenHinh; */

        $sql = "UPDATE sach SET TenSach= '$tenSach', HinhURL = '$tenHinh', GiaSach = '$giaSach', SoLuongTon = '$soLuongTon', 
        XuatXu = '$xuatXu', MaLoaiSach = '$maLoaiSach', MaNhaXuatBan = '$maNXB', MoTa = '$moTa' WHERE MaSach='$maSach'"; 

        $result = $data->ExecuteQuery($sql);

        if($result == false){
            //do some thing
            echo "Khong thanh công";
            /*  echo "<script type='text/javascript'>location='admin.php?a=3';</script>"; */
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=1';</script>";
        }      
    }
} 
?>