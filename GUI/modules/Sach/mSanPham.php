<?php
    $sachBUS = new SachBUS();
    //$_SESSION["cart"];
    include(__DIR__."./../mTinhToanChoPhanTrang.php");
    if (isset($_GET['search'])){
        $namebook = $_GET['search'];
        $lstSach = $sachBUS->GetBookByKeyWord($namebook);
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
            echo " <p class='Price'>";
            echo number_format($sachDTO->GiaSach,0,"",".");
            echo " đ</p>";
            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
            //echo "<input type='submit' value='Thêm vào giỏ'>";
            echo "</div>";
            echo "</form>";
            echo "</div> <!-- product -->";
            echo "</div>";
        }
    }

    else if(isset($_GET['searchAdvange'])){
        $maLoaiSach = $_GET['loaisach'];
        if ($maLoaiSach==""){
            $maLoaiSach= "%";
        }
        $maNXB = $_GET['nhaxuatban'];
        if($maNXB==""){
            $maNXB="%";
        }
       /*  $maTGia = $_GET['tacgia']; */
        $giaTien = $_GET['giatien'];
        if($giaTien==""){
            $giaMin = "0";
            $giaMax = "99999999999999999999999999";
        }
        else {
            $arrGiaTien = explode("-",$giaTien);
            $giaMin = $arrGiaTien[0];
            $giaMax = $arrGiaTien[1];
        }

        $lstSach = $sachBUS->GetBySearchAdvange($maLoaiSach, $maNXB, $giaMin, $giaMax);
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
            echo " <p class='Price'>";
            echo number_format($sachDTO->GiaSach,0,"",".");
            echo " đ</p>";
            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
            //echo "<input type='submit' value='Thêm vào giỏ'>";
            echo "</div>";
            echo "</form>";
            echo "</div> <!-- product -->";
            echo "</div>";
        }
    }

    else{
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
            echo " <p class='Price'>";
            echo number_format($sachDTO->GiaSach,0,"",".");
            echo " đ</p>";
            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
            //echo "<input type='submit' value='Thêm vào giỏ'>";
            echo "</div>";
            echo "</form>";
            echo "</div> <!-- product -->";
            echo "</div>";
        }
        include(__DIR__."./../mNavigation.php");
    }
    
?>