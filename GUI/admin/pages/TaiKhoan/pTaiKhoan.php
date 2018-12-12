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
                        <p class="Title"> -- Quản lý tài khoản -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="admin.php?a=12">Thêm tài khoản quản trị viên</a></button>
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
                                            <th scope="col">Mã TK</th>
                                            <th scope="col">Tên TK</th>
                                            <th scope="col">Mật Khẩu</th>
                                            <th scope="col">Tên Hiển Thị</th>
                                            <th scope="col">Ngày sinh</th>
                                            <th scope="col">Địa Chỉ</th>
                                            <th scope="col">Loại TK</th>
                                            <th scope="col">Sửa/Xem chi tiết</th>
                                            <th scope="col">Tạm xóa/Gỡ xóa</th>  
                                            <th scope="col">Xóa hoàn toàn</th>    
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                            $taiKhoanBUS=new TaiKhoanBUS();
                                            $lstTaiKhoan=$taiKhoanBUS->GetAll();
                                            foreach ($lstTaiKhoan as $taiKhoanDTO) {


                                                echo "<tr  class='trangThaiXoa$taiKhoanDTO->BiXoa'>";
                                                
                                                echo "<td class='maTK'>$taiKhoanDTO->MaTaiKhoan</td>";
                                                echo "<td class='tenTK'>$taiKhoanDTO->TenDangNhap</td>";
                                                echo "<td class='matKhau'>$taiKhoanDTO->MatKhau</td>";
                                                echo "<td class='tenHT'>$taiKhoanDTO->TenHienThi</td>";
                                                echo "<td class='ngaySinh'>$taiKhoanDTO->NgaySinh</td>";
                                                echo "<td class='diaChi'>$taiKhoanDTO->DiaChi</td>";
                                                $tenLoai;
                                                if($taiKhoanDTO->MaLoaiTaiKhoan==222)
                                                    $tenLoai="User";
                                                else
                                                    $tenLoai="Admin";
                                                echo "<td class='loaiTK'>$tenLoai</td>";
                                                echo "<td class='edit'><a href='admin.php?a=15&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-edit'></i></a> </td>";
                                                echo "<td class='remove'><a href='admin.php?a=115&&id=$taiKhoanDTO->MaTaiKhoan&&status=$taiKhoanDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
                                                echo "<td class='remove'><a href='admin.php?a=116&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-trash-alt'></i></a></td>";
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