<?php
    
    function insert_giohang($id_user,$ngay_tao_dh,$trang_thai){
        $sql = "INSERT INTO gio_hang(id_user,ngay_tao_gh,trang_thai) VALUES('$id_user','$ngay_tao_dh','$trang_thai')";
        return pdo_execute_return_lastInsertId($sql);
    }
    function gio_hang(){
        $sql = "SELECT * FROM gio_hang";
        $load_giohang = pdo_query($sql);
        return $load_giohang;
    }
    function xoa_giohang(){
        $sql = "UPDATE gio_hang SET trang_thai = 1";
        pdo_execute($sql);
    }
    
?>