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
                    </div>
                    <div class="col-xs-12 description">
                        <b> Your Name </b>
                        //viết mô tả
                         <br>
                    </div>
                    -->
                <!--<div class="item">
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

                                    </div>
                                </form>
                            </div>-->
                <?php
                echo "<div id='content' class='product-detail'>";
                        if(isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sachBUS = new SachBUS();
                            $sach = $sachBUS->GetByID($id);

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
                            echo "</div>";
                            echo "</div>";

                            echo "<div class='col-xs-12 description'>";
                            echo "<b> Your Name </b>";
                            echo "$sach->MoTa";
                            echo "</div>";

                            echo "</div> <!-- content -->";

                            echo "<div class='container-fluid'>";
                            echo "<div id='same-book' class='wow fadeInUp'>";
                            echo "<h5 class='title-book'>sản phẩm cùng loại</h5>";
                            echo "<div class='list-book'>";
                            echo "<div class='owl-carousel owl-theme'>";


                            $lstSach = $sachBUS->GetByMaLoai($sach->MaLoaiSach);

                            foreach ($lstSach as $sachDTO) {
                                echo "<div class='item''>";
                                echo "<div class='product''>";
                                echo "<form action='#' target='' method='GET'>";
                                echo "<div class='wrapper-img-product'>";
                                //
                                echo "<a class='product-img' href='index.php?a=8&id=$sachDTO->MaSach'>";
                                echo "<img src='./../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
                                echo "</a>";
                                echo "</div>";
                                echo "<div class='wrapper-content-product'>";
                                echo "<p class='Title'>$sachDTO->MaNhaXuatBan (Nhà xuất bản)</p>";
                                echo "<p class='Price'>$sachDTO->GiaSach đ</p>";
                                echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
                                echo "</div>";
                                echo "</form>";
                                echo "</div>";
                                echo "</div>";
                            }


                            echo "</div>";
                            echo "</div><!-- list-book -->";
                            echo "</div> <!-- san pham cung loai -->";

                            echo "</div>";
                        }
                ?>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
    <script src="../js/myScript.js"></script>
    <script src="../js/wow.js"></script>
    <script>
        new WOW().init();
    </script>