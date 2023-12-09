    <?php
        extract($orderdetail);
        // extract($get_bill);
        
        $ship = rand(30000, 40000);
        $tongcong = $total+$ship;
        $madh="";
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
                    return 'Chưa giải quyết';
                case 2:
                    return 'Đã xác nhận';
                case 3:
                    return 'Đang giao hàng';
                case 4:
                    return 'Hoàn thành';
                case 5:
                    return 'Giao hàng thất bại';
            }
        }
        $tt='';
        $tt2='';
                if($bill_status==1){
                    $tt='<span class="badge rounded-pill alert-warning">chưa giải quyết</span>';
                    $tt2='chưa giải quyết';
                } 
                if($bill_status==2){
                    $tt='<span class="badge rounded-pill alert-success">Đã xác nhận</span>';
                    $tt2='Đã xác nhận';
                } 
                if($bill_status==3){
                    $tt='<span class="badge rounded-pill alert-success">Đang giao hàng</span>';
                    $tt2='Đang giao hàng';
                } 
                if($bill_status==4){
                    $tt='<span class="badge rounded-pill alert-success">Hoàn thành</span>';
                    $tt2='Hoàn thành';
                } 
                if($bill_status==5){
                    $tt='<span class="badge rounded-pill alert-warning">Giao hàng thất bại</span>';
                    $tt2='Giao hàng thất bại';
                } 
                if($bill_status==6){
                    $tt='<span class="badge rounded-pill alert-danger">Cancelled</span>';
                    $tt2='Cancelled';
                } 
            

        
        
        foreach ($ordercart as $item) {
            extract($item);
            if($img!=""){
                $img_file = '../'.PATH_IMGG.$img;
                if(file_exists($img_file)){
                    $hinh = '<img src="'.$img_file.'" width="60px">';
                }else{
                    $hinh = 'Hình không tồn tại trên host';
                }
            }else{
                $hinh = 'Chưa có hình';
            }
            $thanhtien=$price*$soluong;
            $html_cartorder='';
            extract($item);
            $html_cartorder.='<tr>
                                <td>
                                    <div class="left">
                                        '.$hinh.'
                                    </div>
                                    <div class="info">'.$name.'</div>
                                </td>
                                <td>'.number_format($price,0,",",".").'VNĐ</td>
                                <td>'.$soluong.'</td>
                                <td style="color: red;" class="text-end">'.number_format($thanhtien,0,",",".").'VNĐ</td>
                            </tr>';
        }
    ?>

<section class="content-wrapper">
    <div class="content-header">
        <div>
            <h2 class="content-title card-title"></h2>
            <strong style="color: blue;">Chi tiết về đơn hàng: HTPS_<?=$id?></strong>
        </div>
    </div>
    <form action="index.php?pg=orders" method="post">
        <div class="card">
            <header class="card-header">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 mb-lg-0 mb-15">
                        <span>
                            <i class="material-icons md-calendar_today"></i><b><?=$ngaydathang?></b>
                        </span> <br>
                        <small class="text-muted">Order ID: HTPS_<?=$id;?></small>
                    </div>
                    <form action="" method="post">
                        <div class="col-lg-6 col-md-6 ms-auto text-md-end">
                            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200" id="mySelect" name="order_status">
                                <!-- <option selected>Thay đổi trạng thái</option> -->
                                <?=$select;?>
                            </select>
                            <!-- <button type="submit" name="updatestatus" class="btn btn-primary">Save</button> -->
                            <a class="btn btn-secondary print ms-2" href="#">Điều Chỉnh Trạng Thái</a>
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
                                <strong style="color: rgb(254, 4, 4)" class="mb-1">Thông Tin Khách Hàng:</strong>
                                <p class="mb-1">
                                    Tên: <?=$bill_name;?> <br> Email: <a href="mailto:<?=$bill_email;?>" class="__cf_email__" data-cfemail="c7a6aba2bf87a2bfa6aab7aba2e9a4a8aa"><?=$bill_email;?></a> <br> Số Điện Thoại: <?=$bil_tell;?>
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
                                <strong  style="color: rgb(254, 4, 4)"  class="mb-1">Thông Tin Đặt Hàng:</strong>
                                <p class="mb-1">
                                    Vận chuyển: <strong style="color: rgb(0, 119, 255)">Giao hàng nhanh</strong> <br> 
                                    Phương thức thanh toán: <?=$tbpt?> <br> 
                                </p>
                                <a href="#">Tải Thông Tin Này Xuống ?</a>
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
                                <h5 style="color: green;" class="mb-1">Địa Chỉ Giao Hàng:</h5>
                                <p class="mb-1">
                                    <?=$bill_diachi;?>
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
                                        <th width="20%" class="text-end">Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?=$html_cartorder;?>
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
                                                    <dt>Tổng Tiền Bạn Cần Thanh Toán: <a href="#" style="color: red;"><?=number_format( $tongcong,0,",",".")?> VNĐ</a></dt>
                                                    
                                                </dl>
                                                <dl class="dlist">
                                                    
                                                    <dd>
                                                        <?php echo "$tt2";?>
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