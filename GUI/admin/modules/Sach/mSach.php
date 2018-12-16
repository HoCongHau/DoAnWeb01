<?php
    $sachBUS=new SachBUS();
    include(__DIR__."./../../modules/mTinhToanChoPhanTrangAdmin.php");
    if (isset($_GET['search'])){
        $namebook = $_GET['search'];
        $lstSach = $sachBUS->GetBookByKeyWordForAdmin($namebook);
        /* $lstSach=$sachBUS->GetAllDescDate(); */
        foreach ($lstSach as $sachDTO){
            echo "<tr class='trangThaiXoa$sachDTO->BiXoa'>";
            echo "<td class='maSach'>$sachDTO->MaSach</td>";
            echo "<td class='tenSach'>";
            echo _substr($sachDTO->TenSach,20);
            echo "</td>";
            echo "<td class='hinhAnh'><img src='./../../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''></td>";
            echo "<td class='giaSach'>$sachDTO->GiaSach</td>";
            echo "<td class='ngNhap'>$sachDTO->NgayNhap</td>";
            echo "<td class='soLuongTon'>$sachDTO->SoLuongTon</td>";
            echo "<td class='soLuongBan'>$sachDTO->SoLuongBan</td>";
            echo "<td class='maLoaiSach'>$sachDTO->MaLoaiSach</td>";
            echo "<td class='maNXB'>$sachDTO->MaNhaXuatBan</td>";
            echo "<td class='edit'><a href='admin.php?a=14&&id=$sachDTO->MaSach'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=113&&id=$sachDTO->MaSach&&status=$sachDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=111&&id=$sachDTO->MaSach'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
    else{
        $lstSach = $sachBUS->GetAllAllowLimit($offset, $recordPerPage);
        /* $lstSach=$sachBUS->GetAllDescDate(); */
        foreach ($lstSach as $sachDTO){
            echo "<tr class='trangThaiXoa$sachDTO->BiXoa'>";
            echo "<td class='maSach'>$sachDTO->MaSach</td>";
            echo "<td class='tenSach'>";
            echo _substr($sachDTO->TenSach,20);
            echo "</td>";
            echo "<td class='hinhAnh'><img src='./../../../../DoAnWeb01/GUI/images/$sachDTO->HinhURL' alt=''></td>";
            echo "<td class='giaSach'>$sachDTO->GiaSach</td>";
            echo "<td class='ngNhap'>$sachDTO->NgayNhap</td>";
            echo "<td class='soLuongTon'>$sachDTO->SoLuongTon</td>";
            echo "<td class='soLuongBan'>$sachDTO->SoLuongBan</td>";
            echo "<td class='maLoaiSach'>$sachDTO->MaLoaiSach</td>";
            echo "<td class='maNXB'>$sachDTO->MaNhaXuatBan</td>";
            echo "<td class='edit'><a href='admin.php?a=14&&id=$sachDTO->MaSach'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=113&&id=$sachDTO->MaSach&&status=$sachDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=111&&id=$sachDTO->MaSach'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
?>