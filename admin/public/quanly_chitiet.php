<?php
    extract($orderdetail);
    // extract($get_bill);
    $madh="";
    var_dump($orderdetail);
    // $bill_name = $orderdetail['bill_name'];
    // echo $bill_name;
    // // var_dump($bill_name);
    // foreach ($orderdetail as $item) {
    //     $bill_name = $item['bill_name'];
    //     echo $bill_name;
    //     // Thực hiện các thao tác khác với giá trị bill_name
    // }
    if($pttt = 0){
        $tbpt='Thanh toán khi nhận hàng';
    }
    if($pttt = 1){
        $tbpt='Thanh toán bằng thẻ tín dụng';
    }
    $select="";
    // Mảng chứa các trạng thái và đường link tương ứng
    $statusOptions = [
        1 => 'index.php?page=order-pending&id='.$id.'',
        2 => 'index.php?page=order-confirm&id='.$id.'',
        3 => 'index.php?page=order-delivering&id='.$id.'',
        4 => 'index.php?page=order-complete&id='.$id.'',
        5 => 'index.php?page=order-fail&id='.$id.'',
        6 => '#',
    ];
    // Tạo tùy chọn cho mỗi trạng thái
    $bill_status="";
    foreach ($statusOptions as $value => $link) {
        $selected = ($bill_status == $value) ? 'selected' : '';
        $select .= '<option value="' . $link . '" ' . $selected . '>' . getStatusText($value) . '</option>';
    }
    // Hàm ánh xạ giá trị 'status' sang trạng thái tương ứng
    
    function getStatusText($bill_status){
        switch ($bill_status) {
            case 1:
                return 'chưa giải quyết';
            case 2:
                return 'Đã xác nhận';
            case 3:
                return 'Đang giao hàng';
            case 4:
                return 'Hoàn thành';
            case 5:
                return 'Giao hàng thất bại';
            case 6:
                return '...';
            default:
                return 'Unknown status';
            

        }
    }
    if($value==1){
        $tt='<span class="badge rounded-pill alert-warning">chưa giải quyết</span>';
        $tt2='chưa giải quyết';
    } 
    if($value==2){
        $tt='<span class="badge rounded-pill alert-success">Đã xác nhận</span>';
        $tt2='Đã xác nhận';
    } 
    if($value==3){
        $tt='<span class="badge rounded-pill alert-success">Đang giao hàng</span>';
        $tt2='Đang giao hàng';
    } 
    if($value==4){
        $tt='<span class="badge rounded-pill alert-success">Hoàn thành</span>';
        $tt2='Hoàn thành';
    } 
    if($value==5){
        $tt='<span class="badge rounded-pill alert-warning">Giao hàng thất bại</span>';
        $tt2='Giao hàng thất bại';
    } 
    if($value==6){
        $tt='<span class="badge rounded-pill alert-danger">Cancelled</span>';
        $tt2='Cancelled';
    } 
    
    extract($ordercart);
    $html_cartorder='';
    $thanhtien=0;
    foreach ($ordercart as $item) {
        extract($item);
        $html_cartorder.='<tr>
                            <td>
                                <div class="left">
                                    <img src="../uploads/'.$img.'" width="40" height="40" class="img-xs" alt="Item">
                                </div>
                                <div class="info">'.$name.'</div>
                            </td>
                            <td>'.number_format($price,0,",",".").'VNĐ</td>
                            <td>'.$soluong.'</td>
                            <td class="text-end">'.number_format($thanhtien,0,",",".").'VNĐ</td>
                        </tr>';
    }
?>

<section class="content-wrapper">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title">Chi tiết đơn hàng</h2>
            <p>Chi tiết về đơn hàng: #<?=$madh;?></p>
        </div>
    </div>
    <form action="index.php?pg=orders" method="post">
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                        <span>
                            <i class="material-icons md-calendar_today"></i><b><?=$ngaydathang?> - giờ</b>
                        </span> <br>
                        <small class="text-muted">Order ID: #<?=$madh;?></small>
                    </div>
                    <form action="" method="post">
                        <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200" id="mySelect" name="order_status">
                                <!-- <option selected>Thay đổi trạng thái</option> -->
                                <?=$select;?>
                            </select>
                            <!-- <button type="submit" name="updatestatus" class="btn btn-primary">Save</button> -->
                            <a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print"></i></a>
                        </div>
                    </form>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">
                <div class="row mb-50 mt-20 order-info-wrap">
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-person"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Khách hàng</h6>
                                <p class="mb-1">
                                    <?=$bill_name;?> <br> <a href="mailto:<?=$bill_email;?>" class="__cf_email__" data-cfemail="c7a6aba2bf87a2bfa6aab7aba2e9a4a8aa"><?=$bill_email;?></a> <br> <?=$bill_tell;?>
                                </p>
                                <!-- <a href="#">View profile</a> -->
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-local_shipping"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Thông tin đặt hàng</h6>
                                <p class="mb-1">
                                    Vận chuyển: Giao hàng nhanh <br> 
                                    Phương thức thanh toán: <?=$tbpt?> <br> 
                                    Tình trạng: <?=$tt2?>
                                </p>
                                <!-- <a href="#">Download info</a> -->
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                    <div class="col-md-4">
                        <article class="icontext align-items-start">
                            <span class="icon icon-sm rounded-circle bg-primary-light">
                                <i class="text-primary material-icons md-place"></i>
                            </span>
                            <div class="text">
                                <h6 class="mb-1">Giao hàng tới</h6>
                                <p class="mb-1">
                                    <?=$nguoidat_diachi;?>
                                </p>
                                <!-- <a href="#">View profile</a> -->
                            </div>
                        </article>
                    </div>
                    <!-- col// -->
                </div>
                <!-- row // -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="40%">Sản phẩm</th>
                                        <th width="20%">Đơn giá</th>
                                        <th width="20%">Số lượng</th>
                                        <th width="20%" class="text-end">Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?=$html_cartorder;?>
                                    <!-- <tr>
                                        <td>
                                            <a class="itemside" href="#">
                                                <div class="left">
                                                    <img src="./view/assets/imgs/items/1.jpg" width="40" height="40" class="img-xs" alt="Item">
                                                </div>
                                                <div class="info"> T-shirt blue, XXL size </div>
                                            </a>
                                        </td>
                                        <td> $44.25 </td>
                                        <td> 2 </td>
                                        <td class="text-end"> $99.50 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="itemside" href="#">
                                                <div class="left">
                                                    <img src="./view/assets/imgs/items/2.jpg" width="40" height="40" class="img-xs" alt="Item">
                                                </div>
                                                <div class="info"> Winter jacket for men </div>
                                            </a>
                                        </td>
                                        <td> $7.50 </td>
                                        <td> 2 </td>
                                        <td class="text-end"> $15.00 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="itemside" href="#">
                                                <div class="left">
                                                    <img src="./view/assets/imgs/items/3.jpg" width="40" height="40" class="img-xs" alt="Item">
                                                </div>
                                                <div class="info"> Jeans wear for men </div>
                                            </a>
                                        </td>
                                        <td> $43.50 </td>
                                        <td> 2 </td>
                                        <td class="text-end"> $102.04 </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="itemside" href="#">
                                                <div class="left">
                                                    <img src="./view/assets/imgs/items/4.jpg" width="40" height="40" class="img-xs" alt="Item">
                                                </div>
                                                <div class="info"> Product name color and size </div>
                                            </a>
                                        </td>
                                        <td> $99.00 </td>
                                        <td> 3 </td>
                                        <td class="text-end"> $297.00 </td>
                                    </tr> -->
                                    <tr>
                                        <td colspan="4">
                                            <article class="float-end">
                                                <dl class="dlist">
                                                    <dt>Tạm tính:</dt>
                                                    <dd><?=number_format($total,0,",",".")?> VNĐ</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Giá vận chuyển:</dt>
                                                    <dd><?=number_format($ship,0,",",".")?> VNĐ</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt>Tổng cộng:</dt>
                                                    <dd> <b class="h5"><?=number_format($tongthanhtoan,0,",",".")?></b> VNĐ</dd>
                                                </dl>
                                                <dl class="dlist">
                                                    <dt class="text-muted">Trạng thái</dt>
                                                    <dd>
                                                        <?=$tt?>
                                                    </dd>
                                                </dl>
                                            </article>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive// -->
                        <!-- <a class="btn btn-primary" href="page-orders-tracking.html">Xem theo dõi đơn hàng</a> -->
                    </div>
                    <!-- col// -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <!-- <div class="box shadow-sm bg-light">
                            <h6 class="mb-15">Thông tin thanh toán</h6>
                            <p>
                                <img src="./view/assets/imgs/card-brands/2.png" class="border" height="20"> Master Card **** **** 4768 <br> Business name: Grand Market LLC <br> Phone: +1 (800) 555-154-52
                            </p>
                        </div> -->
                        <div class="h-25 pt-4">
                            <div class="mb-3">
                                <label>Ghi chú</label>
                                <textarea class="form-control form-control1" name="notes" id="notes" placeholder="Type some note"></textarea>
                                <script>
                                    // Sử dụng JavaScript để set giá trị cho thẻ textarea
                                    var note="<?=($note!="")?$note:"";?>"
                                    document.getElementById('notes').value = note;
                                </script>
                            </div>
                            <button class="btn btn-primary">Lưu ghi chú</button>
                        </div>
                    </div>
                    <!-- col// -->
                </div>
            </div>
            <!-- card-body end// -->
        </div>
    </form>
    <!-- card end// -->
</section>

<script>
    // Lấy phần tử select
    var select = document.getElementById("mySelect");

    // Thêm sự kiện onchange để mở liên kết khi chọn một option
    select.addEventListener("change", function () {
        // Lấy giá trị của option được chọn
        var selectedValue = select.value;

        // Chuyển hướng trang
        window.location.href = selectedValue;
    });
</script>