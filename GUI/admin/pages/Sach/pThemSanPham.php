<?php
   /*  if(isset($_GET['id'])){
        $ = $_GET['id'];    
        $NhaXuatBanBUS =new NhaXuatBanBUS();
        $lstNXB = $NhaXuatBanBUS->GetByID($maNXB);
    } */
?>

    <div class="container-fluid">
        <div class="row">
            <?php include(__DIR__."./../../modules/mHeader.php");?>
            <div id="main">
                <div class="row">
                    <!-- vung side-bar -->
                    <?php include(__DIR__."./../../modules/mSidebar.php");?>

                    <!-- vung content -->
                    <div id="content" class="col-xs-12 col-md-10">
                        <p class="Title"> -- Thêm sản phẩm -- </p>
                        <form action="admin.php?a=114" method="POST" class="frmThemSP">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenSach">
                                    <input type="text" name="txtTenSach" placeholder="Nhập tên sách..." required>
                                </div>
                                <div class="col-xs-12 col-md-6 hinhAnh">
                                    <img id="blah" class="hinhSach" src="../../../../../DoAnWeb01/GUI/images/<?php echo $lstNXB->LogoURL;?>" alt="your image" />
                                    <input type='file' onchange="readURL(this);" name="txtHinhAnh" id="" required/>
                                </div>
                                <div class="col-xs-12 col-md-6 giaSach">
                                    <input type="number" name="txtGiaSach" placeholder="Nhập giá bán..." required>
                                </div>
                                <div class="col-xs-12 col-md-6 soLuongTon">
                                    <input type="number" name="txtSoLuongTon" placeholder="Nhập số lượng sách nhập kho..." required>
                                </div>
                                <div class="col-xs-12 col-md-6 xuatXu">
                                    <input type="text" name="txtXuatXu" placeholder="Nhập nơi xuất xứ..." required>
                                </div>
                                <div class="col-xs-12 col-md-6 loaiSach">
                                    <select class="" name="txtLoaiSach" required>
                                        <option disabled selected>--Chọn loại sách--</option>
                                        <?php
                                            $loaiSachBUS = new LoaiSachBUS();
                                            $lstLoaiSach= $loaiSachBUS->GetAllAvailable();
                                            foreach($lstLoaiSach as $loaiSachDTO){
                                                echo "<option value='$loaiSachDTO->MaLoaiSach'>$loaiSachDTO->TenLoaiSach</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-6 nhaXuatBan">
                                    <select class="" name="txtNXB" required>
                                        <option disabled selected>--Chọn nhà xuất bản--</option>
                                        <?php
                                            $nhaXuatBanBUS = new NhaXuatBanBUS();
                                            $lstNhaXuatBan= $nhaXuatBanBUS->GetAllAvailable();
                                            foreach($lstNhaXuatBan as $nhaXuatBanDTO){
                                                echo "<option value='$nhaXuatBanDTO->MaNhaXuatBan'>$nhaXuatBanDTO->TenNhaXuatBan</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 moTa">
                                    <textarea name="txtMoTa" rows="5" placeholder="Nhập mô tả ..." required></textarea>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info ">Thêm sản phẩm</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>