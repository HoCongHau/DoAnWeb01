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
        if (isset($_POST['txtTenNXB']) && isset($_GET['id'])) {
        $tenNXB = $_POST['txtTenNXB'];
        $maNXB = $_GET['id'];
        $tenHinh = __uploadFile('photo');

        $sql = "UPDATE nhaxuatban SET TenNhaXuatBan= '$tenNXB' , LogoURL= '$tenHinh' WHERE MaNhaXuatBan='$maNXB'"; 

        $result = $data->ExecuteQuery($sql);

        if($result == false){
            //do some thing
            echo "Khong thanh công";
            /*  echo "<script type='text/javascript'>location='admin.php?a=3';</script>"; */
        }
        else{
            echo "<script type='text/javascript'>location='admin.php?a=4';</script>";
        }    
    }
}
?>