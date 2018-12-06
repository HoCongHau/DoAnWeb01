<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 06-12-2018
 * Time: 3:35 PM
 */
    session_destroy();
    //header("location:index.php");
    echo "<script type='text/javascript'>location='index.php?a=1';</script>";
?>