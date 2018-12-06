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
                        <p class="Title"> -- Thêm sản phẩm -- </p>
                        <form action="#" method="get" class="frmThemSP">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 tenSach">
                                    <input type="text" name="txtTenSach" placeholder="Nhập tên sách..." require>
                                </div>
                                <div class="col-xs-12 col-md-6 hinhAnh">
                                    <input type="file" name="txtHinhAnh" id="" placeholder="Chọn hình ảnh..." require>
                                </div>
                                <div class="col-xs-12 col-md-6 giaSach">
                                    <input type="number" name="txtGiaSach" placeholder="Nhập giá bán..." require>
                                </div>
                                <div class="col-xs-12 col-md-6 loaiSach">
                                    <select class="" name="txtLoaiSach" require>
                                        <option disabled selected>--Chọn loại sách--</option>
                                        <option>Văn học</option>
                                        <option>Kinh tế</option>
                                        <option>Thiếu nhi</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-6 nhaXuatBan">
                                    <select class="" name="txtNXB" require>
                                        <option disabled selected>--Chọn nhà xuất bản--</option>
                                        <option>Kim Đồng</option>
                                        <option>Tổng Hợp TP.HCM</option>
                                        <option>Văn Lang</option>
                                    </select>
                                </div>
                                <div class="col-12 moTa">
                                    <textarea name="txtMoTa" rows="10" placeholder="Nhập mô tả ..." require></textarea>
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
    <div class="container-fluid">
        <div id="footer">
            <p>Copyright &copy; 2018. Thiết kế và duy trì bởi Hiếu Hậu Bookstrore</p>
        </div>
    </div> <!-- container-fluid -->
</body>
</html>