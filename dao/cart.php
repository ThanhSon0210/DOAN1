<?php 
    function showcart($del){
        global $tong; 
        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $i = 0;
            $tong = 0;
            $tt = 0;
            if($del == 1){
                $link_th = '<th>Chức Năng</th>';
                
            }else{
                $link_th = '';
                
            }
            echo ' <tr>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        '.$link_th. '
                    </tr>';
            foreach ($_SESSION['giohang'] as $cart) {
                extract($cart);
                $tt = (int)$price * (int)$soluong;
                $tong += $tt;
                if($del == 1){
                    
                    $link_td = '<td>
                                    <a href="index.php?page=delsp&ind= '. $i.'">
                                        <i class="fa fa-trash custom-cursor-on-hover"></i>
                                    </a>
                                </td>';
                }else{
                    
                    $link_td = '';
                }
                echo  '

                               
                
                                <tr>
                                    <td><img src="images/' . $img . '" alt="" width="80px";></td>
                                    <td>' . $name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $tt . '</td>
                                    '.$link_td.'
                                </tr><br>';
                $i++;
            }
        }
    }

    function showcart_ct($listbill){
        global $tong; 
        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $i = 0;
            $tong = 0;
            $tt = 0;
            echo ' <tr>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        '.$link_th. '
                    </tr>';
            foreach ($listbill as $cart) {
                extract($cart);
                $tt = (int)$price * (int)$soluong;
                $tong += $tt;
                if($del == 1){
                    
                    $link_td = '<td>
                                    <a href="index.php?page=delsp&ind= '. $i.'">
                                        <i class="fa fa-trash custom-cursor-on-hover"></i>
                                    </a>
                                </td>';
                }else{
                    
                    $link_td = '';
                }
                echo  '

                               
                
                                <tr>
                                    <td><img src="images/' . $img . '" alt="" width="80px";></td>
                                    <td>' . $name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $tt . '</td>
                                </tr><br>';
                $i++;
            }
        }
    }

    function bill_chitiet($listbill){
        global $tong; 
            $i = 0;
            $tong = 0;
            echo ' <tr>
                        <th>Ảnh Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        '.$link_th. '
                    </tr>';
            foreach ($listbill as $cart) {
                extract($cart);
                $tong += $cart['tongtien'];
                echo  '
                                <tr>
                                    <td><img src="images/' . $img . '" alt="" width="80px";></td>
                                    <td>' . $name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $tongtien . '</td>
                                </tr><br>';
                $i++;
            }
        }

    function tongtiendonhang(){
        $tong = 0;
            foreach ($_SESSION['giohang'] as $sp) {
                extract($sp);
                $tt = (int)$price * (int)$soluong;
                $tong += $tt;
            }
        return $tong;
    }

    function insert_bill($iduser, $hoten, $diachi, $dienthoai, $email, $pttt, $ngaydathang, $tongtiendonhang){
        $sql = "INSERT INTO bill(iduser, bill_name, bill_diachi, bil_tell, bill_email, pttt, ngaydathang, total) values ('$iduser', '$hoten', '$diachi', '$dienthoai', '$email', '$pttt', '$ngaydathang', '$tongtiendonhang')";
        return pdo_execute_return_lastInsertId($sql);
    }   
    
    function insert_cart($idpro, $iduser, $price, $img, $name , $soluong, $tongtien, $idbill){
        $sql = "INSERT INTO cart (idpro, iduser,  price, img, name , soluong, tongtien, idbill) values ('$idpro', '$iduser', '$price', '$img', '$name', '$soluong', '$tongtien', '$idbill')";
        return  pdo_execute($sql);
    }  
    
    function loadone_bill($id){
        $sql = "SELECT * FROM bill WHERE id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    
    function loadall_bill($id){
        $sql = "SELECT * FROM bill ORDER BY id DESC";
        return pdo_query($sql);
    }
    function get_ttdh($tt){
        switch ($tt) {
            case 0:
                return 'đơn hàng mới';
            case 1:
                return 'Đã xác nhận';
            case 2:
                return 'Đang giao hàng';
            case 3:
                return 'Hoàn thành';
            case 4:
                return 'Giao hàng thất bại';
            case 5:
                return '...';
            default:
                return 'Unknown status';
        }
        return $tt;
    }
    // function loadall_cart($idbill){
    //     $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
    //     $bill = pdo_query($sql);
    //     return $bill;
    // }
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice FROM sanpham LEFT JOIN danhmuc ON danhmuc.id=sanpham.iddm group by danhmuc.id order by danhmuc.id asc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

?>