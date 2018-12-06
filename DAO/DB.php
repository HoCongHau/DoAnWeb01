<?php
/**
 * Created by PhpStorm.
 * User: Ho Trung Hieu
 * Date: 06-12-2018
 * Time: 2:54 PM
 */
class DB
{
    var $db_host='localhost:4000';
    var $db_username='root';
    var $db_password='';
    var $db_dbName='quanlysach';

    public function ExecuteQuery($sql){
        $conn=mysqli_connect($this->db_host,$this->db_username,$this->db_password,$this->db_dbName) or die("Cannot connect to db");
        mysqli_query($conn,"set names 'utf8'");

        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }
}

class DataProvider
{
    var $db_host='localhost:4000';
    var $db_username='root';
    var $db_password='';
    var $db_dbName='quanlysach';

    public static function ExecuteQuery($sql){
        $conn=mysqli_connect('localhost:4000','root','','quanlysach') or die("Cannot connect to db");
        mysqli_query($conn,"set names 'utf8'");

        $result=mysqli_query($conn,$sql);
        mysqli_close($conn);
        return $result;
    }
}
?>