<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 17-12-2018
 * Time: 10:38 AM
 */
    //session_start();

    if(isset($_GET['id'])){
        //echo $_GET['id'];
        $id=$_GET["id"];
        unset($_SESSION["cart"][$id]);
        //echo"<pre>";
        //print_r($_SESSION["cart"]);
        echo "<script> window.history.back();</script>";
    }
    //$id=$_GET['id'];
    //echo $id;
