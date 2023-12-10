<?php
    function order_insert_id($mahd, $iduser, $bill_name, $bill_email, $bill_tell, $bill_diachi, $total, $voucher, $tongthanhtoan, $pttt, $date,$bill_status){
    $sql = "INSERT INTO bill (madh, iduser, bill_name, bill_email, bill_tell, bill_diachi, total, voucher, tongthanhtoan, pttt, ngaydathang, bill_status) VALUES (?, ?, ?, ?, ?, ? ,?, ?, ?, ?, ?,?)";   
    return pdo_execute_id($sql, $mahd, $iduser, $bill_name, $bill_email, $bill_tell, $bill_diachi, $total, $voucher, $tongthanhtoan, $pttt, $date,$bill_status);
}
    function get_order(){
        $sql= "SELECT * FROM bill ";
        return get_all($sql);
     }
     function get_other_all(){
        $sql = " SELECT * FROM bill ORDER BY id ASC ";
        return get_one($sql);
    }
     function get_order_by_id($id){
        $sql = "SELECT * FROM bill WHERE id=".$id;
        return get_one($sql,$id);
    }
    function get_bill(){
        $sql = "SELECT * FROM bill ";
        // $iduser = 'user';
        // $bill_name = 'bill_name';
        // $bill_diachi = 'bill_diachi';
        // $bill_tell = 'bill_tell';
        // $bill_email = 'bill_email';
        // $ngaydathang = 'ngaydathang';
        // $total = 'total';
        return get_all($sql);
    }



    function get_cart_by_id($id){
        // Sử dụng prepared statement để tránh SQL injection
        $sql = "SELECT c.*, p.name FROM cart c JOIN sanpham p ON c.idpro = p.id WHERE c.idbill =$id";
        $result = get_all($sql);
        return $result;
    }
    function get_order_home(){
        $sql = "SELECT * FROM bill ORDER BY id";
        return get_all($sql);
    }



    function get_status($id){
        $sql = "SELECT bill_status FROM bill WHERE id=".$id;
        $kq = get_one($sql);
        return $kq["bill_status"];
    }
    function update_status($id, $bill_status) {
        $sql = "UPDATE bill SET bill_status = ? WHERE id = ?";
        pdo_execute($sql,$bill_status,$id );
    }


    function hien_thi_other($orderlist, $soluongother){
        $tong_other= count($orderlist);
        $so_trang_other = ceil($tong_other/$soluongother);
        $html_stother="";
        for ($i=1; $i <= $so_trang_other ; $i++){
            $html_stother .='<li class="page-item active">
                                <a class="page-link" href="index.php?page=orders&page='.$i.'">'.$i.'</a>
                            </li>';
        }
        return $html_stother;
    }
    
?>