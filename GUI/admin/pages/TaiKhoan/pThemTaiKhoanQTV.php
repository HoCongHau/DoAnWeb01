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
                        <p class="Title"> -- Thêm quản trị viên -- </p>
                        <div id="create-account">
                        <form action="admin.php?a=110" target="" method="POST" class="frmCreateAcc">
                            <table class="table-frm-create">
                                <tr>
                                    <td class="align-right">
                                        <!-- Thong tin ca nhan -->
                                        <p class="titleFrm">Thông tin cá nhân</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtHoTen">Họ tên của bạn</label></td>
                                    <td> <input type="text" name="txtHoTen"></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtNgaySinh">Ngày sinh</label></td>
                                    <td>
                                        <select class="" name="txtNgaySinh">
                                            <option disabled selected>[Ngày]</option>
                                            <?php foreach(range(1,31) as $ngay)
                                                echo "<option>$ngay</option>"
                                            ?>
                                        </select>
                                        <select class="" name="txtThangSinh">
                                            <option disabled selected>[Tháng]</option>
                                            <?php foreach(range(1,12) as $thang)
                                                echo "<option>$thang</option>"
                                            ?>
                                        </select>
                                        <select class="" name="txtNamSinh">
                                            <option disabled selected>[Năm]</option>
                                            <?php foreach(range(1945,2018) as $nam)
                                                echo "<option>$nam</option>"
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td class="align-right"><label for="txtQueQuan">Bạn sống tại</label></td>
                                    <td>
                                        <select class="" name="txtQueQuan">
                                            <option disabled selected>--Chọn thành phố--</option>
                                            <?php
                                                $tinhThanhBUS = new TinhThanhBUS();
                                                $lstTinhThanh= $tinhThanhBUS->GetAll();
                                                foreach($lstTinhThanh as $tinhThanhDTO){
                                                    echo "<option value='$tinhThanhDTO->TenTinh'>$tinhThanhDTO->TenTinh</option>";
                                                }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <td class="align-right"><label for="txtDienThoai">Điện thoại của bạn</label></td>
                                    <td> <input type="text" name="txtDienThoai" required></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtEmail">Email</label></td>
                                    <td> <input type="text" name="txtEmail" required></td>
                                </tr>
                                <tr>
                                    <td class="align-right">
                                        <!-- Thong tin tai khoan -->
                                        <p class="titleFrm">Thông tin tài khoản</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtUserName">Tên đăng nhập <b>*</b></label></td>
                                    <td>
                                        <input type="text" name="txtUserName" required> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-right">  <label for="txtPassword">Mật khẩu <b>*</b></label></td>
                                    <td><input type="password" name="txtPassword" required></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtRePassword">Xác nhận mật khẩu <b>*</b></label></td>
                                    <td><input type="password" name="txtRePassword" required></td>
                                </tr>
                                <tr>
                                    <td class="align-right">
                                        <!-- Ma kiem tra -->
                                        <p class="titleFrm">Mã kiểm tra</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label>Mã kiểm tra</label></td>
                                    <td><img src="../images/capcha.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtMaKiemTra">Nhập mã kiểm tra <b>*</b></label></td>
                                    <td><input type="text" name="txtMaKiemTra" required> </td>
                                </tr>
                            </table>  
                            <input type="submit" value="Đăng Ký Tài Khoản" name="dangky" class="btn btn-outline-info">  
                        </form>
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>