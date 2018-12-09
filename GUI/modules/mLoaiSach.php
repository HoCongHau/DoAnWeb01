<div id="loaisach" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;thể loại sách</h5>
    </div>
    <ul>
        <?php
            $loaiSachBUS = new LoaiSachBUS();
            $lstLoaiSach= $loaiSachBUS->GetAllAvailable();
            foreach($lstLoaiSach as $loaiSachDTO){
                echo "<a href='index.php?a=10&&loaisach=$loaiSachDTO->MaLoaiSach'><li><i class='fas fa-angle-right'></i>&nbsp;$loaiSachDTO->TenLoaiSach</li></a>";
            }
        ?>
    </ul>
</div> <!-- loaisach -->