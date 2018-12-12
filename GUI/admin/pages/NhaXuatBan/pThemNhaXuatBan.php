<?php //include("../modules/mHead.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <?php include(__DIR__."./../../modules/mHeader.php");?>
            <div id="main">
                <div class="row">
                    <!-- vung side-bar -->
                    <?php include(__DIR__."./../../modules/mSidebar.php");?>

                    <!-- vung content -->
                    <div id="content" class="col-xs-12 col-md-10">
                        <p class="Title"> -- Thêm nhà xuất bản -- </p>
                        <form action="admin.php?a=108" method="POST" class="frmThemSP">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenLoaiSP">
                                    <label for="txtTenNXB">Nhập tên nhà xuất bản</label>
                                    <input type="text" name="txtTenNXB" required>
                                </div>
                                <div class="col-xs-12 col-md-6 logoNXB">
                                    <label for="txtLogoNXB">Chọn logo nhà xuất bản</label>
                                    <input type="file" name="txtLogoNXB" id="" required>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info btnThem" value="btnThem">Thêm nhà xuất bản</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>