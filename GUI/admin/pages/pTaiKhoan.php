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
                        <p class="Title"> -- Quản lý tài khoản -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="../pages/pThemTaiKhoanQTV.php">Thêm tài khoản quản trị viên</a></button>
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
                            <div class="col-xs-12 col-md-">

                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sửa</th>
                                            <th scope="col">Xóa</th>
                                            <th scope="col">Mã TK</th>
                                            <th scope="col">Tên TK</th>
                                            <th scope="col">Mật Khẩu</th>
                                            <th scope="col">Tên Hiển Thị</th>
                                            <th scope="col">Địa Chỉ</th>
                                            <th scope="col">Điện thoại</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Loại TK</th>
                                            <th scope="col">Bị Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">1</td>
                                            <td class="tenTK">admin</td>
                                            <td class="matKhau">e99a18c428cb38d5f260853678922e03</td>
                                            <td class="tenHT">admin</td>
                                            <td class="diaChi">227 Nguyễn Văn Cừ, phường 4, quận 5, TPHCM</td>
                                            <td class="dienThoai">0123456789</td>
                                            <td class="email">hieuhauboolstore@gmail.com</td>
                                            <td class="loaiTK">Admin</td>
                                            <td class="biXoa"><i class="fas fa-times"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maTK">2</td>
                                            <td class="tenTK">Hồ Công Hậu</td>
                                            <td class="matKhau">e99a18c428cb38d5f260853678922e03</td>
                                            <td class="tenHT">josephhau</td>
                                            <td class="diaChi">Lý Thường Kiệt, phường 15, quận 11, TPHCM</td>
                                            <td class="dienThoai">0513159921</td>
                                            <td class="email">hauphubinh013027@gmail.com</td>
                                            <td class="loaiTK">User</td>
                                            <td class="biXoa"><i class="fas fa-times"></i></td>
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