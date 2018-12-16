<?php 
    $taiKhoanBUS=new TaiKhoanBUS();

    if(isset($_POST['search'])){
        $key = $_POST['search'];
        $lstTaiKhoan=$taiKhoanBUS->GetAllByKeyWord($key);
        foreach ($lstTaiKhoan as $taiKhoanDTO) {
    
    
            echo "<tr  class='trangThaiXoa$taiKhoanDTO->BiXoa'>";
            
            echo "<td class='maTK'>$taiKhoanDTO->MaTaiKhoan</td>";
            echo "<td class='tenTK'>$taiKhoanDTO->TenDangNhap</td>";
            echo "<td class='matKhau'>$taiKhoanDTO->MatKhau</td>";
            echo "<td class='tenHT'>$taiKhoanDTO->TenHienThi</td>";
            echo "<td class='ngaySinh'>$taiKhoanDTO->NgaySinh</td>";
            echo "<td class='diaChi'>$taiKhoanDTO->DiaChi</td>";
            $tenLoai;
            if($taiKhoanDTO->MaLoaiTaiKhoan==222)
                $tenLoai="User";
            else
                $tenLoai="Admin";
            echo "<td class='loaiTK'>$tenLoai</td>";
            echo "<td class='edit'><a href='admin.php?a=15&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=115&&id=$taiKhoanDTO->MaTaiKhoan&&status=$taiKhoanDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=116&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
    else{
        $lstTaiKhoan=$taiKhoanBUS->GetAll();
        foreach ($lstTaiKhoan as $taiKhoanDTO) {
    
    
            echo "<tr  class='trangThaiXoa$taiKhoanDTO->BiXoa'>";
            
            echo "<td class='maTK'>$taiKhoanDTO->MaTaiKhoan</td>";
            echo "<td class='tenTK'>$taiKhoanDTO->TenDangNhap</td>";
            echo "<td class='matKhau'>$taiKhoanDTO->MatKhau</td>";
            echo "<td class='tenHT'>$taiKhoanDTO->TenHienThi</td>";
            echo "<td class='ngaySinh'>$taiKhoanDTO->NgaySinh</td>";
            echo "<td class='diaChi'>$taiKhoanDTO->DiaChi</td>";
            $tenLoai;
            if($taiKhoanDTO->MaLoaiTaiKhoan==222)
                $tenLoai="User";
            else
                $tenLoai="Admin";
            echo "<td class='loaiTK'>$tenLoai</td>";
            echo "<td class='edit'><a href='admin.php?a=15&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=115&&id=$taiKhoanDTO->MaTaiKhoan&&status=$taiKhoanDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=116&&id=$taiKhoanDTO->MaTaiKhoan'><i class='fas fa-trash-alt'></i></a></td>";
            echo "</tr>";
        }
    }
    
?>