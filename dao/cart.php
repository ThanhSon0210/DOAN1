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
    
    function insert_cart($idpro, $iduser, $price, $name, $img, $soluong, $tongtien, $idbill){
        $sql = "INSERT INTO cart (idpro, iduser,  price, name, img, soluong, tongtien, idbill) values ('$idpro', '$iduser', '$price', '$name', '$img', '$soluong', '$tongtien', '$idbill')";
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
            case '0':
                $tt = 'Đơn hàng mới';
                break;
            case '1':
                $tt = 'Đang xử lý';
                break;
            case '2':
                $tt = 'Đang giao hàng';
                break;
            case '3':
                $tt = 'Đã giao hàng';
                break;
            default:
                $tt = 'Đơn hàng mới';
                break;
        }
        return $tt;
    }
     
    function loadall_thongke(){
        $sql = "SELECT danhmuc.name, count(sanpham.id) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price)";
        $sql = "FROM sanpham LEFT JOIN danhmuc ON sanpham.iddm";
        $sql = "order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }

?>