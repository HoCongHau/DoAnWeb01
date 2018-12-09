<div id="nhaxuatban" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;nhà xuất bản</h5>
    </div>
    <ul>
    <?php
            $nhaXuatBanBUS = new NhaXuatBanBUS();
            $lstNhaXuatBan= $nhaXuatBanBUS->GetAllAvailable();
            foreach($lstNhaXuatBan as $nhaXuatBanDTO){
                echo "<a href='index.php?a=11&&nxb=$nhaXuatBanDTO->MaNhaXuatBan'><li><i class='fas fa-angle-right'></i>&nbsp;$nhaXuatBanDTO->TenNhaXuatBan</li></a>";
            }
        ?>
    </ul>
</div> <!-- nhaxuatban -->