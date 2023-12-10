<?php
    include_once 'dao/pdo.php';
    // include_once 'dao/thanhtoanvnpay.php';
    if (isset($_GET['vnp_Amount'])) {
        $mysqli = pdo_get_connection();

        $vnp_Amount = $_GET['vnp_Amount'];
        $vnp_BankCode = $_GET['vnp_BankCode'];
        $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
        $vnp_CardType = $_GET['vnp_CardType'];
        $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
        $vnp_PayDate = $_GET['vnp_PayDate'];
        $vnp_ResponseCode = $_GET['vnp_ResponseCode'];
        $vnp_TmnCode = $_GET['vnp_TmnCode'];
        $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
        $vnp_TxnRef = $_GET['vnp_TxnRef'];
        $vnp_TransactionStatus = $_GET['vnp_TransactionStatus'];
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $code_cart = $_SESSION['code_cart'];

        $sql = "INSERT INTO vnpay(vnp_Amount,vnp_BankCode,vnp_BankTranNo,vnp_CardType,vnp_OrderInfo,vnp_PayDate
        ,vnp_ResponseCode,vnp_TmnCode,vnp_TransactionNo,vnp_TxnRef,vnp_TransactionStatus,vnp_SecureHash,code_cart)
         VALUES ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo', '$vnp_CardType', '$vnp_OrderInfo', '$vnp_PayDate', '$vnp_ResponseCode'
         , '$vnp_TmnCode','$vnp_TransactionNo','$vnp_TxnRef', '$vnp_TransactionStatus','$vnp_SecureHash', '$code_cart')";

        $cart_query = $mysqli->query($sql);
        if ($cart_query) {
            // $_SESSION['code_cart'] = '';
            // header('Location: index.php');
            echo "<script>alert('Thanh toán thành công');</script>";
            echo "<script>window.location='index.php';</script>";
        }else{
            echo "<script>alert('Thanh toán thất bại');</script>";
            echo "<script>window.location='index.php';</script>";
        }
    }else{
        echo 'Không có gì hết';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    .body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .order-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        max-width: 500px;
        width: 100%;
    }

    .status {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .status.pending {
        color: #e67e22;
    }

    .status.shipped {
        color: #3498db;
    }

    .status.delivered {
        color: #2ecc71;
    }

    .status.failed {
        color: #e74c3c;
    }

    .order-details {
        margin-top: 10px;
    }

    .order-details p {
        margin: 8px 0;
    }

    .atd {
        background-color: #089b17;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    #my-cart {
    border-collapse: collapse;
    width: 100%;
    }

    #my-cart th,
    #my-cart td {
        padding: 8px;
        text-align: center;
    }

    #my-cart th {
        background-color: #f2f2f2;
    }

    #my-cart tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #my-cart img {
        max-width: 100px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    #my-cart a {
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        border: 1px solid black;
        padding: 4px;
        border-radius: 5px;
    }

    #my-cart a:hover {
        background-color: rgb(254, 2, 2);
    }

    #my-cart a:hover {
        background-color: rgb(254, 2, 2);
    }
    .my-cart {
        margin-top: 50px;
    }
</style>
    <title>Đã đặt hàng</title>
</head>
<div class="body">
    <div class="order-container">
        <div class="status pending"><h2>CẢM ƠN BẠN ĐÃ ĐẶT HÀNG</h2></div>
            <?php 
                if(isset($bill) && (is_array($bill))){
                    extract($bill);
            ?>
        <div class="order-details">
            <h3 style="color: red">Thông tin người đặt</h3>
            <p><strong>Tên:  <?=$bill['bill_name']?> </strong> </p>
            <p><strong>Địa chỉ:  <?=$bill['bill_diachi']?> </strong>  </p>
            <p><strong>Điện Thoại:  <?=$bill['bil_tell']?> </strong>  </p>
            <p><strong>Email: <?=$bill['bill_email']?>  </strong> </p>
        </div>
        <div class="order-details">
            <h3 style="color: red">Thông tin đơn hàng</h3>
            <p><strong>Mã đơn hàng: <?='HTPS_'.$bill['id']?> </strong> </p>
            <p><strong>Ngày đặt: <?=$bill['ngaydathang']?> </strong> </p>
            <p><strong>Phương thức thanh toán: <?=$bill['pttt']; 
                            if($bill['pttt'] == 1){
                                echo 'Chuyển khoản ngân hàng';
                            }else if($bill['pttt'] == 2){
                                echo 'Tiền mặt'; 
                            }else{
                                echo 'PTTT không xác định'; 
                            }?>
                </strong>
            </p>
            <p><strong style="color: rgb(79, 65, 207);">Tổng tiền: <?=$bill['total']?> </strong>  </p>
        </div>
               <?php }else{
                    echo "Không thể in đơn hàng";
                }
            ?>
        <!-- <table id="my-cart">
            <tbody>

            </tbody>
        </table> -->
        <br>
        <a href="index.php?page=lsdh"  style="text-decoration: none; display: flex; align-items: center; justify-content: center; " class="atd">Theo dõi đơn hàng của bạn</a>
    </div>
</div>
</html>
