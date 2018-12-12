<?php 
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 12-12-2018
 * Time: 2:22 PM
 */

    if(isset($_GET['id'])){
        $maTK = $_GET['id'];    

        $taiKhoanBUS = new TaiKhoanBUS();
        $taikhoan = $taiKhoanBUS->GetByID($maTK);
       /*  $sachBUS =new SachBUS();
        $lstSach = $sachBUS->GetByID($maSach);

        $maLoaiSach = $lstSach->MaLoaiSach;
        $loaiS=new LoaiSachBUS();
        $tenSach=$loaiS->GetWithName($maLoaiSach);

        $maNXB = $lstSach->MaNhaXuatBan;
        $nhaxuatbanBUS = new NhaXuatBanBUS();
        $tenNXB = $nhaxuatbanBUS->GetByID($maNXB); */
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
                        <p class="Title"> -- Sửa tài khoản -- </p>
                        <div id="create-account">
                        <form action="admin.php?a=117&&id=<?php echo $maTK?>" target="" method="POST" class="frmCreateAcc">
                            <table class="table-frm-create">
                                <tr>
                                    <td class="align-right">
                                        <!-- Thong tin ca nhan -->
                                        <p class="titleFrm">Thông tin cá nhân</p>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtHoTen">Họ tên của bạn<b>*</b></label></td>
                                    <td> <input type="text" name="txtHoTen" required value="<?php echo $taikhoan->TenHienThi;?>"></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtNgaySinh">Ngày sinh<b>*</b></label></td>
                                    <td>
                                        <select class="" name="txtNgaySinh" required>
                                            <option disabled >[Ngày]</option>
                                            <option selected value="<?php echo $taikhoan->NgaySinh;?>"><?php echo substr($taikhoan->NgaySinh,8,2);?></option>
                                            <?php foreach(range(1,31) as $ngay)
                                                echo "<option>$ngay</option>"
                                            ?>
                                        </select>
                                        <select class="" name="txtThangSinh" required>
                                            <option disabled>[Tháng]</option>
                                            <option selected value="<?php echo $taikhoan->NgaySinh;?>"><?php echo substr($taikhoan->NgaySinh,5,2);?></option>
                                            <?php foreach(range(1,12) as $thang)
                                                echo "<option>$thang</option>"
                                            ?>
                                        </select>
                                        <select class="" name="txtNamSinh" required>
                                            <option disabled>[Năm]</option>
                                            <option selected value="<?php echo $taikhoan->NgaySinh;?>"><?php echo substr($taikhoan->NgaySinh,0,4);?></option>
                                            <?php foreach(range(1945,2018) as $nam)
                                                echo "<option>$nam</option>"
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                <tr>
                                    <td class="align-right"><label for="txtQueQuan">Bạn sống tại<b>*</b></label></td>
                                    <td>
                                        <select class="" name="txtQueQuan" required>
                                            <option disabled>--Chọn thành phố--</option>
                                            <option selected value="<?php echo $taikhoan->DiaChi;?>"><?php echo $taikhoan->DiaChi;?></option>
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
                                <td class="align-right"><label for="txtDienThoai">Điện thoại của bạn<b>*</b></label></td>
                                    <td> <input type="text" name="txtDienThoai" required value="<?php echo $taikhoan->DienThoai;?>">
                                </td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtEmail">Email<b>*</b></label></td>
                                    <td> <input type="text" name="txtEmail" required value="<?php echo $taikhoan->Email;?>"></td>
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
                                        <input type="text" name="txtUserName" required value="<?php echo $taikhoan->TenDangNhap;?>"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-right">  <label for="txtPassword">Mật khẩu <b>*</b></label></td>
                                    <td><input type="password" name="txtPassword" required value="<?php echo $taikhoan->MatKhau;?>"></td>
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
                                    <td><img src="../../../../../DoAnWeb01/GUI/images/capcha.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td class="align-right"><label for="txtMaKiemTra">Nhập mã kiểm tra <b>*</b></label></td>
                                    <td><input type="text" name="txtMaKiemTra" required> </td>
                                </tr>
                            </table>  
                            <input type="submit" value="Cập nhật tài khoản" name="dangky" class="btn btn-outline-info">  
                        </form>
                    </div> <!-- end content -->
                </div> <!-- end row sau main -->
            </div> <!-- end main -->
        </div>
    </div>