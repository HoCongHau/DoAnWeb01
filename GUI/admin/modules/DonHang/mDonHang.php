<?php 
    $donHangBUS=new DonDatHangBUS();
    if(isset($_POST['search'])){
        $key = $_POST['search'];
        $lstDonHang=$donHangBUS->GetAllByKeyWord($key);
        foreach ($lstDonHang as $donHang){
            echo "<tr>";
            echo "<td class='tinhTrang blockGhiChuTT$donHang->MaTinhTrang'></td>";
            echo "<td class='maDH'>$donHang->MaDonDatHang</td>";
            echo "<td class='maTaiKhoan'>$donHang->MaTaiKhoan</td>";
            echo "<td class='ngayLap'>$donHang->NgayLap</td>";
            echo "<td class='tongTien'>";
            echo number_format($donHang->TongThanhTien,0,"",".");
            echo "đ</td>";
            echo "<td class='edit'><a href='admin.php?a=16&&id=$donHang->MaDonDatHang'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href=''><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href=''><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
    else{
        $lstDonHang=$donHangBUS->GetAll();
        foreach ($lstDonHang as $donHang){
            echo "<tr>";
            echo "<td class='tinhTrang blockGhiChuTT$donHang->MaTinhTrang'></td>";
            echo "<td class='maDH'>$donHang->MaDonDatHang</td>";
            echo "<td class='maTaiKhoan'>$donHang->MaTaiKhoan</td>";
            echo "<td class='ngayLap'>$donHang->NgayLap</td>";
            echo "<td class='tongTien'>";
            echo number_format($donHang->TongThanhTien,0,"",".");
            echo "đ</td>";
            echo "<td class='edit'><a href='admin.php?a=16&&id=$donHang->MaDonDatHang'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href=''><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href=''><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }

?>