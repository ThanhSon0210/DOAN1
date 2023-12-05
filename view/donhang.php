<style>
    .form_checkout{
        width: 1140px;
        margin: 0 auto;
        padding-top: 50px;
    }
    .checkout{
        display: flex;
    }
    .line{
        width: 640px;
        border-bottom: 2px solid #e0e0e0;
    }
    .info_checkout{
        width: 670px;
        padding-top: 20px;
    }
    .checkout-title{
        font-size: 18px;
        font-weight: 400;
    }
    .label{
        font-size: 14px;
        color: #000000;
        display: inline-block;
        padding-top: 20px;
        padding-bottom: 5px;
    }
    .info>p>input{ 
        width: 640px;
        height: 40px;
        padding: 10px;
        font-size: 16px;
        outline: none;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
    }
    .info>p>input:focus{
        box-shadow: 0 0 10px #e0e0e0;
    }
    .info_additional{
        padding-top: 25px;
    }
    .info_additional>p>textarea{
        width: 640px;
        height: 120px;
        padding: 10px;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        outline: none;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
    }
    .info_additional>p>textarea:focus{
        box-shadow: 0 0 10px #e0e0e0;
    }

    .bill_chekckout{
        width: 470px;
        padding: 20px;
        border: 2px solid #00000082;
    }
    .order_title{
        font-size: 18px;
        font-weight: 400;
    }
    .order_review{
        padding-top: 20px;
    }
    .shop_table{
        width: 425px;
    }
    .shop_table>thead>tr{
        width: 425px;
        display: flex;
        justify-content: space-between;
        border-bottom: 4px solid #e0e0e0;
        padding-bottom: 5px;
    }
    .shop_table>thead>tr>th{
        text-transform: uppercase;
        font-size: 15px;
        color: #3f3f3f;
    }
    .product-name{
        padding-top: 7px;
    }
    .product-total{
        width: 50px;
    }
    .shop_table>tbody>tr{
        display: flex;
        justify-content: space-between;
        width: 425px;
        padding-top: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e0e0e0;
    }
    .shop_table>tbody>tr>td{
        margin-top: 10px;
        font-size: 16px;
        color: #3f3f3f;
    }
    .product-price{
        color: black;
    }
    .shop_table>tfoot>tr{
        display: flex;
        justify-content: space-between;
        width: 425px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e0e0e0;
    }
    .shop_table>tfoot>.order-total{
        border-bottom: 3px solid #e0e0e0;
    }
    .shop_table>tfoot>tr>th,td{
        margin-top: 10px;
        font-size: 16px;
        color: #3f3f3f;
    }
    .payment_methods_bacs{
        padding-bottom: 10px;
        border-bottom: 1px solid #e0e0e0;
    }
    .payment_methods>li{
        list-style: none;
    }
    .payment_methods>li>label{
        font-weight: 500;
        font-size: 16px;
        padding-left: 10px;
    }
    .payment_box{
        padding-top: 10px;
        line-height: 1.5;
        font-size: 16px;
    }
    .payment_method_bacs,
    .payment_method_cod{
        color: #3f3f3f;
    }
    .button{
        margin: 30px 0 25px 0;
        width: 100px;
        height: 40px;
        outline: none;
        border: none;
        border-radius: 5px;
        background-color: orange;
        font-size: 16px;
        font-weight: 500;
        color: #fff;
        transition: all 0.2s ease-in-out;
    }
    .button:hover{
        background-color: #cc7000;
    }
    .privacy-policy-text{
        line-height: 1.5;
        font-size: 16px;
        color: #3f3f3f;
        padding-bottom: 25px;
    }
    .section__content{
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 70px 0;
    }

    .content__item{
        width: 387px;
        height: 495px;
        margin: 0 15px;
    }

    .content__item-title{
        font-size: 2rem;
        margin-bottom: 20px;
    }

    .content__item-img{
        width: 180px;
        height: 60px;
    }

    .content__item-text{
        font-size: 1.5rem;
        color: rgb(77, 77, 77);
        margin: 25px 0;
    }

    .content__item-text>p{
        color: black;
        margin: 10px 0;
    }

    .content__item-text-green{
        color: #00b214;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .content__item-text-fanpage-link{
        text-decoration: none;
        color: black;
    }

    .content__item-text-fanpage-link:hover{
        color: orange;
    }

    .content__link-icon{
        text-decoration: none;
    }

    .content__link-icon>img{
        width: 33px;
        text-decoration: none;
    }

    .content__list-item{
        margin: 20px;
    }

    .content__list-item>a{
        text-decoration: none;
        color: black;
        font-size: 1.4rem;
    }

    .content__list-item>a:hover{
        color: orange;
    }
    .page_checkout
    {
        margin-bottom: 50px;
    }

</style>


<main class="main ">
            <div class="page_checkout">
                <form action="index.php?page=donhangconfirm" method="post" class="form_checkout">


                    <div class="checkout">
                        <div class="info_checkout">
                            <div class="info">
                                <h3 class="checkout-title">Thông tin thanh toán</h3>
                                <?php 
                                    if(isset($_SESSION['s_user'])){
                                        $name = $_SESSION['s_user']['username'];
                                        $diachi = $_SESSION['s_user']['diachi'];
                                        $dienthoai = $_SESSION['s_user']['dienthoai'];
                                        $email = $_SESSION['s_user']['email'];
                                    }else{
                                        $name = "";
                                        $diachi = "";
                                        $dienthoai = "";
                                        $email = "";
                                    }
                                ?>
                                <p id="name">
                                    
                                    <label class="label" for="name">Họ và tên *</label> 
                                    <input class="name_input" type="text" name="hoten" value="<?=$name?>" placeholder="Nhập đầy đủ họ và tên của bạn" >
                                </p>
                                <p id="address">
                                    <label class="label" for="address">Địa chỉ *</label> 
                                    <input class="address_input" type="text" name="diachi" value="<?=$diachi?>" placeholder="...">
                                </p>
                                <p id="tel">
                                    <label class="label" for="temailel">Số điện thoại *</label> 
                                    <input class="tel_input" type="text" name="dienthoai" value="<?=$dienthoai?>" >
                                </p>
                                <p id="email">
                                    <label class="label" for="email">Địa chỉ email *</label> 
                                    <input class="email_input" type="text" name="email" value="<?=$email?>" >
                                </p>
                            </div>
                            <div class="info_additional">
                                <h3 class="checkout-title">Thông tin bổ sung</h3>
                                <p id="note">
                                    <label class="label" for="note">Ghi chú đơn hàng</label> 
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                                </p>
                            </div>
                        </div>


                       

                        <div class="bill_chekckout">
                            <div class="bill-order_checkout">
                                <h3 class="order_title">Đơn hàng của bạn</h3>
                                <table id="my-cart">
                                    <tbody>
                                        <?php
                                            showcart(0);
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4" style="text-align: right">
                                                Tổng Tiền :
                                            </th>
                                            <th style="text-align: center"; colspan="5">
                                                <?= $tong ?>
                                            </th>     
                                        </tr>
                                    </tfoot>
                                </table>
                                    <div id="payment" class="checkout-payment">
                                        <ul class="payment_methods">
                                            <li class="payment_methods_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="pttt" value="1" checked="checked" data-order_button_text=""> Chuyển khoản ngân hàng
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                                                </div>
                                            </li>
                                            <li class="payment_methods_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="pttt" value="2" data-order_button_text=""> Tiền mặt
                                                <div class="payment_box payment_method_cod">
                                                    <p>Trả tiền mặt khi giao hàng</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="place-order">
                                           
                                        <button type="submit"  name="dongydathang" style="position: absolute; z-index: 999;">fsdffsdf</button>
                                                <!-- <input type="submit" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG" data-value="Đặt hàng"> -->
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="privacy-policy-text">
                                    <p>Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể khác đã được mô tả trong 
                                    <a href="#" class="privacy-policy-link" target="_blank">chính sách riêng tư</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 id="toggleLink">Địa chỉ nhận ở nơi khác ⬇️ </h4>
                    <div class="containerr" id="container">
                        <div class="order-info">
                            <label for="name">Họ và tên:</label>
                            <input type="text" id="name_nguoinhan" name="hoten_nguoinhan" >
                            <label for="email">Điện thoại:</label>
                            <input type="text" id="dienthoai_nguoinhan" name="dienthoai_nguoinhan" >
                            <label for="address">Địa chỉ:</label>
                            <input type="text" id="diachi_nguoinhan" name="diachi_nguoinhan" >
                            <button type="submit">Đặt hàng</button>
                        </div>
                    </div>
                </form>
            </div><br><br><br>
       </main>
       <script>
        document.getElementById('toggleLink').addEventListener('click', function() {
            var container = document.getElementById('container');
            if (container.style.display === 'none') {
                container.style.display = 'block';
            } else {
                container.style.display = 'none';
            }
        });
    </script>