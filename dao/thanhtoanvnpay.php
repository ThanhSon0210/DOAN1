<?php

if(isset($_POST['redirect'])){
    $tong = intval($_POST['tong']);
    $code_order = rand(00,9999);
    

$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost/doan1/DOAN1/index.php?page=donhangconfirm";
$vnp_TmnCode = "Q7HD1GQL";//Mã website tại VNPAY 
$vnp_HashSecret = "IURKOLKLIYHSLRPUGDOIOHIAXKGFHITK"; //Chuỗi bí mật
//Config input format
//Expire
$startTime = date("YmdHis");
$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));


$vnp_TxnRef = $code_order; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = 'Noi dung thanh toan';
$vnp_OrderType = 'billpayment';
$vnp_Amount = $tong * 100;
$vnp_Locale = 'vn';
$vnp_BankCode = 'NCB';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
// if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
//     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
// }

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
       $_SESSION['code_cart'] = $code_order;
       unset($_SESSION['giohang']);
        // $inser_cart = "INSERT INTO bill(madh, iduser, bill_name, bill_email, bill_tell, bill_diachi, pttt, ngaydathang, bill_status, voucher, total, tongthanhtoan, code_cart) VALUES ('$madh', '$iduser', '$bill_name', '$bill_email', '$bill_tell', '$bill_diachi', '$pttt', '$ngaydathang', '$bill_status', '$voucher', '$total', '$tongthanhtoan', '$code_cart' )";
        // $cart_query = $mysqli->query($inser_cart);
        // foreach ($_SESSION['giohang'] as $item) {
        //     $id = $value = $item['id'];
        //     $soluong = $item['soluong'];
        // }
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
	// vui lòng tham khảo thêm tại code demo
}
// unset($_SESSION['giohang']);
