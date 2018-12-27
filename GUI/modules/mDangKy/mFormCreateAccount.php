<div id="create-account">
    <h5 class="title-book">tạo tài khoản</h5>
    <form action="index.php?a=7" target="" method="POST" class="frmCreateAcc">
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
                        <?php
                            for($i=1;$i<=31;$i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="" name="txtThangSinh">
                        <option disabled selected>[Tháng]</option>
                        <?php
                            for($i=1;$i<=12;$i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="" name="txtNamSinh">
                        <option disabled selected>[Năm]</option>
                        <?php
                            for($i=2018;$i>=1930;$i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
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
            <tr>
                <td class="align-right"><label for="txtDienThoai">Điện Thoại <b>*</b></label></td>
                <td> <input type="text" name="txtDienThoai" required></td>
            </tr>
            <tr>
                <td class="align-right"><label for="txtEmail">Email <b>*</b></label></td>
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
                <td class="align-right">  <label for="txtPassWord">Mật khẩu <b>*</b></label></td>
                <td><input type="password" name="txtPassWord" id="password" onkeyup='check();' required></td>
            </tr>
            <tr>
                <td class="align-right"><label for="txtRePassWord">Xác nhận mật khẩu <b>*</b></label></td>
                <td><input type="password" name="txtRePassWord" id="confirm_password" onkeyup='check();' required></td>
            </tr>
            <tr>
                <td></td>
                <td><span id='message'></span></td>       
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
                <td><img src="../../images/capcha.png" alt=""></td>
            </tr>
            <tr>
                <td class="align-right"><label for="txtMaKiemTra">Nhập mã kiểm tra <b>*</b></label></td>
                <td><input type="text" name="txtMaKiemTra" required> </td>
            </tr>
        </table>  
        <input type="submit" value="Đăng Ký Tài Khoản" name="dangky">  
    </form>
</div>
<script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Khớp';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Không khớp';
  }
}</script>