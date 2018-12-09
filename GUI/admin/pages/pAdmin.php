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
                        <p class="Title"> -- Quản lý sản phẩm -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="admin.php?a=7">Thêm sản phẩm</a></button>
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
                                            <th scope="col">Số Lượng tồn</th>
                                            <th scope="col">Mã sách</th>
                                            <th scope="col">Tên sách</th>
                                            <th scope="col">Xuất Xứ</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Giá sách</th>
                                            <th scope="col">Ngày nhập</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Mã L.Sách</th>
                                            <th scope="col">Mã NXB</th>
                                            <th scope="col">Bị xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--
                                        <tr>
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="soLuong">100</td>
                                            <td class="maSach">001</td>
                                            <td class="tenSach">Đắc Nhân Tâm</td>
                                            <td class="hinhAnh"><img src="../../images/8935086838143_2.jpg" alt=""></td>
                                            <td class="giaSach">45.000đ</td>
                                            <td class="ngNhap">25/12/2017</td>
                                            <td class="moTa">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum esse pariatur ullam ipsam quasi quam sapiente aperiam veniam temporibus, quos exercitationem eos soluta repudiandae. Illo suscipit sint aspernatur incidunt aliquid.</td>
                                            <td class="maLoaiSach">1</td>
                                            <td class="maNXB">5</td>
                                            <td class="biXoa"><i class="fas fa-times"></i></td>
                                        </tr>
                                        -->
                                        <?php
                                            $sachBUS=new SachBUS();
                                            $lstSach=$sachBUS->GetAll();
                                            foreach ($lstSach as $sachDTO){
                                                echo "<tr>";
                                                echo "<td class='edit'><a href=''><i class='fas fa-edit'></i></a> </td>";
                                                echo "<td class='remove'><a href=''><i class='fas fa-trash-alt'></i></a></td>";
                                                echo "<td class='soLuongTon'>$sachDTO->SoLuongTon</td>";
                                                echo "<td class='maSach'>$sachDTO->MaSach</td>";
                                                echo "<td class='tenSach'>$sachDTO->TenSach</td>";
                                                echo "<td calss='xuatXu'>$sachDTO->XuatXu</td>";
                                                echo "<td class='hinhAnh'><img src='./../../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''></td>";
                                                echo "<td class='giaSach'>$sachDTO->GiaSach</td>";
                                                echo "<td class='ngNhap'>$sachDTO->NgayNhap</td>";
                                                echo "<td class='moTa'>$sachDTO->MoTa</td>";
                                                echo "<td class='maLoaiSach'>$sachDTO->MaLoaiSach</td>";
                                                echo "<td class='maNXB'>$sachDTO->MaNhaXuatBan</td>";
                                                echo "<td class='biXoa'><i class='fas fa-times'></i></td>";
                                                echo "</tr>";
                                            }
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