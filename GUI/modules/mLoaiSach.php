<div id="loaisach" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;thể loại sách</h5>
    </div>
    <ul>
        <?php
            $loaiSachBUS = new LoaiSachBUS();
            $lstLoaiSach= $loaiSachBUS->GetAllAvailable();
            foreach($lstLoaiSach as $loaiSachDTO){
                echo "<li><a href='#'><i class='fas fa-angle-right'></i>&nbsp;$loaiSachDTO->TenLoaiSach</a></li>";
            }
        ?>
    </ul>
</div> <!-- loaisach -->