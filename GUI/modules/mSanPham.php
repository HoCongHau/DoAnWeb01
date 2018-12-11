<?php
    $sachBUS = new SachBUS();
    //$_SESSION["cart"];
    include(__DIR__."/mTinhToanChoPhanTrang.php");
    $lstSach = $sachBUS->GetAllowLimit($offset, $recordPerPage);
    foreach ($lstSach as $sachDTO) {
        echo "<div class='col-xs-6 col-md-6 col-lg-3'>";
        echo " <div class='product wow fadeInUp'>";
        echo "<form action='index.php?a=12&id=$sachDTO->MaSach' target='' method='post'>";
        echo " <div class='wrapper-img-product'>";
        echo "<a class='product-img' href='index.php?a=8&id=$sachDTO->MaSach'>";
        echo "<img src='../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
        echo "</a>";
        echo "</div>";
        echo "<div class='wrapper-content-product'>";
        echo "<p class='Title'>";
        echo _substr($sachDTO->TenSach, 50);
        echo "</p>";
        echo " <p class='Price'>$sachDTO->GiaSach đ</p>";
        echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
        //echo "<input type='submit' value='Thêm vào giỏ'>";
        echo "</div>";
        echo "</form>";
        echo "</div> <!-- product -->";
        echo "</div>";
    }
    include(__DIR__."/mNavigation.php");
?>