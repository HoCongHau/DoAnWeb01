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
                <?php
                    echo "<div id='content' class='product-detail'>";
                    include(__DIR__."./../modules/Sach/mProductDetail.php");
                    echo "</div>";
                ?>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->