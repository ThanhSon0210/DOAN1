
<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function get_dssp_nb($limit){
    $sql = "SELECT * FROM sanpham ORDER BY id DESC limit ".$limit;
    return pdo_query($sql);
}

function get_hm($limit){
    $sql = "SELECT * FROM hangmuc ORDER BY id  limit ".$limit;
    return pdo_query($sql);
}

function get_dssp_lienquan($iddm, $id, $limit){
    $sql = "SELECT * FROM sanpham WHERE iddm=? AND id<>? ORDER BY id DESC limit ".$limit;
    return pdo_query($sql, $iddm, $id);
}

function get_dssp_sale($limit){
    $sql = "SELECT * FROM sanpham WHERE bestseller = 1 ORDER BY id DESC limit ".$limit;
    return pdo_query($sql);
}

function get_dssp($key, $iddm, $limit){
    $sql = "SELECT * FROM sanpham WHERE 1";
    if($iddm>0){
        $sql .=" AND iddm=".$iddm;
    }
    if($key != ""){
        $sql .=" AND name like '%".$key."%'";
    }
    $sql .= " ORDER BY id DESC limit ".$limit;
    return pdo_query($sql);
}
function viewsp($id){
    $sql = "SELECT view FROM sanpham where id = $id";
    return pdo_query($sql);
}
function view(){
    $sql = "SELECT view FROM sanpham ";
    return pdo_query($sql);
}
function view_update($view , $id){
    $sql = "UPDATE sanpham SET view = $view where id = $id";
    return pdo_query($sql);
}


function get_sp_by_id($id){
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}   

function showsp($dssp) {
    $html_dssp = '';

    foreach ($dssp as $sp) {
        extract($sp);
        $linkk = "index.php?page=chitiet&idsp=" . $id;
        $html_dssp .= '
            <div class="col-sm-3 product-item">
                <div class="card mb-3 mx-1 my-1">
                    <a href="' . $linkk . '"><img src="images/' . $img . '" class="card-img-top img-fluid" style="height: 220px;"  alt="..."></a>
                    <div class="card-body">
                        <div class="icongt" style="display: flex;">
                            <span style="margin-right:10px;"><i class="fa-solid fa-eye"></i> '.$view.'</span>
                            <span style="margin-right:10px;"><i class="fa-solid fa-comment"></i> '.$comment.' </span>
                            <span><i class="fa-solid fa-share"></i> '.$share.' </span>
                        </div>
                            <h4 class="card-title">' . $name . '</h4>
                            <del style="color: black;">900.000VND</del>
                            <span style="display: flex;"><h5 class="card-text" style="color: red;">'.$price.' VND</h5><b style="margin-left:10px; background-color: red; color:white ; height: 1.5rem; width:3rem;display: flex;justify-content: center; border-radius:10%; font-family: monospace;">Sale</b></span>
                            <p class="card-text">
                                🎁Tặng phiếu mua hàng (20$) <br> <a href="" style="text-decoration:none;">Xem chi tiết</a>
                            </p>

                        <form action="index.php?page=addcart" method="post">
                            <input type="hidden" name="idpro" value="' . $id . '">
                            <input type="hidden" name="name" value="' . $name . '">
                            <input type="hidden" name="img" value="' . $img . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="hidden" name="view" value="'.$view.'">
                            <input type="hidden" name="soluong" value="1"> 
                            <div class="buton2" style="display: flex;flex-wrap: no-wrap;">
                                <button class="btn btn-primary custom-buy-button" type="submit" name="addcart" style="float : left;">
                                    Mua Ngay <i class="fa fa-plus-circle"></i>
                                </button>
                                
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" name="themhang" style="margin-left:10px;display:flex; flex-wrap:no-wrap;">
                                    <i class="fa-solid fa-cart-plus"></i> Thêm Hàng
                                </button>
                            </div>
                           
                            <div class="offcanvas offcanvas-end" id="demo">
                                <div class="offcanvas-header">
                                    <h1 class="offcanvas-title"> <i class="fa-solid fa-cart-shopping"></i> Giỏ Hàng</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div class="d-flex flex-column">
                                        <div class="p-2 bg-info">
                                            <input type="hidden" name="img-themhang" value="Ảnh của máy tính">Ảnh cuuar máy tính
                                            <input type="hidden" name="price-themhang" value="2.300.000 VND" >2.300.000 VND
                                        </div>
                                    </div>
                                    <br>
                                    <a href="index.php?page=viewcart"><button class="btn btn-secondary" type="submit" name="thanhtoan">Thanh Toán</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ';
    }

    return $html_dssp;
}

// function show_sp($dssp){
//     $html_dssp='';
//     foreach ($dssp as $sp) {
//       extract($sp);
//       $linkk = "index.php?page=chitiet&idsp=".$id;
//       $html_dssp.='<div class="col-sm-3 product-item">
//                         <div class="card mb-3 mx-1 my-1">
//                             <a href="'.$linkk.'"><img src="images/'.$img.'" class="card-img-top img-fluid" style="height: 220px;"  alt="..."></a>
//                             <div class="card-body">
//                                 <h5 class="card-title">'.$name.'</h5>
//                                 <h6 class="card-text" style="color: red;">'.$price.'<del style="color: black;"></st>900.000VND</del></h6>
//                                 <p class="card-text">
//                                     🎁Tặng phiếu mua hàng (20$) <br> Xem chi tiết
//                                 </p>
//                                 <form action="index.php?page=addcart" method="post">
//                                     <input type="hidden" name="name" value="'.$name.'">
//                                     <input type="hidden" name="img" value="'.$img.'">
//                                     <input type="hidden" name="price" value="'.$price.'">
//                                     <input type="hidden" name="soluong" value="1"> 
//                                     <button class="btn btn-primary" type="submit" name="addcart" 
//                                             style="display: flex; align-items: center; justify-content: center;">
//                                         MUA <i class="fa fa-plus-circle"></i>
//                                     </button>      
//                                 </form>
//                             </div>
//                         </div>
//                     </div>';
//     }
//     return  $html_dssp;
// }
// function get_dssp_best($limi){
//     $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }
// function get_dssp_view($limi){
//     $sql = "SELECT * FROM sanpham ORDER BY view DESC limit ".$limi;
//     return pdo_query($sql);
// }

// function get_dssp($iddm,$limi){
//     $sql = "SELECT * FROM sanpham WHERE 1";
//     if($iddm>0){
//         $sql .=" AND iddm=".$iddm;
//     }
//     $sql .= " ORDER BY id DESC limit ".$limi;
//     return pdo_query($sql);
// }

// function showsp($dssp){
//     $html_dssp='';
//     foreach ($dssp as $sp) {
//         extract($sp);
//         if($bestseller==1){
//             $best='<div class="best"></div>';
//         }else{
//             $best='';
//         }
//         $html_dssp.='<div class="box25 mr15">
//                             '.$best.'
//                             <img src="layout/images/'.$img.'" alt="">
//                             <span class="price">'.$price.' đ</span>
//                             <button>Đặt hàng</button>
//                         </div>';
//     }
//     return $html_dssp;
// }



// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }