<?php
    $sachBUS = new SachBUS();
    
    // đếm tổng số sách hiện có mà chưa bị xóa
    $totalRecords = $sachBUS->DemSoSach();

    // lấy trang hiện tại
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // số sách trên 1 page
    $recordPerPage = 20;
    
    // tính tổng số trang có thể có = lấy tổng sách / số sách trên 1 trang và làm tròn lên
    $totalPage = ceil($totalRecords/$recordPerPage);


    // nếu người dùng nhập vào trang hiện tại lớn hơn tổng trang quy định
    if ($currentPage > $totalPage){
        $currentPage = $totalPage; // gán trang hiện tại là trang cuối cùng
    }
    else if ($currentPage < 1){ // nếu nhập trang nhỏ hơn 1
        $currentPage = 1; // gán trang hiện tại là trang đầu tiên
    }

    // Tính $offset (vị trí bắt đầu của mỗi trang)
    $offset = ($currentPage-1)*$recordPerPage;

    $lstSach = $sachBUS->GetAllowLimit($offset, $recordPerPage);
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
        echo " <p class='Price'>$sachDTO->GiaSach đ</p>";
        echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
        echo "</div>";
        echo "</form>";
        echo "</div> <!-- product -->";
        echo "</div>";
    }
?>
</div>
<div class="row phanTrang">
    <div class="col-12">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // Button trang trước
        if ($currentPage > 1 && $totalPage > 1){
            echo '<a href="index.php?page='.($currentPage-1).'">Prev</a>&nbsp;';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $totalPage; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span để không click vào nữa
            // ngược lại hiển thị thẻ a
            if ($i == $currentPage){
                echo '<span>'.$i.'</span>&nbsp;';
            }
            else{
                echo '<a href="index.php?page='.$i.'">'.$i.'</a>&nbsp;';
            }
        }

        // nếu currentPage < $totalPage và totalPage > 1 mới hiển thị nút prev
        if ($currentPage < $totalPage && $totalPage > 1){
            echo '<a href="index.php?page='.($currentPage+1).'">Next</a>&nbsp;';
        }
                ?>
    </div>
</div>