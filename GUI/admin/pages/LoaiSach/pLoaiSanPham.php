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
                        <p class="Title"> -- Quản lý loại sản phẩm -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="admin.php?a=9">Thêm loại sản phẩm</a></button>
                            </div>
                            <div class="col-xs-12 col-md-5 text-right search">
                                <form action="admin.php?a=3" target="" method="POST">
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
                                            <th scope="col" width="30px">Mã LSP</th>
                                            <th scope="col" width="200px">Tên Loại Sản Phẩm</th>
                                            <th scope="col" width="30px">Sửa</th>
                                            <th scope="col" width="50px">Tạm Xóa/Gỡ Xóa</th>
                                            <th scope="col" width="30px">Xóa hoàn toàn</th>
                                            <!-- <th scope="col" width="30px">Bị Xóa</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include(__DIR__."./../../modules/LoaiSach/mLoaiSach.php");
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>