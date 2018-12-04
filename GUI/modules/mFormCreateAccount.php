<div id="create-account">
    <h5 class="title-book">tạo tài khoản</h5>
    <form action="laythongtindemo.php" target="" method="POST" class="frmCreateAcc">
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
                        <option>1</option>
                        <option>2</option>
                    </select>
                    <select class="" name="txtThangSinh">
                        <option disabled selected>[Tháng]</option>
                        <option>1</option>
                        <option>2</option>
                    </select>
                    <select class="" name="txtNamSinh">
                        <option disabled selected>[Năm]</option>
                        <option>1</option>
                        <option>2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="align-right"><label for="txtQueQuan">Bạn sống tại</label></td>
                <td>
                    <select class="" name="txtQueQuan">
                        <option disabled selected>--Chọn thành phố--</option>
                        <option>Đồng Nai</option>
                        <option>Lâm Đồng</option>
                    </select>
                </td>
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
        <input type="submit" value="Đăng Ký Tài Khoản" name="dangky">  
    </form>
</div>