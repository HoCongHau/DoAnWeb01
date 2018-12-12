</div>
<div class="row phanTrang">
    <div class="col-12">
        <?php
        // PHẦN HIỂN THỊ PHÂN TRANG
        // Button trang trước
        if ($currentPage > 1 && $totalPage > 1){
            echo '<a href="admin.php?page='.($currentPage-1).'">Prev</a>&nbsp;';
        }

        // Lặp khoảng giữa
        for ($i = 1; $i <= $totalPage; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span để không click vào nữa
            // ngược lại hiển thị thẻ a
            if ($i == $currentPage){
                echo '<span>'.$i.'</span>&nbsp;';
            }
            else{
                echo '<a href="admin.php?page='.$i.'">'.$i.'</a>&nbsp;';
            }
        }

        // nếu currentPage < $totalPage và totalPage > 1 mới hiển thị nút prev
        if ($currentPage < $totalPage && $totalPage > 1){
            echo '<a href="admin.php?page='.($currentPage+1).'">Next</a>&nbsp;';
        }
                ?>
    </div>
</div>