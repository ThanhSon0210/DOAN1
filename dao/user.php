<?php
// require_once 'pdo.php';

function user_insert($username, $password, $email){
    $sql = "INSERT INTO user (username, pass, email) VALUES (?, ?, ?)";
    pdo_execute ($sql, $username, $password, $email);
}

function update_user($username, $password, $email, $diachi, $dienthoai, $vaitro, $id){
    $sql = "UPDATE user SET username=?,pass=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql, $username, $password, $email, $diachi, $dienthoai, $vaitro, $id);
}

function  checkuser($username, $password){
    $sql = "SELECT * from user WHERE username=? AND pass = ?";
    return pdo_query_one($sql,$username, $password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}

function get_user($id){
    $sql = "SELECT * from user WHERE id=?";
    return pdo_query_one($sql, $id);
}
function image(){
    $sql = "SELECT * from image";
    return (pdo_query($sql));
}


// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }