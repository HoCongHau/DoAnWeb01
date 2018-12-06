<?php
ob_start();
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 06-12-2018
 * Time: 4:55 PM
 */
ob_end_flush();
//onclick="window.location='index.php?a=6';"
?>
<div class="container-fluid">
    <div id="top-header">
        <div class="row">
            <div class="col-12">
                <ul>
                    Hello <?php echo $_SESSION['TenHienThi'];?>
                    <input type="button" value="Logout" onclick="javascript:location.href='index.php?a=6'" />
                    <li><a href="index.php?a=3"><i class="fas fa-shopping-cart"></i>&nbsp;giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </div> <!-- top-header -->
</div> <!--  container-fluid-fluid -->

