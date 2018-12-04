<?php include("../modules/mHead.php") ?>
<body>
	<?php include("../modules/mTopHeader.php");
	include("../modules/mMainHeader.php");
	include("../modules/mMenu.php");
	include("../modules/mSlidebar.php");
	include("../modules/mNewBook.php");
	include("../modules/mBestSellerBook.php");
	?>
	<div class="container-fluid wrapper-content-sidebar">
		<div class="row">
			<div class="col-xs-hidden col-md-3">
				<div id="sidebar">
					<?php 
						include("../modules/mLoaiSach.php");
						include("../modules/mNhaXuatBan.php");
						include("../modules/mTimKiemNangCao.php");
					?>
				</div> <!-- sidebar -->
			</div>
			<div class="col-xs-12 col-md-9">
				<div id="content">
					<div class="row">
					<?php 
						include("../modules/mSanPham.php");
					?>
					</div>
				</div> <!-- content -->
			</div>
		</div> <!-- row -->
	</div> <!-- container-fluid -->
	<?php include("../modules/mFooter.php"); ?>
</body>

</html>