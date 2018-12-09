<?php
function _substr($str, $length, $minword = 3)
{
    $sub = ''; // gan chuoi can tao = rong
    $len = 0; // gán chiều dài ban đầu là 0
    foreach (explode(' ', $str) as $word) // thực hiện vòng lặp cắt chuỗi truyền vào thành từng từ
    {
        // kiểm tra nếu chuỗi con khác rỗng
        // thì thêm khoảng trắng trước từ lấy được
        $part = (($sub != '') ? ' ' : '') . $word; 
        $sub .= $part; // nối chuỗi cần tạo với $part
        $len += strlen($part); // tăng độ dài = cách + với chiều dài của part

        // kiểmt tra nếu chiều dài chữ lớn hơn $minword và chiều dài chuỗi tạo > chiều dài cần lấy
        // thoát khỏi vòng lặp
        if (strlen($word) > $minword && strlen($sub) >= $length)
        {
            break;
        }
    }
    // trả về chuỗi cần tạo nối với (... nếu chiều dài chuỗi tạo < chiều dài chuỗi truyền vào)
    // hoặc trả về chuỗi cần tạo ( nếu chiều dài chuỗi tạo >= chiều dài chuỗi truyền vào)
    return $sub . (($len < strlen($str)) ? '...' : '');
}
?>