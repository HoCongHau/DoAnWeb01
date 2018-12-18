<?php
    if(isset($_GET['nxb'])) {
        $maNXB = $_GET['nxb'];
        $sachBUS = new SachBUS();

        $lstSach = $sachBUS->GetByNXB($maNXB);
        foreach ($lstSach as $sachDTO) {
            echo "<div class='col-xs-6 col-md-6 col-lg-3'>";
            echo " <div class='product wow fadeInUp'>";
            echo "<form action='#' target='' method='GET'>";
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
            echo "</div>";
            echo "</form>";
            echo "</div> <!-- product -->";
            echo "</div>";
        }
    }
?>