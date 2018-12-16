<div id="timkiemnangcao" class="style-sidebar">
    <div class="sb-title">
        <h5><i class="fas fa-book-reader"></i>&nbsp;tìm kiếm nâng cao</h5>
    </div>
    <form action="" target="" method="GET">
        <input type="text" name="searchAdvange" hidden>
        <div class="form-group">
            <select name="loaisach" class="form-control">
                <option selected value="">chọn thể loại sách</option>
                <?php
                    $loaiSachBUS = new LoaiSachBUS();
                    $lstLoaiSach= $loaiSachBUS->GetAllAvailable();
                    foreach($lstLoaiSach as $loaiSachDTO){
                        echo "<option value='$loaiSachDTO->MaLoaiSach'>$loaiSachDTO->TenLoaiSach</option></li>";
                    }
                ?>
            </select>
            <select name="nhaxuatban" class="form-control">
                <option selected value="">chọn nhà xuất bản</option>
                <?php
                    $nhaXuatBanBUS = new NhaXuatBanBUS();
                    $lstNhaXuatBan= $nhaXuatBanBUS->GetAllAvailable();
                    foreach($lstNhaXuatBan as $nhaXuatBanDTO){
                        echo "<option value='$nhaXuatBanDTO->MaNhaXuatBan'>$nhaXuatBanDTO->TenNhaXuatBan</option>";
                    }
                ?>
            </select>
            <!-- <select name="tacgia" class="form-control">
                    <option selected value="">chọn tác giả</option>
                    <?php
                        $tacgiaBUS = new TacGiaBUS();
                        $lstTacGia= $tacgiaBUS->GetAllAvailable();
                        foreach($lstTacGia as $tacgiaDTO){
                            echo "<option value='$tacgiaDTO->MaTacGia'>$tacgiaDTO->TenTacGia</option>";
                        }
                    ?>
                </select> -->
            <select name="giatien" class="form-control">
                <option selected value="">chọn giá tiền</option>
                <option value="0-49999">Dưới 50.000đ</option>
                <option value="50000-149999">Từ 50.000đ đến dưới 150.000đ</option>
                <option value="150000-299999">Từ 150.000đ đến dưới 300.000đ</option>
                <option value="300000-%">Trên 300.000đ</option>
            </select>
        <input type="submit" class="btn btn-info" value="Tìm kiếm nâng cao"> 
        </div>
    </form>
    </div> <!-- timkiemnangcao -->