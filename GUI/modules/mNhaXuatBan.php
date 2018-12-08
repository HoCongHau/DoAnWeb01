<div id="nhaxuatban" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;nhà xuất bản</h5>
    </div>
    <ul>
    <?php
            $nhaXuatBanBUS = new NhaXuatBanBUS();
            $lstNhaXuatBan= $nhaXuatBanBUS->GetAllAvailable();
            foreach($lstNhaXuatBan as $nhaXuatBanDTO){
                echo "<li><a href='#'><i class='fas fa-angle-right'></i>&nbsp;$nhaXuatBanDTO->TenNhaXuatBan</a></li>";
            }
        ?>
    </ul>
</div> <!-- nhaxuatban -->