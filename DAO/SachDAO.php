<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 08-12-2018
 * Time: 7:31 PM
 */
include_once(__DIR__."/DB.php");
class SachDAO extends DB{
    // get all sach (cho admin)
    public function GetAll(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // get all ma chua bi xoa sach (cho user)
    public function GetAllAvailable(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, XuatXu, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // get all theo ngay nhap giam dan
    public function GetAllDescDate(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, XuatXu, SoLuongBan, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach Order by NgayNhap DESC";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // lay 10 san pham ban chay nhat
    public function GetSachBestSeller(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0 
        ORDER by SoLuongBan DESC 
        LIMIT 10";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // lay 10 san pham moi nhat
    public function GetSachNew(){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu,SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0 
        ORDER by NgayNhap DESC 
        LIMIT 10";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }


    public function DemSoSach(){
        $sql = "Select count(MaSach) as Total from sach where BiXoa=0";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_assoc($result);
        return $row["Total"];
    }

    public function DemTatCaSach(){
        $sql = "Select count(MaSach) as Total from sach";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_assoc($result);
        return $row["Total"];
    }

    // lấy danh sách tất cả sản phẩm theo giới hạn
    public function GetAllAllowLimit($start, $limit){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach ORDER By NgayNhap DESC
        LIMIT $start, $limit";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }


    // lấy danh sách sản phẩm theo giới hạn mà không bị đánh dấu xóa
    public function GetAllowLimit($start, $limit){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where BiXoa=0 
        LIMIT $start, $limit ";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    //get by id
    public function GetByID($id){
        $sql = "Select MaSach ,TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where MaSach='$id'";
        $result=$this->ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        $sach =  new SachDAO();
        $sach->MaSach = $row["MaSach"];
        $sach->TenSach = $row["TenSach"];
        $sach->HinhURL = $row["HinhURL"];
        $sach->GiaSach = $row["GiaSach"];
        $sach->NgayNhap = $row["NgayNhap"];
        $sach->SoLuongTon = $row["SoLuongTon"];
        $sach->SoLuongBan = $row["SoLuongBan"];
        $sach->XuatXu=$row["XuatXu"];
        $sach->SoLuocXem = $row["SoLuocXem"];
        $sach->MoTa = $row["MoTa"];
        $sach->BiXoa=$row["BiXoa"];
        $sach->MaLoaiSach = $row["MaLoaiSach"];
        $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];

        return $sach;
    }
    //get by maLoai
    public function GetByMaLoai($maL){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where MaLoaiSach='$maL'";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    //get by manhaxuatban
    public function GetByNXB($maNXB){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where MaNhaXuatBan = '$maNXB'";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // hàm lấy sách từ từ khoá tìm kiếm
    public function GetBookByKeyWord($book){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where TenSach LIKE '%$book%' and BiXoa = 0";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // hàm lấy sách từ từ khoá tìm kiếm cho admin
    public function GetBookByKeyWordForAdmin($book){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where TenSach LIKE '%$book%' ";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // hàm lấy sách từ tìm kiếm nâng cao
    public function GetBySearchAdvange($loaisach, $nxb, $giamin, $giamax){
        $sql = "Select MaSach, TenSach, HinhURL, GiaSach, NgayNhap, SoLuongTon, SoLuongBan, XuatXu, SoLuocXem, MoTa, BiXoa, MaLoaiSach, MaNhaXuatBan 
        from sach where MaLoaiSach LIKE '$loaisach' and MaNhaXuatBan LIKE '$nxb' and (GiaSach >= '$giamin' and GiaSach <= '$giamax' ) ";
        $result=$this->ExecuteQuery($sql);
        $lstSach = array();
        while($row = mysqli_fetch_array($result)){
            $sach =  new SachDAO();
            $sach->MaSach = $row["MaSach"];
            $sach->TenSach = $row["TenSach"];
            $sach->HinhURL = $row["HinhURL"];
            $sach->GiaSach = $row["GiaSach"];
            $sach->NgayNhap = $row["NgayNhap"];
            $sach->SoLuongTon = $row["SoLuongTon"];
            $sach->SoLuongBan = $row["SoLuongBan"];
            $sach->XuatXu=$row["XuatXu"];
            $sach->SoLuocXem = $row["SoLuocXem"];
            $sach->MoTa = $row["MoTa"];
            $sach->BiXoa=$row["BiXoa"];
            $sach->MaLoaiSach = $row["MaLoaiSach"];
            $sach->MaNhaXuatBan = $row["MaNhaXuatBan"];
            $lstSach[] = $sach;
        }
        return $lstSach;
    }

    // xoá sách
    public function DeleteById($id){
        $sql = "DELETE  from Sach where MaSach= $id";
        return $this->ExecuteQuery($sql);
    }

    // cập nhật sách
    public function EditById($tenSach, $tenHinh, $giaSach, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa, $maSach){
        $sql = "UPDATE sach SET TenSach= '$tenSach', HinhURL = '$tenHinh', GiaSach = '$giaSach', SoLuongTon = '$soLuongTon', 
        XuatXu = '$xuatXu', MaLoaiSach = '$maLoaiSach', MaNhaXuatBan = '$maNXB', MoTa = '$moTa' WHERE MaSach='$maSach'"; 
        return $this->ExecuteQuery($sql);
    }

    // đánh dấu xoá
    public function SetDelete($id){
        $sql = "UPDATE Sach set BiXoa = 1 where MaSach= $id";
        return $this->ExecuteQuery($sql);
    }

    // huỷ đánh dấu xoá
    public function UnSetDelete($id){
        $sql = "UPDATE Sach set BiXoa = 0 where MaSach= $id";
        return $this->ExecuteQuery($sql);
    }

    // thêm sách
    public function Insert($tenSach, $hinhURL, $giaBan, $ngaynhap, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa){
        $sql = "INSERT INTO sach(TenSach,HinhURL,GiaSach,NgayNhap,SoLuongTon,XuatXu,MaLoaiSach,MaNhaXuatBan,MoTa,SoLuongBan,SoLuocXem) 
                VALUES ('$tenSach', '$hinhURL','$giaBan','$ngaynhap','$soLuongTon','$xuatXu', '$maLoaiSach', '$maNXB', '$moTa',0,0)";
        return $this->ExecuteQuery($sql);
    }
}