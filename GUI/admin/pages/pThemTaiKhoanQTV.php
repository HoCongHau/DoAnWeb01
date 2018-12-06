<?php include("../modules/mHead.php"); ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("../modules/mHeader.php");?>
            <div id="main">
                <div class="row">
                    <!-- vung side-bar -->
                    <?php include("../modules/mSidebar.php");?>

                    <!-- vung content -->
                    <div id="content" class="col-xs-12 col-md-9">
                        <p class="Title"> -- Thêm quản trị viên -- </p>
                        <form action="#" method="get" class="frmThemSP">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenLoaiSP">
                                    <label for="txtTenNXB">Nhập tên nhà xuất bản</label>
                                    <input type="text" name="txtTenNXB" require>
                                </div>
                                <div class="col-xs-12 col-md-6 logoNXB">
                                    <label for="txtLogoNXB">Chọn logo nhà xuất bản</label>
                                    <input type="file" name="txtLogoNXB" id="" require>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info btnThem">Thêm nhà xuất bản</button>
                                </div>
                            </div> <!-- end row -->
                        </form> <!-- end form -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>
    <div class="container-fluid">
        <div id="footer">
            <p>Copyright &copy; 2018. Thiết kế và duy trì bởi Hiếu Hậu Bookstrore</p>
        </div>
    </div> <!-- container-fluid -->
</body>
</html>