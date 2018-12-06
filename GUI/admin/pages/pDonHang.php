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
                        <p class="Title"> -- Quản lý đơn hàng -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them">Thêm đơn hàng</button>
                            </div>
                            <div class="col-xs-12 col-md-5 text-right search">
                                <form action="#" target="" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" value="" placeholder="Nhập từ khóa cần tìm ..">
                                        <button type="submit" value="Submit" class="btn btn-info"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                        <th scope="col">Sửa</th>
                                            <th scope="col">Xóa</th>
                                            <th scope="col">Mã ĐH</th>
                                            <th scope="col">Tên TK</th>
                                            <th scope="col">Ngày Lập</th>
                                            <th scope="col">Tổng tiền</th>
                                            <th scope="col">Tình Trạng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang dangXuLy">đang xử lý</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">20/1/2018</td>
                                            <td class="tongTien">250.000đ</td>
                                            <td class="tinhTrang dangGiao">đang giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">15/8/2018</td>
                                            <td class="tongTien">190.000đ</td>
                                            <td class="tinhTrang daGiao">đã giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang daHuy">đã hủy</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang dangXuLy">đang xử lý</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">20/1/2018</td>
                                            <td class="tongTien">250.000đ</td>
                                            <td class="tinhTrang dangGiao">đang giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">15/8/2018</td>
                                            <td class="tongTien">190.000đ</td>
                                            <td class="tinhTrang daGiao">đã giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang daHuy">đã hủy</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang dangXuLy">đang xử lý</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">20/1/2018</td>
                                            <td class="tongTien">250.000đ</td>
                                            <td class="tinhTrang dangGiao">đang giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="ngayLap">15/8/2018</td>
                                            <td class="tongTien">190.000đ</td>
                                            <td class="tinhTrang daGiao">đã giao</td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Trung Hiếu</td>
                                            <td class="ngayLap">23/5/2018</td>
                                            <td class="tongTien">150.000đ</td>
                                            <td class="tinhTrang daHuy">đã hủy</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end row -->
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