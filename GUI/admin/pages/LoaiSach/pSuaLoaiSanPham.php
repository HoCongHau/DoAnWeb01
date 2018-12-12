<?php 
    if(isset($_GET['id'])){
        $maLoaiSach = $_GET['id'];    
        $loaiS=new LoaiSachBUS();
        $tenSach=$loaiS->GetWithName($maLoaiSach);
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
                        <p class="Title"> -- Sửa loại sản phẩm -- </p>
                        <form action="admin.php?a=105&&id=<?php echo $maLoaiSach;?>" method="POST" class="frmThemSP">
                            <div class="row">
                                <div class="col-12 tenLoaiSP">
                                    <input type="text" name="txtTenLoaiSanPham" placeholder="Nhập tên loại sản phẩm cần sửa..." value="<?php echo $tenSach->TenLoaiSach;?>" required>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info btnThem">Cập nhật</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>