<div id="timkiemnangcao" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;tìm kiếm nâng cao</h5>
    </div>
    <form action="#" target="" method="GET">
        <div class="form-group">
            <select name="loaisach" class="form-control">
                <option disabled selected>chọn thể loại sách</option>
                <?php
                    $loaiSachBUS = new LoaiSachBUS();
                    $lstLoaiSach= $loaiSachBUS->GetAllAvailable();
                    foreach($lstLoaiSach as $loaiSachDTO){
                        echo "<option value='$loaiSachDTO->MaLoaiSach'>$loaiSachDTO->TenLoaiSach</option></li>";
                    }
                ?>
            </select>
            <select name="nhaxuatban" class="form-control">
                <option disabled selected>chọn nhà xuất bản</option>
                <?php
                    $nhaXuatBanBUS = new NhaXuatBanBUS();
                    $lstNhaXuatBan= $nhaXuatBanBUS->GetAllAvailable();
                    foreach($lstNhaXuatBan as $nhaXuatBanDTO){
                        echo "<option value='$nhaXuatBanDTO->MaNhaXuatBan'>$nhaXuatBanDTO->TenNhaXuatBan</option>";
                    }
                ?>
            </select>
            <select name="tacgia" class="form-control">
                    <option disabled selected>chọn tác giả</option>
                    <?php
                        $tacGiaBUS =  new TacGiaBUS();
                        $lstTacGia = $tacGiaBUS->GetAllAvailable();
                        foreach($lstTacGia as $tacGiaDTO){
                            echo "option value='$tacGiaDTO->MaTacGia'>$tacGiaDTO->TenTacGia</option>";
                        }
                    ?>
                </select>
            <select name="giatien" class="form-control">
                <option disabled selected>chọn giá tiền</option>
                <option value="1">Dưới 50.000đ</option>
                <option value="2">Từ 50.000đ đến dưới 150.000đ</option>
                <option value="3">Từ 150.000đ đến dưới 300.000đ</option>
                <option value="4">Trên 300.000đ</option>
            </select>
        <input type="submit" class="btn btn-info" value="Tìm kiếm nâng cao"> 
        </div>
    </form>
    </div> <!-- timkiemnangcao -->