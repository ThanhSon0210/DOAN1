<?php
   // get all
   function getnewproduct($idcatalog=0,$ktw=""){
      $sql="SELECT * FROM sanpham WHERE 1";
      if($idcatalog>0){
         $sql.=" AND idcatalog=".$idcatalog;
      }
      if($ktw!=""){
         $sql.=" AND name like'%".$idcatalog."%'";
      }
      $sql.=" ORDER BY id DESC";
      return get_all($sql);
   }
   function getsaleproduct(){
      $sql="SELECT * FROM sanpham WHERE promotion>0 ORDER BY promotion DESC";
      return get_all($sql);
   }
   function getviewproduct(){
      $sql="SELECT * FROM sanpham WHERE view>0 ORDER BY view DESC";
      return get_all($sql);
   }
   function getfeatureproduct(){
      $sql="SELECT * FROM sanpham WHERE new=1 ORDER BY id DESC";
      return get_all($sql);
   }
   function get_related_product($idcatalog,$idproduct){
      $sql="SELECT * FROM sanpham WHERE idcatalog=".$idcatalog." AND id<>".$idproduct." ORDER BY id DESC";
      return get_all($sql);
   }
   // get one record
   function get_product_detail($idproduct){
      $sql="SELECT * FROM sanpham WHERE id=".$idproduct;
      return get_one($sql);
   }
   // get value
   function get_idcatalog($idproduct){
      $sql="SELECT idcatalog FROM sanpham WHERE id=".$idproduct;
      $getone=get_one($sql);
      extract($getone);
      return $idcatalog;
   }
   function get_img_product($idproduct){
      $sql="SELECT img FROM sanpham WHERE id=".$idproduct;
      $getone=get_one($sql);
      extract($getone);
      return $img;
   }
   //check khóa ngoại
   function check_catalog($idcatalog){
      $sql="SELECT * FROM sanpham WHERE idcatalog=".$idcatalog;
      $prolist=get_all($sql);
      return count($prolist);
   }
   // xáo sản phẩm admin
   function delete_sp($id){  
      $sql = "DELETE FROM sanpham WHERE id=".$id;
      delete($sql);
   }
   
?>