<?php //include("../modules/mHead.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <?php include(__DIR__."./../modules/mHeader.php");?>
            <div id="main">
                <div class="row">
                    <!-- vung side-bar -->
                    <?php include(__DIR__."./../modules/mSidebar.php");?>

                    <!-- vung content -->
                    <div id="content" class="col-xs-12 col-md-9">
                        <p class="Title"> -- Quản lý loại sản phẩm -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="../pages/pThemLoaiSanPham.php">Thêm loại sản phẩm</a></button>
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
                                            <th scope="col">Mã Loại Sản Phẩm</th>
                                            <th scope="col">Tên Loại Sản Phẩm</th>
                                            <th scope="col">Bị Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr  class="daXoa">
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maLoaiSP">001</td>
                                            <td class="tenLoaiSP">Khoa Học - Kỹ Thuật</td>
                                            <td class="biXoa"><i class="fas fa-check"></i></td>
                                        </tr>
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maLoaiSP">001</td>
                                            <td class="tenLoaiSP">Khoa Học - Kỹ Thuật</td>
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