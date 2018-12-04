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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HIEU_HAU BOOK STORE</title>
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
        }
    ?>


</body>
</html>