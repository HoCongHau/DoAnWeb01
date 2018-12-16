<?php 
    $nhaXB= new NhaXuatBanBUS();

    if(isset($_POST['search'])){
        $key = $_POST['search'];
        /* $newkey = vn_str_filter($key);
        echo $newkey; */
        $lstNXB=$nhaXB->GetAllByKeyWord($key);
        foreach ($lstNXB as $item) {
            echo "<tr class='trangThaiXoa$item->BiXoa'>";
            echo "<td class='maNXB'>$item->MaNhaXuatBan</td>";
            echo "<td class='tenNXB'>$item->TenNhaXuatBan</td>";
            echo "<td class='logo'><img src='./../../../../DoAnWeb01/GUI/images/$item->LogoURL' alt=''></td>";
            echo "<td class='edit'><a href='admin.php?a=13&&id=$item->MaNhaXuatBan'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=106&&id=$item->MaNhaXuatBan&&status=$item->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=107&&id=$item->MaNhaXuatBan'><i class='fas fa-trash-alt'></i></a></td>";
            /* echo "<td class='biXoa'><i class='fas fa-check'></i></td>"; */
            echo "</tr>";
        }
    }
    else{
        $lstNXB=$nhaXB->GetAll();
        foreach ($lstNXB as $item) {
            echo "<tr class='trangThaiXoa$item->BiXoa'>";
            echo "<td class='maNXB'>$item->MaNhaXuatBan</td>";
            echo "<td class='tenNXB'>$item->TenNhaXuatBan</td>";
            echo "<td class='logo'><img src='./../../../../DoAnWeb01/GUI/images/$item->LogoURL' alt=''></td>";
            echo "<td class='edit'><a href='admin.php?a=13&&id=$item->MaNhaXuatBan'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=106&&id=$item->MaNhaXuatBan&&status=$item->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=107&&id=$item->MaNhaXuatBan'><i class='fas fa-trash-alt'></i></a></td>";
            /* echo "<td class='biXoa'><i class='fas fa-check'></i></td>"; */
            echo "</tr>";
        }
    } 
?>