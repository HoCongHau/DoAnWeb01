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
                        <p class="Title"> -- Thêm loại sản phẩm -- </p>
                        <form action="#" method="get" class="frmThemSP">
                            <div class="row">
                                <div class="col-12 tenLoaiSP">
                                    <input type="text" name="txtTenLoaiSanPham" placeholder="Nhập tên loại sản phẩm..." required>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-outline-info btnThem">Thêm loại sản phẩm</button>
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