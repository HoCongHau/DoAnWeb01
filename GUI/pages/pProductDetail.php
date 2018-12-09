<?php
        //include(__DIR__."./../modules/mTopHeader.php");
        include(__DIR__."./../modules/mMainHeader.php");
        include(__DIR__."./../modules/mMenu.php");
    ?>
    <div class="container-fluid wrapper-content-sidebar">
        <div class="row">
            <div class="col-xs-hidden col-md-3">
                <div id="sidebar">
                    <?php 
						include(__DIR__."./../modules/mLoaiSach.php");
						include(__DIR__."./../modules/mNhaXuatBan.php");
						include(__DIR__."./../modules/mTimKiemNangCao.php");
					?>
                </div> <!-- sidebar -->
            </div>
            <div class="col-xs-12 col-md-9">
                <div id="content" class="product-detail">
                    <?php
                        if(isset($_GET['id'])){
                            $id=$_GET['id'];
                            $sachBUS=new SachBUS();
                            $sach=$sachBUS->GetByID($id);

                            echo "<div class='row'>";
                            echo "<div class='col-xs-12 col-md-5 img-book'>";
                            echo "<img src='../../../DoAnWeb01/GUI/images/$sach->HinhURL' alt=''>";
                            echo "</div>";
                            echo "<div class='col-xs-12 col-md-7 info-book'>";
                            echo "<p class='titleBook'>$sach->TenSach</p>";
                            echo "<p class='authorBook'>Tác giả : $sach->MaLoaiSach (xử lý)</p>";
                            echo "<p class='priceBook'>Giá bán : $sach->GiaSach đ</p>";
                            echo "<hr>";
                            echo "<p class='moreInfo'><i class='fas fa-eye'></i>&nbsp;Số lượt xem : $sach->SoLuocXem</p>";
                            echo "<p class='moreInfo'><i class='fas fa-file-export'></i>&nbsp;Số lượng bán : $sach->SoLuongBan</p>";
                            echo "<p class='moreInfo'><i class='fas fa-globe-asia'></i>&nbsp;Xuât xứ : (csdl trống)</p>";
                            echo "<p class='moreInfo'><i class='fas fa-print'></i>&nbsp;Nhà xuất bản : $sach->MaNhaXuatBan (xử lý)</p>";
                            echo "<hr>";
                            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ&nbsp;<i class='fas fa-cart-plus'></i></button>";
                            echo"</div>";
                            echo "</div>";
 
                        }

                    ?>
                    <!-- <div class="row">
                        <div class="col-xs-12 col-md-5 img-book">
                            <img src="../images/8935250700689.jpg" alt="">
                        </div>
                        <div class="col-xs-12 col-md-7 info-book">
                            <p class="titleBook">Your Name</p>
                            <p class="authorBook">Tác giả : Shinkai Makoto</p>
                            <p class="priceBook">Giá bán : 52.500đ</p>
                            <hr>
                            <p class="moreInfo"><i class="fas fa-eye"></i>&nbsp;Số lượt xem : 250</p>
                            <p class="moreInfo"><i class="fas fa-file-export"></i>&nbsp;Số lượng bán : 54</p>
                            <p class="moreInfo"><i class="fas fa-globe-asia"></i>&nbsp;Xuât xứ : Nhật Bản</p>
                            <p class="moreInfo"><i class="fas fa-print"></i>&nbsp;Nhà xuất bản : Văn Học</p>
                            <hr>
                            <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ&nbsp;<i class="fas fa-cart-plus"></i></button>
                        </div>
                    </div> -->
                    <div class="col-xs-12 description">
                        <b> Your Name </b>
                        Mitsuha là nữ sinh trung học sống ở vùng quê hẻo lánh. Một ngày nọ, cô mơ thấy
                        mình ở Tokyo trong một căn phòng xa lạ, biến thành con trai, gặp những người bạn chưa
                        từng quen biết. <br>

                        Trong khi đó ở một nơi khác, Taki, một nam sinh trung học người Tokyo lại mơ thấy mình
                        biến thành con gái, sống ở vùng quê hẻo lánh. <br>

                        Cuối cùng hai người họ nhận ra đang bị hoán đổi với nhau qua giấc mơ. Kể từ lúc hai
                        con người xa lạ ấy gặp nhau, bánh xe số phận bắt đầu chuyển động. <br>

                        Đây là phiên bản tiểu thuyết của bộ phim hoạt hình Your Name, do chính đạo diễn Shinkai
                        Makoto chấp bút. <br>
                    </div>
                </div> <!-- content -->
                <div class="container-fluid">
                    <div id="same-book" class="wow fadeInUp">
                        <h5 class="title-book">sản phẩm cùng loại</h5>
                        <div class="list-book">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <form action="#" target="" method="GET">
                                        <div class="product" id="vadsds">

                                            <div class="wrapper-img-product">
                                                <img src="../images/8935086838143_2.jpg" alt="">
                                            </div>
                                            <div class="wrapper-content-product">
                                                <p class="Title">Nhà Giả Kim <br> (Tái bản 2017)</p>
                                                <p class="Price">53.820đ</p>
                                                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
                                            </div>

                                        </div> <!-- product -->
                                    </form>
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <form action="#" target="" method="GET">
                                            <div class="wrapper-img-product">
                                                <img src="../images/8935235213746.jpg" alt="">
                                            </div>
                                            <div class="wrapper-content-product">
                                                <p class="Title">Nhà Giả Kim (Tái bản 2017)</p>
                                                <p class="Price">53.820đ</p>
                                                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
                                            </div>
                                        </form>
                                    </div> <!-- product -->
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <form action="#" target="" method="GET">
                                            <div class="wrapper-img-product">
                                                <img src="../images/8935250700689.jpg" alt="">
                                            </div>
                                            <div class="wrapper-content-product">
                                                <p class="Title">Nhà Giả Kim (Tái bản 2017)</p>
                                                <p class="Price">53.820đ</p>
                                                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
                                            </div>
                                        </form>
                                    </div> <!-- product -->
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <form action="#" target="" method="GET">
                                            <div class="wrapper-img-product">
                                                <img src="../images/9786045521465.jpg" alt="">
                                            </div>
                                            <div class="wrapper-content-product">
                                                <p class="Title">Nhà Giả Kim (Tái bản 2017)</p>
                                                <p class="Price">53.820đ</p>
                                                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
                                            </div>
                                        </form>
                                    </div> <!-- product -->
                                </div>
                                <div class="item">
                                    <div class="product">
                                        <form action="#" target="" method="GET">
                                            <div class="wrapper-img-product">
                                                <img src="../images/image_119757.jpg" alt="">
                                            </div>
                                            <div class="wrapper-content-product">
                                                <p class="Title">Nhà Giả Kim (Tái bản 2017)</p>
                                                <p class="Price">53.820đ</p>
                                                <button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
                                            </div>
                                        </form>
                                    </div> <!-- product -->
                                </div>
                            </div>
                        </div><!-- list-book -->
                    </div> <!-- san pham cung loai -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <div class="container-fluid">
        <div id="footer">
            <p>Copyright &copy; 2018. Thiết kế và duy trì bởi Hiếu Hậu Bookstrore</p>
        </div>
    </div> <!-- container-fluid -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script src="../js/myScript.js"></script>
    <script src="../js/wow.js"></script>
    <script>
        new WOW().init();
    </script>