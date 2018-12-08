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
    if($_SESSION['tuid']==222)
        include(__DIR__."./frmAccountinfo.php");
    if($_SESSION['tuid']==111)
    {
        //lúc này admin ở trang người dùng
        //include(__DIR__."./../../../GUI/admin/modules/mHeader.php");
        echo "<div id='top-header' class='text-right'>
                <p> Hello admin, <a href='index.php?a=5'>Đăng xuất</a></p>
                <p><a href='admin.php?a=1'>Trang Quản Trị</a></p>
            </div>";
    }
        //echo "Hieu Dep Trai";
    //echo $_SESSION['uid'];
}