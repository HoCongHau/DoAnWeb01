<?php 
	include(__DIR__."./../modules/mMainHeader.php");
	include(__DIR__."./../modules/mMenu.php");
	include(__DIR__."./../modules/mSlidebar.php");
	include(__DIR__."./../modules/mNewBook.php");
	include(__DIR__."./../modules/mBestSellerBook.php");
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
				<div id="content">
					<div class="row">
					<?php 
						if(isset($_GET['nxb'])) {
                        $maNXB = $_GET['nxb'];
                        $sachBUS = new SachBUS();

                        $lstSach = $sachBUS->GetByNXB($maNXB);
                        foreach ($lstSach as $sachDTO) {
                            echo "<div class='col-xs-6 col-md-6 col-lg-3'>";
                            echo " <div class='product wow fadeInUp'>";
                            echo "<form action='#' target='' method='GET'>";
                            echo " <div class='wrapper-img-product'>";
                            echo "<a class='product-img' href='index.php?a=8&id=$sachDTO->MaSach'>";
                            echo "<img src='../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
                            echo "</a>";
                            echo "</div>";
                            echo "<div class='wrapper-content-product'>";
                            echo "<p class='Title'>";
                            echo _substr($sachDTO->TenSach, 50);
                            echo "</p>";
                            echo " <p class='Price'>$sachDTO->GiaSach đ</p>";
                            echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
                            echo "</div>";
                            echo "</form>";
                            echo "</div> <!-- product -->";
                            echo "</div>";
                        }
                    }
					?>
					</div>
				</div> <!-- content -->
			</div>
		</div> <!-- row -->
	</div> <!-- container-fluid -->