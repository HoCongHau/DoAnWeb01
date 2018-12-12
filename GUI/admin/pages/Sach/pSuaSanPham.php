<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 12-12-2018
 * Time: 00:22 AM
 */


    if(isset($_GET['id'])){
        $maSach = $_GET['id'];    
        $sachBUS =new SachBUS();
        $lstSach = $sachBUS->GetByID($maSach);

        $maLoaiSach = $lstSach->MaLoaiSach;
        $loaiS=new LoaiSachBUS();
        $tenSach=$loaiS->GetWithName($maLoaiSach);

        $maNXB = $lstSach->MaNhaXuatBan;
        $nhaxuatbanBUS = new NhaXuatBanBUS();
        $tenNXB = $nhaxuatbanBUS->GetByID($maNXB);
    }
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
                        <form action="admin.php?a=112&&id=<?php echo $maSach?>" method="POST" class="frmThemSP"  enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenSach">
                                    <input type="text" name="txtTenSach" placeholder="Nhập tên sách..." required value="<?php echo $lstSach->TenSach;?>">
                                </div>
                                <div class="col-xs-12 col-md-6 hinhAnh">
                                    <img id="blah" class="hinhSach" src="../../../../../DoAnWeb01/GUI/images/<?php echo $lstSach->HinhURL;?>" alt="your image" />
                                    <input type='file' onchange="readURL(this);" name="photo" id="" required/>
                                </div>
                                <div class="col-xs-12 col-md-6 giaSach">
                                    <input type="number" name="txtGiaSach" placeholder="Nhập giá bán..." required value="<?php echo $lstSach->GiaSach;?>">
                                </div>
                                <div class="col-xs-12 col-md-6 soLuongTon">
                                    <input type="number" name="txtSoLuongTon" placeholder="Nhập số lượng sách nhập kho..." required value="<?php echo $lstSach->SoLuongTon;?>">
                                </div>
                                <div class="col-xs-12 col-md-6 xuatXu">
                                    <input type="text" name="txtXuatXu" placeholder="Nhập nơi xuất xứ..." required value="<?php echo $lstSach->GiaSach;?>">
                                </div>
                                <div class="col-xs-12 col-md-6 loaiSach">
                                    <select class="" name="txtLoaiSach" required>
                                        <option disabled>--Chọn loại sách--</option>
                                        <option selected value='<?php echo $maLoaiSach;?>'><?php echo $tenSach->TenLoaiSach; ?></option>
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
                                        <option disabled>--Chọn nhà xuất bản--</option>
                                        <option selected value='<?php echo $maNXB;?>'><?php echo $tenNXB->TenNhaXuatBan; ?></option>
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
                                    <textarea name="txtMoTa" rows="5" placeholder="Nhập mô tả ..." required ><?php echo $lstSach->MoTa;?></textarea>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info " name="submit">Cập nhật sản phẩm</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>