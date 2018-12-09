<?php
// đếm tổng số sách hiện có mà chưa bị xóa
    $totalRecords = $sachBUS->DemSoSach();

    // lấy trang hiện tại
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    // số sách trên 1 page
    $recordPerPage = 20;
    
    // tính tổng số trang có thể có = lấy tổng sách / số sách trên 1 trang và làm tròn lên
    $totalPage = ceil($totalRecords/$recordPerPage);


    // nếu người dùng nhập vào trang hiện tại lớn hơn tổng trang quy định
    if ($currentPage > $totalPage){
        $currentPage = $totalPage; // gán trang hiện tại là trang cuối cùng
    }
    else if ($currentPage < 1){ // nếu nhập trang nhỏ hơn 1
        $currentPage = 1; // gán trang hiện tại là trang đầu tiên
    }

    // Tính $offset (vị trí bắt đầu của mỗi trang)
    $offset = ($currentPage-1)*$recordPerPage;

?>