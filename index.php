<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 02-12-2018
 * Time: 8:36 PM
 */
 //include("/GUI/pages/pHead.php"); 
 //include("/GUI/pages/pTopHeader.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once(__DIR__."./GUI/modules/mHead.php");?>
</head>
<body>
    <?php

        $a=1;
        if(isset($_GET['a']))
            $a=$_GET['a'];
        switch($a){
            case 1: 
                include_once("./GUI/pages/pIndex.php");
                break;
            case 2:
                include_once("./GUI/pages/pLogin.php");
                break;
            case 3:
                include_once("./GUI/pages/pGioHang.php");
                break;
            case 4:
                include_once("./GUI/pages/pCreateAccount.php");
                break;
        }
    ?>


</body>
</html>