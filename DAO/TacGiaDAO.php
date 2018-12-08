<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 8-12-2018
 * Time: 8:12 PM
 */
include_once(__DIR__."/DB.php");
class TacGiaDAO extends DB{
    // get all tac gia (danh cho admin)
    public function GetAll(){
        $sql = "Select MaTacGia, TenTacGia, NgaySinh, TieuSu, BiXoa from tacgia";
        $result = $this->ExecuteQuery($sql);
        $lstTacGia = array();
        while($row = mysqli_fetch_array($result)){
            $tacGia = new TacGiaDAO();
            $tacGia->MaTacGia = $row["MaTacGia"];
            $tacGia->TenTacGia = $row["TenTacGia"];
            $tacGia->NgaySinh = $row["NgaySinh"];
            $tacGia->TieuSu = $row["TieuSu"];
            $tacGia->BiXoa = $row["BiXoa"];
            $lstTacGia[]= $tacGia;
        }
        return $lstTacGia;
    }

    // get all tac gia chua bi xoa (danh cho user)
    public function GetAllAvailable(){
        $sql = "Select MaTacGia, TenTacGia, NgaySinh, TieuSu, BiXoa from tacgia where BiXoa=0";
        $result = $this->ExecuteQuery($sql);
        $lstTacGia = array();
        while($row = mysqli_fetch_array($result)){
            $tacGia = new TacGiaDAO();
            $tacGia->MaTacGia = $row["MaTacGia"];
            $tacGia->TenTacGia = $row["TenTacGia"];
            $tacGia->NgaySinh = $row["NgaySinh"];
            $tacGia->TieuSu = $row["TieuSu"];
            $tacGia->BiXoa = $row["BiXoa"];
            $lstTacGia[]= $tacGia;
        }
        return $lstTacGia;
    }
}