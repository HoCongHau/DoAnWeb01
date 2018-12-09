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
                        <p class="Title"> -- Quản lý nhà xuất bản -- </p>
                        <div class="row">
                            <div class="col xs-12 col-md-7">
                                <button type="button" class="btn btn-outline-info them"><a href="../pages/pThemNhaXuatBan.php">Thêm nhà xuất bản</a> </button>
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
                                            <th scope="col">Mã Nhà Xuất Bản</th>
                                            <th scope="col">Tên Nhà Xuất Bản</th>
                                            <th scope="col">Logo Thương Hiệu</th>
                                            <th scope="col">Bị Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--
                                        <tr class="daXoa">
                                            <td class="edit"><a href=""><i class="fas fa-edit"></i></a> </td>
                                            <td class="remove"><a href=""><i class="fas fa-trash-alt"></i></a></td>
                                            <td class="maNXB">001</td>
                                            <td class="tenNXB">Kim Đồng</td>
                                            <td class="logo"><img src="../../images/kimdong.png" alt=""></td>
                                            <td class="biXoa"><i class="fas fa-times"></i></td>
                                        </tr>
                                        -->
                                        <?php
                                            $nhaXB= new NhaXuatBanBUS();
                                            $lstNXB=$nhaXB->GetAll();
                                            foreach ($lstNXB as $item) {
                                                echo "<tr>";
                                                echo "<td class='edit'><a href=''><i class='fas fa-edit'></i></a> </td>";
                                                echo "<td class='remove'><a href=''><i class='fas fa-trash-alt'></i></a></td>";
                                                echo "<td class='maNXB'>$item->MaNhaXuatBan</td>";
                                                echo "<td class='tenNXB'>$item->TenNhaXuatBan</td>";
                                                echo "<td class='logo'><img src='./../../../../DoAnWeb01/GUI/images/$item->LogoURL' alt=''></td>";
                                                echo "<td class='biXoa'><i class='fas fa-check'></i></td>";
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