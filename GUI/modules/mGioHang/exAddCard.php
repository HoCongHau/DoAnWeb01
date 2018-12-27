<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 10-12-2018
 * Time: 8:38 PM
 */
if(isset($_SESSION['uid'])!=null)
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        //lấy sản phẩm
        $sachBUS=new SachBUS();
        $sachDTO=$sachBUS->GetByID($id);

        if(!empty($_SESSION["cart"])){//giỏ đã có ít nhất 1 sản phẩm
            $cart=$_SESSION["cart"];
            //kiểm tra lần thứ 2 mua hàng đã có phần tử mảng chưa
            if(array_key_exists($id,$cart)){
                $cart[$id]=array(   //mảng 2 chiều
                    "key"=>$id,
                    "image"=>$sachDTO->HinhURL,
                    "name"=>$sachDTO->TenSach,
                    "price"=>$sachDTO->GiaSach,
                    //truy xuất đến phần tử $id, lấy gia tri sl ++
                    "sl"=>(int)$cart[$id]["sl"]+1
                );
            }
            else{
                //nếu như sản phẩm khác
                $cart[$id]=array(   //mảng 2 chiều
                    "key"=>$id,
                    "image"=>$sachDTO->HinhURL,
                    "name"=>$sachDTO->TenSach,
                    "price"=>$sachDTO->GiaSach,
                    "sl"=>1
                );
            }
        }
        else{
            //lần đầu mua hàng chưa có giỏ hàng
            $cart[$id]=array(   //mảng 2 chiều
                "key"=>$id,
                "image"=>$sachDTO->HinhURL,
                "name"=>$sachDTO->TenSach,
                "price"=>$sachDTO->GiaSach,
                "sl"=>1
            );
        }
        //sau khi mua gán ngược lại//cập nhật lại giỏ hàng
        $_SESSION["cart"]=$cart;
        //echo 'pre';
        //print_r($_SESSION["cart"]);
        //echo die();
        //echo "hieu dep trai";
    }
    else{
        //quay lại trang chủ
        echo "<script type='text/javascript'>location='index.php';</script>";
    }
else{
    //quay lại trang chủ
    echo "<script> window.history.back();</script>";
}



//echo "<script type='text/javascript'>location='index.php';</script>";
//quay lại trang hiện tại sau khi add sp
echo "<script> window.history.back();</script>";
    //mua xong quay ve trang chu
    //header("location:index.php=1");
    //print teest
?>

<?php

if(isset($_POST['submit'])){

    foreach($_POST['sl'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }

}

?>
