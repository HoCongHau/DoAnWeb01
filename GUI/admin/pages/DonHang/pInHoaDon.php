<?php 
    if(isset($_GET['id'])){
        $MaDonDatHang = $_GET['id'];    
        
        $donDatHangBUS = new DonDatHangBUS();
        $donDatHang = $donDatHangBUS->GetByID($MaDonDatHang);

        $taiKhoanBUS = new TaiKhoanBUS();
        $taiKhoan = $taiKhoanBUS->GetById($donDatHang->MaTaiKhoan);
    }
?>
    <div class="container-fluid">
        <div class="row">
            <div id="main">
                <div class="row">
                    <!-- vung content -->
                    <div id="content" class="col-12">
                        <!-- <div class="imgLogo"><img src="../../../../../DoAnWeb01/GUI/images/logo-03.png" alt=""></div> -->
                        <p class="pInPhieu"><b>Hiếu Hậu BookStore</b></p>
                        <p class="pInPhieu">Địa chỉ : 227 Nguyễn Văn Cừ, Quận 5, TP.HCM</p>
                        <p class="pInPhieu">Điện thoại : 0123456789</p>
                        <p class="pInPhieu">Website : hieuhaubookstore.com</p>
                        <h2 class="text-center"><b>ĐƠN ĐẶT HÀNG</b></h2>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <p>Khách hàng : <b><?php echo $taiKhoan->TenHienThi?></b></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Địa chỉ : <b><?php echo $taiKhoan->DiaChi?></b></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Điện thoại : <b><?php echo $taiKhoan->DienThoai?></b></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Email : <b><?php echo $taiKhoan->Email?></b></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Mã đơn hàng : <b><?php echo $MaDonDatHang?></b></p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <p>Ngày lập : <b><?php echo $donDatHang->NgayLap?></b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">STT</th>
                                            <th scope="col">Mã Sách</th>
                                            <th scope="col">Tên Sách</th>
                                            <th scope="col">Số lượng</th>  
                                            <th scope="col">Đơn giá</th>   
                                            <th scope="col">Thành tiền</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $chiTietBUS = new ChiTietDonDatHangBUS();
                                            $lst = $chiTietBUS->GetByMaDonHang($MaDonDatHang);
                                            $stt = 1;
                                            /*  $lstChiTiet = $chiTietBUS->GetByMaDonHang($MaDonDatHang); */
                                            foreach ($lst as $chitietDonHang){

                                                echo "<tr>";
                                                echo "<td>$stt</td>";
                                                echo "<td class='maSach'>$chitietDonHang->MaSach</td>";
                                                echo "<td class='tenSach'>$chitietDonHang->MaSach</td>";
                                                echo "<td class='soLuong'>$chitietDonHang->SoLuong</td>";
                                                echo "<td class='donGia'>";
                                                echo number_format($chitietDonHang->GiaBan,0,"","."); 
                                                echo "đ</td>";
                                                $thanhTien = $chitietDonHang->SoLuong * $chitietDonHang->GiaBan;
                                                echo "<td class='thanhTien'>";
                                                echo number_format($thanhTien,0,"",".");
                                                echo "đ</td>";
                                                echo "</tr>";
                                                $stt++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div> <!-- end div table -->
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12 text-right">Giá trị đơn hàng : <b><?php echo number_format($donDatHang->TongThanhTien,0,"",".");?>đ</b></div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button onclick="window.print();" class="btn btn-outline-info btnThem no-print">In đơn hàng</button>
                            </div>
                        </div>
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>