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
                        <p class="Title"> -- Quản lý đơn hàng -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <!-- <button type="button" class="btn btn-outline-info them">Thêm đơn hàng</button> -->
                            </div>
                            <div class="col-xs-12 col-md-5 text-right search">
                                <form action="admin.php?a=6" target="" method="POST">
                                    <div class="input-group">
                                        <input type="text" name="search" value="" placeholder="Nhập mã đơn hàng cần tìm ..">
                                        <button type="submit" value="Submit" class="btn btn-info"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->
                        <div class="row text-center barGhiChu">
                            <div class="col-xs-hidden col-sm-1"></div>
                            <div class="col-xs-6 col-sm-2">
                                <span class="dangChoXuLy blockGhiChuTT"></span>
                                <span>Đang chờ xử lý</span>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <span class="dangDongGoi blockGhiChuTT"></span>
                                <span>Đang đóng gói</span>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <span class="dangGiao blockGhiChuTT"></span>
                                <span>Đang giao</span>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <span class="daGiao blockGhiChuTT"></span>
                                <span>Đã giao</span>
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <span class="daHuy blockGhiChuTT"></span>
                                <span>Đã huỷ</span>
                            </div>
                            <div class="col-xs-hidden col-sm-1"></div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Mã ĐH</th>
                                            <th scope="col">Ma TK</th>
                                            <th scope="col">Ngày Lập</th>
                                            <th scope="col">Tổng tiền</th>
                                            <th scope="col">Sửa/Xem chi tiết</th>
                                            <th scope="col">Tạm xóa/Gỡ xóa</th>  
                                            <th scope="col">Xóa hoàn toàn</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include(__DIR__."./../../modules/DonHang/mDonHang.php");
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