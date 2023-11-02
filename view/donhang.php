<!-- 


<!DOCTYPE html>
<html>
<head>
    <title>Đơn Đặt Hàng</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .left-column {
        width: 48%;
    }

    .right-column {
        width: 48%;
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 5px;
    }

    h2 {
        font-size: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }


    .tong-tien {
        font-size: 24px;
        margin-top: 20px;
    }

    .don-hang-button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .don-hang-button:hover {
        background-color: #0056b3;
    }
    .dathang {
    width: 95%;
    background-color: #28a745; 
    color: white;
    margin: 10px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .dathang:hover {
        background-color: #218838; /* Màu xanh lá cây đậm khi hover */
    }
</style>

</head>
<body>
    <form class="form" action="index.php?page=donhang" id="orderForm">
        <div class="container">
            <div class="left-column">
                <h2>Thông Tin Người Đặt Hàng</h2>
                <label for="username">Họ và Tên:</label>
                <input type="text" id="username" name="name" required><br>
                <label for="dienthoai">Số Điện Thoại:</label>
                <input type="text" id="dienthoai" name="dienthoai" required><br>
                <label for="diachi">Địa Chỉ</label>
                <input type="text" id="diachi" name="diachi" required><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required><br>
            </div>
            <div class="right-column">
                    <h2>Chọn Phương Thức Thanh Toán:</h2>
                    <input type="radio"  id="pttt" name="pttt" value="Tiền Mặt">Tiền Mặt <br>
                    <input type="radio"  id="pttt" name="pttt" value="Chuyển Khoản Ngân Hàng">Chuyển Khoản Ngân Hàng <br>
                    <input type="radio"  id="pttt" name="pttt" value="Thẻ Tín Dụng">Thẻ Tín Dụng<br><br>
                    <input  class="dathang"   type="submit" name="donhang" id="submitOrder" value="Đặt Hàng">
            </div>
        </div>
    </form>

    <script>
    document.getElementById("orderForm").addEventListener("submit", function (e) {
        e.preventDefault(); 
        var name = document.getElementById("username").value;
        var phone = document.getElementById("dienthoai").value;
        var address = document.getElementById("diachi").value;
        var email = document.getElementById("email").value;
        var pttt = document.querySelector('input[name="pttt"]:checked').value;
        var isSuccess = true; 
        if (isSuccess) {
            Swal.fire({
                icon: 'success',
                title: 'Đặt hàng thành công!',
                html: `
                    <p>Cảm ơn bạn đã đặt hàng.</p>
                    <p>Thông tin của bạn:</p>
                    <ul>
                        Họ và Tên: ${name}<br>
                        Số Điện Thoại: ${phone}<br>
                        Địa Chỉ: ${address}<br>
                        Email: ${email}<br>
                        Phương Thức Thanh Toán: ${pttt}<br>
                    </ul>
                `,
                confirmButtonText: 'OK'
            }).then(function() {
                window.location.href = 'index.php';
            });
        }
    });
</script>


</body>
</html> -->
<style>
    .header__nav-top{
    width: 100%;
    height: 35px;
    background-color: #86c900;
}

.container{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}

.topbar_content--right{
    display: flex;
}

.topbar_content--left{
    font-size: 1.6rem;
    padding: 11px 14px;
    color: rgb(255, 255, 255);
    text-decoration: none;
}

.topbar_content{
    font-size: 1.6rem;
    padding: 12px 15px;
    color: rgb(231, 231, 231);
    text-decoration: none;
    position: relative;
}

.topbar_content:hover{
    color: white;
}

.header__navbar-item--separate::after{
    content: "";
    display: block;
    position: absolute;
    border-left: 1px solid rgb(231, 231, 231);
    height: 16px;
    right: 0px;
    top: 20px;
    transform: translateY(-50%);
}

.header__inner{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1250px;
    margin: 0 auto;
}

.header__logo{
    width: 300px;
}

.header__logo-img{
    width: 270px;
    padding: 10px;
}

.header__search{
    display: flex;
    align-items: center;
    border-radius: 2px;
    height: 40px;
    margin-top: 30px;
    background-color: white;
}

.header__search-input{
    width: 355px;
    height: 45px;
    font-size: 16px;
    padding: 15px;
    outline: none;
    border: 1px solid rgb(221, 221, 221);
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.header__search-btn{
    width: 45px;
    height: 45px;
    background-color: orange;
    outline: none;
    border: none;
    color: white;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;
    cursor: pointer;
}

.header__search-btn-icon{
    font-size: 2rem;
}

.contact{
    padding-top: 10px;
    font-size: 16px;
}

.contact_icon{
    width: 30px;
    height: 30px;
    border: 1px solid orange;
    border-radius: 100px;
    background-color: orange;
    color: white;
    padding: 6px;
}

.cart_button{
    width: 120px;
    height: 40px;
    margin-top: 30px;
    margin-right: 10px;
    border: 1px solid transparent;
    border-radius: 100px;
    font-size: 1.4rem;
    font-weight: bold;
    background-color: #00b214;
    color: white;
    transition: all linear 0.2s;
}

.cart_button:hover{
    color: black;
}

.cart{
    position: relative;
}
.box-cart{
    width: 300px;
    height: auto;
    border: 2px solid #e0e0e0;
    border-radius: 2px;
    background-color: #fff;
    z-index: 999;
    position: absolute;
    top: 70px;
    right: 0px;
    display: none;
    animation: fadeIn ease-in 0.2s;
}
.box-cart::before{
    content: "";
    border-width: 20px 20px;
    border-style: solid;
    border-color: transparent transparent white transparent;
    position: absolute;
    right: 50px;
    top: -30px;
}
.box-cart>span{
    font-size: 1.6rem;
    color: gray;
    display: flex;
    justify-content: center;
    padding-top: 30px;
}
.cart:hover .box-cart{
    display: block;
}
.cart_button-mobile{
    width: 50px;
    height: 40px;
    margin-top: 30px;
    margin-right: 40px;
    border: 1px solid transparent;
    border-radius: 100px;
    font-size: 2.2rem;
    font-weight: bold;
    background-color: #00b214;
    color: white;
    transition: all linear 0.2s;
}
.cart-mobile{
    display: none;
}
.header_menu{
    width: 100%;
    height: 50px;
    background-color: #00b214;
    z-index: 9999;

    top: -100px;
    transition: 1s;
}
.header_nav{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
}
.menu_item--link{
    display: block;
    padding: 17px 15px;
    text-decoration: none;
    font-size: 1.8rem;
    color: white;
    transition: all ease-in 0.1s;
}
.menu-item-active{
    color: black;
    background-color: white;
}
.menu-item:hover .menu_item--link{
    color: black;
    background-color: white;
}

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

.footer__info{
    width: 100%;
    height: 50px;
    background-color: #005919;
}

.footer__info-text{
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 1.4rem;
    font-weight: 400;
    padding-top: 20px;
}
.cart_item{
    display: flex;
}

</style>

<main class="main">
            <div class="page_checkout">
                <form class="form_checkout">
                    <div class="line"></div>
                    <div class="checkout">
                        <div class="info_checkout">
                            <div class="info">
                                <h3 class="checkout-title">Thông tin thanh toán</h3>
                                <p id="name">
                                    <label class="label" for="name">Họ và tên *</label> <br>
                                    <input class="name_input" type="text" name="name" placeholder="Nhập đầy đủ họ và tên của bạn">
                                </p>
                                <p id="address">
                                    <label class="label" for="address">Địa chỉ *</label> <br>
                                    <input class="address_input" type="text" name="address" placeholder="Ví dụ: Số xx Ngõ xx Phú Kiều, Bắc Từ Liêm, Hà Nội">
                                </p>
                                <p id="tel">
                                    <label class="label" for="tel">Số điện thoại *</label> <br>
                                    <input class="tel_input" type="text" name="tel">
                                </p>
                                <p id="email">
                                    <label class="label" for="email">Địa chỉ email *</label> <br>
                                    <input class="email_input" type="text" name="email">
                                </p>
                            </div>
                            <div class="info_additional">
                                <h3 class="checkout-title">Thông tin bổ sung</h3>
                                <p id="note">
                                    <label class="label" for="note">Ghi chú đơn hàng</label> <br>
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                                </p>
                            </div>
                        </div>
                        <div class="bill_chekckout">
                            <div class="bill-order_checkout">
                                <h3 class="order_title">Đơn hàng của bạn</h3>
                                <div class="order_review">
                                    <table class="shop_table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phẩm</th>
                                                <th class="product-total">Tạm tính</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td>
                                                    <div class="imgcheckout"><img width="50px" src="view/image/banchay8.jpg" alt=""></div>
                                                    <div class="tenspcheckout">giày nike</div>
                                                    <strong class="product-quantity">×&nbsp;1</strong>
                                                </td>
                                                <td><strong class="product-price">50.000₫</strong></td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Tạm tính</th>
                                                <td><strong class="product-price">150.000₫</strong></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng</th>
                                                <td><strong class="product-price">150.000₫</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div id="payment" class="checkout-payment">
                                        <ul class="payment_methods">
                                            <li class="payment_methods_bacs">
                                                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                                                <label class="label" for="payment_method_bacs">Chuyển khoản ngân hàng</label>
                                                <div class="payment_box payment_method_bacs">
                                                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                                                </div>
                                            </li>
                                            <li class="payment_methods_cod">
                                                <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                                                <label class="label" for="payment_method_cod">Trả tiền mặt khi nhận hàng</label>
                                                <div class="payment_box payment_method_cod">
                                                    <p>Trả tiền mặt khi giao hàng</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="place-order">
                                            <button type="submit" class="button" name="checkout_place_order" id="place_order" value="Đặt hàng" data-value="Đặt hàng">Đặt hàng</button>
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
                </form>
            </div>
       </main>
       <style>
        tbody .cart_item td{
            display: block;
            display:flex;
            align-items: center;
            
        }
        .imgcheckout {
            margin-right:10px;
        }
       </style>