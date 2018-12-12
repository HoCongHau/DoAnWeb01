<?php 
    function __uploadFile($fileName){
        if (isset($_FILES[$fileName])) {
            $file = $_FILES[$fileName]['tmp_name'];
            $tenHinh = $_FILES[$fileName]['name'];
            $path = "C:/xampp/htdocs/DoAnWeb01/GUI/images/".$_FILES[$fileName]['name'];
            move_uploaded_file($file, $path);
        }
        return $tenHinh;
    }
?>