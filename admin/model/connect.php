<?php

   function connectdb(){
      $servername = "localhost";
      $username = "root";
      $password = "";
         try {
            $conn = new PDO("mysql:host=$servername;dbname=sonnu", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  // echo "Kết nối database thành công";
            } catch(PDOException $e) {
            // echo "Connection failed: " . $e->getMessage();
         }
      return $conn;
   }


   function get_all($sql){
      $conn=connectdb();
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $arrproduct=$stmt->fetchAll();
      $conn = null;
      return  $arrproduct;
   }

   function get_one($sql){
      $conn=connectdb();
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $arrproduct=$stmt->fetch();
      $conn = null;
      return $arrproduct;
   }
   
   function delete($sql) {
      $conn=connectdb();
      $conn->exec($sql);
      $conn = null;
   }
   function insert($sql) {
      $conn=connectdb();
      $conn->exec($sql);
      $conn = null;
   }

   function update($sql){
      $conn=connectdb();
      // Prepare statement
      $stmt = $conn->prepare($sql);
      // execute the query
      $stmt->execute();
      $conn = null;
   }
?>
