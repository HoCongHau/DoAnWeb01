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
                                        <?php
                                            $sachBUS=new SachBUS();
                                            include(__DIR__."./../../modules/mTinhToanChoPhanTrangAdmin.php");
                                            
                                            $lstSach = $sachBUS->GetAllAllowLimit($offset, $recordPerPage);
                                            /* $lstSach=$sachBUS->GetAllDescDate(); */
                                            foreach ($lstSach as $sachDTO){
                                                echo "<tr class='trangThaiXoa$sachDTO->BiXoa'>";
                                                echo "<td class='maSach'>$sachDTO->MaSach</td>";
                                                echo "<td class='tenSach'>";
                                                echo _substr($sachDTO->TenSach,20);
                                                echo "</td>";
                                                echo "<td class='hinhAnh'><img src='./../../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''></td>";
                                                echo "<td class='giaSach'>$sachDTO->GiaSach</td>";
                                                echo "<td class='ngNhap'>$sachDTO->NgayNhap</td>";
                                                echo "<td class='soLuongTon'>$sachDTO->SoLuongTon</td>";
                                                echo "<td class='soLuongBan'>$sachDTO->SoLuongBan</td>";
                                                echo "<td class='maLoaiSach'>$sachDTO->MaLoaiSach</td>";
                                                echo "<td class='maNXB'>$sachDTO->MaNhaXuatBan</td>";
                                                echo "<td class='edit'><a href='admin.php?a=14&&id=$sachDTO->MaSach'><i class='fas fa-edit'></i></a> </td>";
                                                echo "<td class='remove'><a href='admin.php?a=113&&id=$sachDTO->MaSach&&status=$sachDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
                                                echo "<td class='remove'><a href='admin.php?a=111&&id=$sachDTO->MaSach'><i class='fas fa-trash-alt'></i></a></td>";
                                                echo "</tr>";
                                            }
                                        ?>
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