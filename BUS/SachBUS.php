<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 7:37 AM
 */

class SachBUS{
    
    var $sachDAO;
    
    public function __construct()
    {
        $this->sachDAO=new SachDAO();
    }

    public function GetAll(){
        return $this->sachDAO->GetAll();
    }

    public function GetAllAvailable(){
        return $this->sachDAO->GetAllAvailable();
    }

    public function GetAllDescDate(){
        return $this->sachDAO->GetAllDescDate();
    }

    public function GetSachBestSeller(){
        return $this->sachDAO->GetSachBestSeller();
    }

    public function GetSachNew(){
        return $this->sachDAO->GetSachNew();
    }

    public function DemSoSach(){
        return $this->sachDAO->DemSoSach();
    }

    public function DemTatCaSach(){
        return $this->sachDAO->DemTatCaSach();
    }

    public function GetAllowLimit($start, $limit){
        return $this->sachDAO->GetAllowLimit($start,$limit);
    }

    public function GetAllAllowLimit($start, $limit){
        return $this->sachDAO->GetAllAllowLimit($start,$limit);
    }

    //GetByID
    public function GetByID($id){
        return $this->sachDAO->GetByID($id);
    }
    //getBymaloai sach
    public function GetByMaLoai($maL){
        return $this->sachDAO->GetByMaLoai($maL);
    }

    //GetByNXB sach
    public function GetByNXB($maNXB){
        return $this->sachDAO->GetByNXB($maNXB);
    }

    // GetAllBook By KeyWord
    public function GetBookByKeyWord($book){
        return $this->sachDAO->GetBookByKeyWord($book);
    }
    // GetAllBook By KeyWord Cho Admin
    public function GetBookByKeyWordForAdmin($book){
        return $this->sachDAO->GetBookByKeyWordForAdmin($book);
    }

    public function GetBySearchAdvange($loaisach, $nxb, $giamin, $giamax){
        return $this->sachDAO->GetBySearchAdvange($loaisach, $nxb, $giamin, $giamax);
    }

    // xoá sách
    public function DeleteById($id){
        return $this->sachDAO->DeleteById($id);
    }

    // cập nhật sách
    public function EditById($tenSach, $tenHinh, $giaSach, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa, $maSach){
        return $this->sachDAO->EditById($tenSach, $tenHinh, $giaSach, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa, $maSach);
    }

    // đánh dấu xoá
    public function SetDelete($id){
        return $this->sachDAO->SetDelete($id);
    }

    // huỷ đánh dấu xoá
    public function UnSetDelete($id){
        return $this->sachDAO->UnSetDelete($id);
    }

    // thêm sách
    public function Insert($tenSach, $hinhURL, $giaBan, $ngaynhap, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa){
        return $this->sachDAO->Insert($tenSach, $hinhURL, $giaBan, $ngaynhap, $soLuongTon, $xuatXu, $maLoaiSach, $maNXB, $moTa);
    }

    public function TangLuotXem($maSach){
        $this->sachDAO->TangLuotXem($maSach);
    }

}
