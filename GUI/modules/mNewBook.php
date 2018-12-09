<div class="container-fluid">
		<div id="new-book"  class="wow fadeInUp">
			<h5 class="title-book">sản phẩm mới</h5>
			<div class="list-book">
				<div class="owl-carousel owl-theme">
					<!-- <div class="item">
						<form action="#" target="" method="GET">
							<div class="product" id="vadsds">
								
									<div class="wrapper-img-product">
										<img src="GUI/images/8935086838143_2.jpg" alt="">
									</div>
									<div class="wrapper-content-product">
										<p class="Title">Nhà Giả Kim <br> (Tái bản 2017)</p>
										<p class="Price">53.820đ</p>
										<button type="submit" value="Submit" class="btn btn-info">Thêm vào giỏ</button>
									</div>
								
							</div> 
						</form>
					</div> -->
					<?php
						$sachBUS = new SachBUS();
						$lstSach= $sachBUS->GetSachNew();
						foreach($lstSach as $sachDTO){
							echo "<div class='item'>";
							echo " <div class='product'>";
							echo "<form action='#' target='' method='GET'>";
							echo " <div class='wrapper-img-product'>";
							echo "<img src='../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''>";
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
					?>
				</div>
			</div><!-- list-book -->
		</div> <!-- new-book -->
	</div>