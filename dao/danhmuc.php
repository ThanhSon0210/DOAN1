<?php
require_once 'pdo.php';

// /**
//  * Thêm loại mới
//  * @param String $ten_danhmuc là tên loại
//  * @throws PDOException lỗi thêm mới
//  */
// function danhmuc_insert($ten_danhmuc){
//     $sql = "INSERT INTO danhmuc(ten_danhmuc) VALUES(?)";
//     pdo_execute($sql, $ten_danhmuc);
// }
// /**
//  * Cập nhật tên loại
//  * @param int $ma_danhmuc là mã loại cần cập nhật
//  * @param String $ten_danhmuc là tên loại mới
//  * @throws PDOException lỗi cập nhật
//  */
// function danhmuc_update($ma_danhmuc, $ten_danhmuc){
//     $sql = "UPDATE danhmuc SET ten_danhmuc=? WHERE ma_danhmuc=?";
//     pdo_execute($sql, $ten_danhmuc, $ma_danhmuc);
// }
// /**
//  * Xóa một hoặc nhiều loại
//  * @param mix $ma_danhmuc là mã loại hoặc mảng mã loại
//  * @throws PDOException lỗi xóa
//  */
// function danhmuc_delete($ma_danhmuc){
//     $sql = "DELETE FROM danhmuc WHERE ma_danhmuc=?";
//     if(is_array($ma_danhmuc)){
//         foreach ($ma_danhmuc as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_danhmuc);
//     }
// }
/**
 * Truy vấn tất cả các loại
 * @ return array mảng loại truy vấn được
 * @ throws PDOException lỗi truy vấn
 */
function danhmuc_all(){
    $sql = "SELECT * FROM danhmuc ORDER BY stt DESC";
    return pdo_query($sql);
}

function show_dm($dsdm){
    $html_dm = '';
    foreach ($dsdm as $dm) {
      extract($dm);
      $link = 'index.php?page=sanpham&iddm='.$id;
      $html_dm .= '<li class="list-group-item shadow-inset text-center">
                      <a href="'.$link.'" class="text-decoration-none">'.$name.'</a>
                    </li>';
    }
    return $html_dm;
}

function get_name_dm($id){
  $sql = "SELECT name FROM danhmuc WHERE id =".$id;
  $kq =  pdo_query_one($sql);
  return $kq['name'];
}

// function showdm($dsdm){
//     $html_dm='';
//     foreach ($dsdm as $dm) {
//         extract($dm);
//         $link='index.php?pg=sanpham&iddm='.$id;
//         $html_dm.='<a href="'.$link.'">'.$name.'</a>';
//     }
//     return $html_dm;
// }
// /**
//  * Truy vấn một loại theo mã
//  * @param int $ma_danhmuc là mã loại cần truy vấn
//  * @return array mảng chứa thông tin của một loại
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_select_by_id($ma_danhmuc){
//     $sql = "SELECT * FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_one($sql, $ma_danhmuc);
// }
// /**
//  * Kiểm tra sự tồn tại của một loại
//  * @param int $ma_danhmuc là mã loại cần kiểm tra
//  * @return boolean có tồn tại hay không
//  * @throws PDOException lỗi truy vấn
//  */
// function danhmuc_exist($ma_danhmuc){
//     $sql = "SELECT count(*) FROM danhmuc WHERE ma_danhmuc=?";
//     return pdo_query_value($sql, $ma_danhmuc) > 0;
// }