<form action="index.php?a=14" target="" method="post" class="frmCreateAcc">
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Xóa</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $tongTienPT=0;
                            if(!empty($_SESSION["cart"])) {
                                $result=$_SESSION["cart"];
                                foreach ($result as $row){
                                    $id=$row['key'];
                                    $img=$row['image'];
                                    $price=$row['price'];
                                    $name=$row['name'];
                                    $soLuong=$row['sl'];
                                    $tongTien=(int)$price*(int)$soLuong;
                                    $tongTienPT+=$tongTien;

                                    echo "<tr>";
                                    echo "<td class='remove'><a href='index.php?a=13&id=$id'><i class='fas fa-trash-alt'></i></a></td>";
                                    echo "<td class='imgBook'><img src='GUI/images/$img' alt=''></td>";
                                    echo "<td class='titleBook'>$name</td>";
                                    echo "<td class='unit-price'>$price đ</td>";
                                    echo "<td class='number'><input type='number' name='qty[$id]' value='$soLuong' id=''></td>";
                                    echo "<td class='result'>$tongTien đ</td>";
                                    echo "</tr>";
                                }
                            }
                        //bắt đầu xử lý #
                    echo"</tbody>";
                echo"</table>";
                echo "<h3 class='text-right tongtien'>Tổng tiền : $tongTienPT</h3>";
                $_SESSION["TongTien"]=$tongTienPT;
                //echo "<pre>";
                //print_r($_SESSION["cart"]);
                ?>
            </div>
        </div>
        <div class="row btnEventCart text-right">
            <div class="col-xs-12 col-md-3 muathem"><button type="submit" class="btn btn-info" name="muaThem">Mua thêm</button></div>
            <div class="col-xs-12 col-md-3 xoahet"><button type="submit" class="btn btn-info" name="xoaHet">Xóa hết giỏ hàng</button></div>
            <div class="col-xs-12 col-md-3 capnhat"><button type="submit" class="btn btn-info" name="capNhat"> Cập nhật giỏ hàng</button></div>
            <div class="col-xs-12 col-md-3 thanhtoan"><button type="submit" class="btn btn-info" name="thanhToan">Thanh toán</button></div>
        </div>
    </div>
</form>