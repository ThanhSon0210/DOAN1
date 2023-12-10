<?php
   function get_catalog($ktw=""){
      $sql="SELECT * FROM danhmuc WHERE 1";
      if($ktw!=""){
         $sql.=" AND name like'%".$ktw."%'";
      }
      $sql.=" ORDER BY name";
      return get_all($sql);
   }

   function update_catalog($id,$name){
      $sql = "UPDATE danhmuc SET name='$name' WHERE id=".$id;
      update($sql);
   }

   function get_catalog_detail($id){
      $sql="SELECT * FROM danhmuc WHERE id=".$id;
      return get_one($sql);
   }

   function delete_dm($id){
      $sql = "DELETE FROM danhmuc WHERE id=".$id;
      delete($sql);
      $tb = "Đã xóa danh mục";
      return $tb;
   }

   function insert_catalog($name){
      $sql = "INSERT INTO danhmuc (name) VALUES ('$name' )";
      insert($sql);
   }
?>