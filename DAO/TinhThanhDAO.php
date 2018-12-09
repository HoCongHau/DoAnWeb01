<?php
/**
 * Created by PhpStorm.
 * User: Ho Cong Hau
 * Date: 9-12-2018
 * Time: 1:56 PM
 */

include_once(__DIR__."/DB.php");
class TinhThanhDAO extends DB{
    // lấy danh sách tất cả các tỉnh thành
    public function GetAll(){
        $sql = "Select MaTinh, TenTinh from tinhthanh";
        $result = $this->ExecuteQuery($sql);
        $lstTinhThanh = array();
        while($row = mysqli_fetch_array($result)){
            $tinhThanh = new TinhThanhDAO();
            $tinhThanh->MaTinh = $row["MaTinh"];
            $tinhThanh->TenTinh = $row["TenTinh"];
            $lstTinhThanh[]=$tinhThanh;
        }
        return $lstTinhThanh;
    }
}