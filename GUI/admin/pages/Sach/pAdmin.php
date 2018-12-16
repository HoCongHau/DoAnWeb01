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
                    <p class="Title"> -- Quản lý sản phẩm -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="admin.php?a=7">Thêm sản phẩm</a></button>
                            </div>
                            <div class="col-xs-12 col-md-5 text-right search">
                                <form action="" target="" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" value="" placeholder="Nhập tên cần tìm ..">
                                        <button type="submit" value="Submit" class="btn btn-info"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12 text-right ghiChu">
                                <span><b>Ghi Chú: </b></span> &nbsp;
                                <span class="blockGhiChu"></span>&nbsp;
                                <span>đang đánh dấu xóa</span>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>                                  
                                            <th scope="col">Mã sách</th>
                                            <th scope="col">Tên sách</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Giá sách</th>
                                            <th scope="col">Ngày nhập</th>
                                            <th scope="col">Số Lượng tồn</th>
                                            <th scope="col">Số lượng bán</th>
                                            <th scope="col">Mã L.Sách</th>
                                            <th scope="col">Mã NXB</th>
                                            <th scope="col">Sửa/Xem chi tiết</th>
                                            <th scope="col">Tạm xóa/Gỡ xóa</th>  
                                            <th scope="col">Xóa hoàn toàn</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include(__DIR__."./../../modules/Sach/mSach.php"); ?>
                                    </tbody>
                                </table>
                            </div> 
                            <?php include(__DIR__."./../../modules/mNavigationAdmin.php"); ?>
                        </div> <!-- end row --> 
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>