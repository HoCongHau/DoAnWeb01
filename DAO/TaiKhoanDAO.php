<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 08-12-2018
 * Time: 11:40 PM
 */
class TaiKhoanDAO extends DB
{
    //get all account
    public function GetAll(){
        $sql="SELECT MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan FROM TAIKHOAN Order by MaLoaiTaiKhoan";
        $result = $this->ExecuteQuery($sql);
        $lstTaiKhoan=array();
        while ($row=mysqli_fetch_array($result)){
            $taiKhoan=new TaiKhoanDTO();
            $taiKhoan->MaTaiKhoan=$row['MaTaiKhoan'];
            $taiKhoan->TenDangNhap=$row['TenDangNhap'];
            $taiKhoan->MatKhau=$row['MatKhau'];
            $taiKhoan->TenHienThi=$row['TenHienThi'];
            $taiKhoan->NgaySinh=$row['NgaySinh'];
            $taiKhoan->DiaChi=$row['DiaChi'];
            $taiKhoan->DienThoai=$row['DienThoai'];
            $taiKhoan->Email=$row['Email'];
            $taiKhoan->BiXoa=$row['BiXoa'];
            $taiKhoan->MaLoaiTaiKhoan=$row['MaLoaiTaiKhoan'];
            $lstTaiKhoan[]=$taiKhoan;
        }
        return $lstTaiKhoan;
    }

    //get by id
    public function GetById($id){
        $sql="SELECT MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan FROM TAIKHOAN where MaTaiKhoan = $id";
        $result = $this->ExecuteQuery($sql);
        $row=mysqli_fetch_array($result);
        $taiKhoan=new TaiKhoanDTO();
        $taiKhoan->MaTaiKhoan=$row['MaTaiKhoan'];
        $taiKhoan->TenDangNhap=$row['TenDangNhap'];
        $taiKhoan->MatKhau=$row['MatKhau'];
        $taiKhoan->TenHienThi=$row['TenHienThi'];
        $taiKhoan->NgaySinh=$row['NgaySinh'];
        $taiKhoan->DiaChi=$row['DiaChi'];
        $taiKhoan->DienThoai=$row['DienThoai'];
        $taiKhoan->Email=$row['Email'];
        $taiKhoan->BiXoa=$row['BiXoa'];
        $taiKhoan->MaLoaiTaiKhoan=$row['MaLoaiTaiKhoan'];
        return $taiKhoan;
    }


    //xóa tài khoan
    public function  DeleteByID($id){
        $sql="DELETE FROM TAIKHOAN WHERE MaTaiKhoan = '$id'";
        $result=$this->ExecuteQuery($sql);
        if($result==false){
            echo "Không thể xóa";
        }
        else{
            echo "Đã Xóa";
        }
    }

    //sửa tài khoản
    public function Update($taiKhoan)
    {
        $sql="UPDATE TAIKHOAN SET TenDangNhap=$taiKhoan->TenDangNhap,MatKhau=$taiKhoan->MatKhau,TenHienThi=$taiKhoan->TenHienThi,NgaySinh=$taiKhoan->NgaySinh,DiaChi=$taiKhoan->DiaChi,DienThoai=$taiKhoan->DienThoai,Email=$taiKhoan->Email,BiXoa=$taiKhoan->BiXoa,MaLoaiTaiKhoan=$taiKhoan->MaLoaiTaiKhoan WHERE MaTaiKhoan=$taiKhoan->MaTaiKhoan";
        $this->ExecuteQuery($sql);
    }

    //get all account by key word
    public function GetAllByKeyWord($key){
        $sql="Select MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan 
                FROM TAIKHOAN where TenDangNhap LIKE N'%$key%' Order by MaLoaiTaiKhoan";
        $result = $this->ExecuteQuery($sql);
        $lstTaiKhoan=array();
        while ($row=mysqli_fetch_array($result)){
            $taiKhoan=new TaiKhoanDTO();
            $taiKhoan->MaTaiKhoan=$row['MaTaiKhoan'];
            $taiKhoan->TenDangNhap=$row['TenDangNhap'];
            $taiKhoan->MatKhau=$row['MatKhau'];
            $taiKhoan->TenHienThi=$row['TenHienThi'];
            $taiKhoan->NgaySinh=$row['NgaySinh'];
            $taiKhoan->DiaChi=$row['DiaChi'];
            $taiKhoan->DienThoai=$row['DienThoai'];
            $taiKhoan->Email=$row['Email'];
            $taiKhoan->BiXoa=$row['BiXoa'];
            $taiKhoan->MaLoaiTaiKhoan=$row['MaLoaiTaiKhoan'];
            $lstTaiKhoan[]=$taiKhoan;
        }
        return $lstTaiKhoan;
    }

}