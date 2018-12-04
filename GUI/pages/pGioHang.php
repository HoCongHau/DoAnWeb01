<?php include("../modules/mHead.php") ?>

<body>
    <?php 
        include("../modules/mTopHeader.php");
        include("../modules/mMainHeader.php");
        include("../modules/mMenu.php");
    ?>
    <div class="container-fluid" id="giohang">
        <h5 class="title-book">giỏ hàng của bạn</h5>
        <?php 
            include("../modules/mGioHang.php");
        ?>
    </div>
    <?php 
        include("../modules/mFooter.php");
    ?>
</body>
</html>