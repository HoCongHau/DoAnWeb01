<?php 
    $loaiS=new LoaiSachBUS();

    if(isset($_POST['search'])){
        $key = $_POST['search'];
        $lstLoaiSach=$loaiS->GetAllByKeyWord($key);
        foreach ($lstLoaiSach as $loaiDTO)
        {
            echo "<tr class='trangThaiXoa$loaiDTO->BiXoa'>";
            echo "<td class='maLoaiSP'>$loaiDTO->MaLoaiSach</td>";
            echo "<td class='tenLoaiSP'>$loaiDTO->TenLoaiSach</td>";
            echo "<td class='edit'><a href='admin.php?a=10&&id=$loaiDTO->MaLoaiSach'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=103&&id=$loaiDTO->MaLoaiSach&&status=$loaiDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=104&&id=$loaiDTO->MaLoaiSach'><i class='fas fa-trash-alt'></i></a></td>";
           /*  echo "<td class='biXoa'>$loaiDTO->BiXoa</td>"; */
            echo "</tr>";
        }
    }
    else{
        $lstLoaiSach=$loaiS->GetAll();
        foreach ($lstLoaiSach as $loaiDTO)
        {
            echo "<tr class='trangThaiXoa$loaiDTO->BiXoa'>";
            echo "<td class='maLoaiSP'>$loaiDTO->MaLoaiSach</td>";
            echo "<td class='tenLoaiSP'>$loaiDTO->TenLoaiSach</td>";
            echo "<td class='edit'><a href='admin.php?a=10&&id=$loaiDTO->MaLoaiSach'><i class='fas fa-edit'></i></a> </td>";
            echo "<td class='remove'><a href='admin.php?a=103&&id=$loaiDTO->MaLoaiSach&&status=$loaiDTO->BiXoa'><i class='fas fa-eraser'></i></a></td>";
            echo "<td class='remove'><a href='admin.php?a=104&&id=$loaiDTO->MaLoaiSach'><i class='fas fa-trash-alt'></i></a></td>";
           /*  echo "<td class='biXoa'>$loaiDTO->BiXoa</td>"; */
            echo "</tr>";
        }
    }
?>