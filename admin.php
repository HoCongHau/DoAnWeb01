<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 07-12-2018
 * Time: 6:40 AM
 */
session_start();//phải run nó mới sử dụng được
include_once("./DAO/DB.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(__DIR__."./GUI/admin/modules/mHead.php");?>
</head>
<body>

<?php

    if(isset($_SESSION['tuid'])==true &&$_SESSION['tuid']==111){
        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch ($a){
            case 1:
                include("./GUI/admin/pages/pAdmin.php");
                break;
            case 3:
                include "./GUI/admin/pages/pLoaiSanPham.php";
                break;
        }

    }
    else
    {
        include("./GUI/pages/pError.php");
    }
?>
</body>
</html>