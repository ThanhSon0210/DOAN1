<?php


    function thembl($name,$iduser,$idsp,$noidung){
        $conn = pdo_get_connection();
        $sql = "INSERT INTO binhluan(name ,iduser, idsp, noidung) VALUES('$name','$iduser','$idsp','$noidung') ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $nguoidung = $stmt->fetchAll();
  	    $conn = null;
        return $nguoidung;
    }
    function showbl(){
        $conn = pdo_get_connection();
        $sql = "SELECT * FROM binhluan ORDER BY id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $nguoidung = $stmt->fetchAll();
  	    $conn = null;
        return $nguoidung;

    }
    function showbl_sp($idsp){
        $conn = pdo_get_connection();
        $sql = "SELECT * FROM binhluan where idsp=$idsp ORDER BY id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $nguoidung = $stmt->fetchAll();
  	    $conn = null;
        return $nguoidung;

    }
    function xoabl($id){
        $conn = pdo_get_connection();
        $sql = "DELETE FROM binhluan WHERE id = '$id' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    $nguoidung = $stmt->fetch();
  	    $conn = null;
        return $nguoidung;
    }
    function fixbl($id,$noidung){
        $conn = pdo_get_connection();
        $sql = "UPDATE binhluan SET noidung = '$noidung' WHERE id = '$id' ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $nguoidung = $stmt->fetch();
        $conn = null;
        return $nguoidung;
    }
    function user_sanpham($iduser,$idsp){
        $conn = pdo_get_connection();
        $sql = "SELECT * FROM binhluan WHERE iduser = $iduser AND idsp = $idsp ORDER BY id desc ";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $nguoidung = $stmt->fetchAll();
        $conn = null;
        return $nguoidung;
    }
   

?>