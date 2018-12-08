<!-- <div class="col-xs-6 col-md-6 col-lg-3">
    <div class="product wow fadeInUp">
        <form action="#" target="" method="GET">
            <div class="wrapper-img-product">
                <img src="GUI/images/8935086838143_2.jpg" alt="">
            </div>
            <div class="wrapper-content-product">
                <p class="Title">Nhà Giả Kim <br> (Tái bản 2017)</p>
                <p class="Price">53.820đ</p>
                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
            </div>
        </form>
    </div>  product 
</div> -->

<?php
    $sachBUS = new SachBUS();
    $lstSach= $sachBUS->GetAllAvailable();
    foreach($lstSach as $sachDTO){
        echo "<div class='col-xs-6 col-md-6 col-lg-3'>";
        echo " <div class='product wow fadeInUp'>";
        echo "<form action='#' target='' method='GET'>";
        echo " <div class='wrapper-img-product'>";
        echo "<img src='../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
        echo "</div>";
        echo "<div class='wrapper-content-product'>";
        echo "<p class='Title'>$sachDTO->TenSach</p>";
        echo " <p class='Price'>$sachDTO->GiaSach đ</p>";
        echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
        echo "</div>";
        echo "</form>";
        echo "</div> <!-- product -->";
        echo "</div>";
    }
?>