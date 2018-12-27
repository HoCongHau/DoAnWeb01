<?php 
    if(isset($_GET['id'])){
        $MaDonDatHang = $_GET['id'];    
        
        $donDatHangBUS = new DonDatHangBUS();
        $donDatHang = $donDatHangBUS->GetByID($MaDonDatHang);
    }
?>
<div class="container-fluid">
    <div class="row">
        <?php include(__DIR__."./../../modules/mHeader.php");?>
        <div id="main">
            <div class="row">
                <!-- vung side-bar -->
                <?php include(__DIR__."./../../modules/mSidebar.php");?>

                <!-- vung content -->
                <div id="content" class="col-xs-12 col-md-10">
                    <p class="Title"> -- Sửa tình trạng đơn hàng -- </p>
                    <form action="admin.php?a=118&id=<?php echo $MaDonDatHang; ?>" method="POST" class="frmCapNhatTinhTrang">
                        <div class="row text-center">
                            <div class="col-xs-hidden col-sm-1"></div>
                            <div class="col-xs-6 col-sm-2">
                                <p>Đang chờ xử lý</p>
                                <input type="radio" name="updateTinhTrang" value="1" id="" class="capNhatTinhTrang">
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <p>Đang đóng gói</p>
                                <input type="radio" name="updateTinhTrang" value="2"  id="" class="capNhatTinhTrang">
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <p>Đang giao</p>
                                <input type="radio" name="updateTinhTrang" value="3" id="" class="capNhatTinhTrang">
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <p>Đã giao</p>
                                <input type="radio" name="updateTinhTrang" value="4" id="" class="capNhatTinhTrang">
                            </div>
                            <div class="col-xs-6 col-sm-2">
                                <p>Đã huỷ</p>
                                <input type="radio" name="updateTinhTrang" value="5" id="" class="capNhatTinhTrang">
                            </div>
                            <div class="col-xs-hidden col-sm-1"></div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" value ="submit" class="btn btn-outline-info btnThem">Cập nhật</button>
                            </div>
                        </div>
                    </form> <!-- end form -->
                    <hr>
                    <p class="Title"> -- Chi tiết đơn đặt hàng -- </p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p>Mã Tài Khoản : <b style="color:red;"><?php echo $donDatHang->MaTaiKhoan?></b></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p>Mã Đơn Đặt Hàng : <b style="color:red;"><?php echo $MaDonDatHang?></b></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p>Ngày Lập : <b style="color:red;"><?php echo $donDatHang->NgayLap?></b></p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <p>Tổng Tiền : <b style="color:red;"><?php echo number_format($donDatHang->TongThanhTien,0,"",".");?>đ</b></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">Mã Chi Tiết</th>
                                        <th scope="col">Mã Sách</th>
                                        <th scope="col">Số lượng</th>  
                                        <th scope="col">Đơn giá</th>   
                                        <th scope="col">Thành tiền</th>   
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $chiTietBUS = new ChiTietDonDatHangBUS();
                                        $lst = $chiTietBUS->GetByMaDonHang($MaDonDatHang);
                                        /*  $lstChiTiet = $chiTietBUS->GetByMaDonHang($MaDonDatHang); */
                                        foreach ($lst as $chitietDonHang){
                                            echo "<tr>";
                                            echo "<td class='maChiTiet'>$chitietDonHang->MaChiTietDonDatHang</td>";
                                            echo "<td class='maSach'>$chitietDonHang->MaSach</td>";
                                            echo "<td class='soLuong'>$chitietDonHang->SoLuong</td>";
                                            echo "<td class='donGia'>";
                                            echo number_format($chitietDonHang->GiaBan,0,"","."); 
                                            echo "đ</td>";
                                            $thanhTien = $chitietDonHang->SoLuong * $chitietDonHang->GiaBan;
                                            echo "<td class='thanhTien'>";
                                            echo number_format($thanhTien,0,"",".");
                                            echo "đ</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end row -->
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="admin.php?a=17&&id=<?php echo $MaDonDatHang?>" class="btn btn-outline-info btnThem">Xuất Hoá Đơn</a>
                        </div>
                    </div>
                </div> <!-- end content -->
            </div> <!-- end row sau main -->
        </div> <!-- end main -->
    </div>
</div>