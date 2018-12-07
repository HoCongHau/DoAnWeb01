<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 02-12-2018
 * Time: 8:36 PM
 */
 //include("/GUI/pages/pHead.php"); 
 //include("/GUI/pages/pTopHeader.php");
    session_start();//phải run nó mới sử dụng được
    include_once("./DAO/DB.php");
//echo 'Current PHP version: ' . phpversion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(__DIR__."./GUI/modules/mHead.php");?>
</head>
<body>
    <?php
        include("./GUI/modules/mLogin/mLogin.php");
    ?>
    <?php

        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch($a){
            case 1:
                include("./GUI/pages/pIndex.php");
                break;
            case 2:
                include("./GUI/modules/mLogin/exLogin.php");
                break;
            case 3:
                if(isset($_SESSION['uid'])!=null)
                    include("./GUI/pages/pGioHang.php");
                else
                    echo "Bạn phải đăng nhập";
                break;
            case 4:
                include("./GUI/pages/pCreateAccount.php");
                break;
            case 5:
                include("./GUI/modules/mLogin/exLogout.php");
                break;
            case 404:
                include("./GUI/pages/pError.php");
                break;
        }


    ?>
    <?php include("./GUI/modules/mFooter.php");?>
</body>
</html>