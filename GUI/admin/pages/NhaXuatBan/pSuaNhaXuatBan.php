<?php 
    if(isset($_GET['id'])){
        $maNXB = $_GET['id'];    
        $NhaXuatBanBUS =new NhaXuatBanBUS();
        $lstNXB = $NhaXuatBanBUS->GetByID($maNXB);
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
                        <p class="Title"> -- Sửa nhà xuất bản -- </p>
                        <form action="admin.php?a=109&&id=<?php echo $maNXB?>" method="POST" class="frmThemSP" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenLoaiSP">
                                    <label for="txtTenNXB">Nhập tên nhà xuất bản</label>
                                    <input type="text" name="txtTenNXB" required value="<?php echo $lstNXB->TenNhaXuatBan;?>"> 
                                </div>
                                <div class="col-xs-12 col-md-6 logoNXB">
                                    <label for="fileUpload">Chọn logo nhà xuất bản</label> <br>
                                    <img id="blah" class="hinhNXB" src="../../../../../DoAnWeb01/GUI/images/<?php echo $lstNXB->LogoURL;?>" alt="your image" />
                                    <input type='file' onchange="readURL(this);" name="photo" id=""/>                   
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info btnThem" name="submit" value="btnThem">Cập nhật NXB</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>