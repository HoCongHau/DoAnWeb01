<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sachBUS = new SachBUS();
        $sach = $sachBUS->GetByID($id);
        $nhaXBBUS=new NhaXuatBanBUS();
        $ma=$sach->MaNhaXuatBan;
        $tenNXB=$nhaXBBUS->GetName($ma);

        //lấy tên tac gia:

        $tacGiaBUS=new TacGiaBUS();
        $tenTG=$tacGiaBUS->GetNameForm($id);
        $te="đang cập nhật";
        if(!empty($tenTG))
        {
            $tacGDTO=$TenTG[0];
            $te=$tacGDTO->TenGacGia;
        }


        echo "<div class='row'>";
        echo "<div class='col-xs-12 col-md-5 img-book'>";
        echo "<img src='../../../DoAnWeb01/GUI/images/$sach->HinhURL' alt=''>";
        echo "</div>";
        echo "<div class='col-xs-12 col-md-7 info-book'>";
        echo "<p class='titleBook'>$sach->TenSach</p>";
        echo "<p class='authorBook'>Tác giả : $te</p>";
        echo "<p class='priceBook'>Giá bán : ";
        echo number_format($sach->GiaSach,0,"",".");
        echo "đ</p>";
        echo "<hr>";
        echo "<p class='moreInfo'><i class='fas fa-eye'></i>&nbsp;Số lượt xem : $sach->SoLuocXem</p>";
        echo "<p class='moreInfo'><i class='fas fa-file-export'></i>&nbsp;Số lượng bán : $sach->SoLuongBan</p>";
        echo "<p class='moreInfo'><i class='fas fa-globe-asia'></i>&nbsp;Xuât xứ : $sach->XuatXu</p>";
        echo "<p class='moreInfo'><i class='fas fa-print'></i>&nbsp;Nhà xuất bản : $tenNXB</p>";
        echo "<hr>";

        echo "<form action='index.php?a=12&id=$sach->MaSach' target='' method='post'>";
        echo "<button type='submit' value='Submit' class='btn btn-info' >Thêm vào giỏ&nbsp;<i class='fas fa-cart-plus'></i></button>";
        //echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
        echo "</form>";

        echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12 description'>";
        echo "<b> $sach->TenSach </b> <br/>";
        echo "$sach->MoTa";
        echo "</div>";

        echo "</div> <!-- content -->";

        echo "<div class='container-fluid'>";
        echo "<div id='same-book' class='wow fadeInUp'>";
        echo "<h5 class='title-book'>sản phẩm cùng loại</h5>";
        echo "<div class='list-book'>";
        echo "<div class='owl-carousel owl-theme'>";


        $lstSach = $sachBUS->GetByMaLoai($sach->MaLoaiSach);

        foreach ($lstSach as $sachDTO) {
            echo "<div class='item''>";
            echo "<div class='product''>";
            echo "<form action='index.php?a=12&id=$sachDTO->MaSach' target='' method='post'>";
            echo "<div class='wrapper-img-product'>";
            //
            echo "<a class='product-img' href='index.php?a=8&id=$sachDTO->MaSach'>";
            echo "<img src='./../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
            echo "</a>";
            echo "</div>";
            echo "<div class='wrapper-content-product'>";
            echo _substr($sachDTO->TenSach, 40);
            //echo "<p class='Title'>$sachDTO->TenSach</p>";
            echo " <p class='Price'>";
            echo number_format($sachDTO->GiaSach,0,"",".");
            echo " đ</p>";
            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
            echo "</div>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }


        echo "</div>";
        echo "</div><!-- list-book -->";
        echo "</div> <!-- san pham cung loai -->";
    }
?>