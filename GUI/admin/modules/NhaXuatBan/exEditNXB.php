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
        if (isset($_POST['txtTenNXB']) && isset($_GET['id'])) {
        $tenNXB = $_POST['txtTenNXB'];
        $maNXB = $_GET['id'];
        $tenHinh = __uploadFile('photo');

        $nhaXuatBanBUS = new NhaXuatBanBUS();
        if($nhaXuatBanBUS->EditById($maNXB, $tenNXB, $tenHinh)){
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }
        else{
            echo "<a href='admin.php?a=4'>Quay lại</a> <br/>";
            echo "Cập nhật không thành công";
        }    
    }
}
?>