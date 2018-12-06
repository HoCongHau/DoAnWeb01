<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 06-12-2018
 * Time: 4:53 PM
 */

if((isset($_SESSION["uid"]))== false){
    include(__DIR__."./../mTopHeader.php");
}
else{
    include(__DIR__."./frmAccountinfo.php");
    //echo "Hieu Dep Trai";
    //echo $_SESSION['uid'];
}