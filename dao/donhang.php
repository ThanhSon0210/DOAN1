<?php 
    function bill_insert_id($madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $ship, $voucher, $total, $tongthanhtoan, $pttt){
        $sql = "INSERT INTO user (madh, iduser, nguoidat_ten, nguoidat_email, nguoidat_tel, nguoidat_diachi, nguoinhan_ten, nguoinhan_diachi, nguoinhan_tel, ship, voucher, total, tongthanhtoan, pttt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,  )";
        return pdo_execute_id ($sql, $madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $nguoinhan_ten, $nguoinhan_diachi, $nguoinhan_tel, $ship, $voucher, $total, $tongthanhtoan, $pttt);
    }
?>