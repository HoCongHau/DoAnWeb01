<div class="container-fluid">
		<div id="best-seller" class="wow fadeInUp">
			<h5 class="title-book">sách bán chạy</h5>
			<div class="list-book">
				<div class="owl-carousel owl-theme">
					<!-- <div class="item">
						<div class="product">
							<form action="#" target="" method="GET">
								<div class="wrapper-img-product">
									<img src="GUI/images/image_119757.jpg" alt="">
								</div>
								<div class="wrapper-content-product">
									<p class="Title">Nhà Giả Kim <br> (Tái bản 2017)</p>
									<p class="Price">53.820đ</p>
									<button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
								</div>
							</form>
						</div> product 
					</div> -->

					<?php
						$sachBUS = new SachBUS();
						$lstSach= $sachBUS->GetSachBestSeller();
						foreach($lstSach as $sachDTO){
							echo "<div class='item'>";
							echo " <div class='product'>";
							echo "<form action='#' target='' method='GET'>";
							echo " <div class='wrapper-img-product'>";
							echo "<img src='../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
							echo "</div>";
							echo "<div class='wrapper-content-product'>";
							echo "<p class='Title'>$sachDTO->TenSach</p>";
							echo " <p class='Price'>$sachDTO->GiaSach đ</p>";
							echo "<button type='submit' value='Submit' class='btn btn-info'>Thêm vào giỏ</button>";
							echo "</div>";
							echo "</form>";
							echo "</div> <!-- product -->";
							echo "</div>";
						}
					?>
				</div>
			</div><!-- list-book -->
		</div> <!-- best-seller -->
	</div>