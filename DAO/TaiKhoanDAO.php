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
        return $result=$this->ExecuteQuery($sql);
    }

    //sửa tài khoản
    public function Update($taiKhoan)
    {
        $sql="UPDATE TAIKHOAN SET TenDangNhap='$taiKhoan->TenDangNhap',MatKhau='$taiKhoan->MatKhau',TenHienThi='$taiKhoan->TenHienThi',NgaySinh='$taiKhoan->NgaySinh',DiaChi='$taiKhoan->DiaChi',DienThoai='$taiKhoan->DienThoai',Email='$taiKhoan->Email' WHERE MaTaiKhoan='$taiKhoan->MaTaiKhoan'";
        return $this->ExecuteQuery($sql);
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

    // đánh dấu xoá tài khoản
    public function SetDelete($id){
        $sql = "UPDATE TaiKhoan set BiXoa = 1 where MaTaiKhoan= $id";
        return $this->ExecuteQuery($sql);
    }

    // huỷ đánh dấu xoá tài khoản
    public function UnSetDelete($id){
        $sql = "UPDATE TaiKhoan set BiXoa = 0 where MaTaiKhoan= $id";
        return $this->ExecuteQuery($sql);
    }

    // thêm tài khoản
    public function InsertAdmin($taiKhoan){
        $sql = "INSERT INTO TAIKHOAN(TenDangNhap,MatKhau,TenHienThi,NgaySinh,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan) 
        VALUES('$taiKhoan->TenDangNhap', '$taiKhoan->MatKhau','$taiKhoan->TenHienThi','$taiKhoan->NgaySinh','$taiKhoan->DiaChi','$taiKhoan->DienThoai', '$taiKhoan->Email', 0, 111)";
        return $this->ExecuteQuery($sql);
    }

}