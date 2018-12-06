<form action="#" target="" method="GET" class="frmCreateAcc">
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
                        <tr>
                            <td class="remove"><i class="fas fa-trash-alt"></i></td>
                            <td class="imgBook"><img src="Gui/images/8935086838143_2.jpg" alt=""></td>
                            <td class="titleBook">Đắc Nhân Tâm</td>
                            <td class="unit-price">45.000đ</td>
                            <td class="number"><input type="number" name="soluong" value="1" id=""></td>
                            <td class="result">45.000đ</td>
                        </tr>
                        <tr>
                            <td class="remove"><i class="fas fa-trash-alt"></i></td>
                            <td class="imgBook"><img src="GUI/images/8935086838143_2.jpg" alt=""></td>
                            <td class="titleBook">Đắc Nhân Tâm</td>
                            <td class="unit-price">45.000đ</td>
                            <td class="number"><input type="number" name="soluong" value="1" id=""></td>
                            <td class="result">45.000đ</td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="text-right tongtien">Tổng tiền : 250.000đ</h3>
            </div>
        </div>
        <div class="row btnEventCart text-right">
            <div class="col-xs-12 col-md-3 muathem"><button type="submit" class="btn btn-info">Mua thêm</button></div>
            <div class="col-xs-12 col-md-3 xoahet"><button type="submit" class="btn btn-info">Xóa hết giỏ hàng</button></div>
            <div class="col-xs-12 col-md-3 capnhat"><button type="submit" class="btn btn-info">Cập nhật giỏ
                    hàng</button></div>
            <div class="col-xs-12 col-md-3 thanhtoan"><button type="submit" class="btn btn-info">Thanh toán</button></div>
        </div>
    </div>
</form>