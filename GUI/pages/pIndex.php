<?php 
	include(__DIR__."./../modules/mMainHeader.php");
	include(__DIR__."./../modules/mMenu.php");
	include(__DIR__."./../modules/mSlidebar.php");
	include(__DIR__."./../modules/Sach/mNewBook.php");
	include(__DIR__."./../modules/Sach/mBestSellerBook.php");
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
						include(__DIR__."./../modules/Sach/mSanPham.php");
					?>
					</div>
				</div> <!-- content -->
			</div>
		</div> <!-- row -->
	</div> <!-- container-fluid -->