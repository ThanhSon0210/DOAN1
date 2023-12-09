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

?>