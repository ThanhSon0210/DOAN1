<?php 
    extract($spct);

    $html_sp_lienquan = showsp($splq);
?>
<style>

.preview {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

@media screen and (max-width: 996px) {
    .preview {
        margin-bottom: 20px;
    }
}

.preview-pic {
 
 
    height: auto;
    width: 100%;
    background-size: cover;
}

.preview-thumbnail.nav-tabs {
    border: none;
    margin-top: 15px;
}

.preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%;
}

.preview-thumbnail.nav-tabs li img {
    max-width: 100%;
    display: block;
}

.preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 0;
}

.preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0;
}

.tab-content {
    overflow: hidden;
}

.tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
    animation-name: opacity;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
}

.card {
    background: #eee;
    padding: 3em;
    line-height: 2.1em;
}

@media screen and (min-width: 997px) {
    .wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }
}

.details {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
}

.colors {
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
}

.product-title,
.price,
.sizes,
.colors {
    text-transform: UPPERCASE;
    font-weight: bold;
}

.checked,
.price span {
    color: #ff9f1a;
}

.product-title,
.rating,
.product-description,
.price,
.vote,
.sizes {
    margin-bottom: 15px;
}

.product-title {
    margin-top: 0;
}

.size {
    margin-right: 10px;
}

.size:first-of-type {
    margin-left: 40px;
}

.color {
    display: inline-block;
    vertical-align: middle;
    margin-right: 10px;
    height: 2em;
    width: 2em;
    border-radius: 2px;
}

.color:first-of-type {
    margin-left: 20px;
}

.add-to-cart,
.like {
    background: #ff9f1a;
    padding: 1.2em 1.5em;
    border: none;
    text-transform: UPPERCASE;
    font-weight: bold;
    color: #fff;
    -webkit-transition: background .3s ease;
    transition: background .3s ease;
}
.like:hover {
    background: white;
    color: lightblue;
}

.not-available {
    text-align: center;
    line-height: 2em;
}

.not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff;
}

.orange {
    background: #ff9f1a;
}

.green {
    background: #85ad00;
}

.black {
    background: black;
}

.tooltip-inner {
    padding: 1.3em;
}

@-webkit-keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
    }

    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@keyframes opacity {
    0% {
        opacity: 0;
        -webkit-transform: scale(3);
        transform: scale(3);
    }

    100% {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}
</style>
<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lập trình Cùng HTPS</title>

   <!-- Thư viện font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--  End Thư viện font awesome -->

    <!-- thư viện bootstraps -->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- end thư viện bootstraps -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
   

    <main role="main">
        <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="card">
                <div class="container-fliud">
                    <form method="post" action="index.php?page=addcart">
                       
                        <input type="hidden" name="name" id="sp_ten" value="<?=$name?>">
                        <input type="hidden" name="price" id="sp_gia" value="<?=$price?>">
                        <input type="hidden" name="img" value="<?=$img?>">

                        <div class="wrapper row">
                            <div class="preview col-md-6">
                                <div class="preview-pic tab-content">
                                    <!-- <div class="tab-pane" id="pic-1">
                                        <img src="uploads/cd1.jpg" class="card-img-top" alt="...">
                                    </div>
                                    <div class="tab-pane" id="pic-2">
                                        <img src="../assets/img/product/samsung-galaxy-tab.jpg">
                                    </div> -->
                                    <div class="tab-pane active" id="pic-3">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active">
                                        <a data-target="#pic-1" data-toggle="tab" class="">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-2" data-toggle="tab" class="">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                        </a>
                                    </li>
                                    <li class="">
                                        <a data-target="#pic-3" data-toggle="tab" class="active">
                                        <img src="images/<?=$img?>" class="card-img-top" alt="...">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details col-md-6">
                                <h3 class="product-title" name="name"><?=$name?></h3>
                                <div class="rating">
                                    <div class="stars">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <span class="review-no"> <b><?=$view?></b> lượt xem</span>
                                    <span class="review-no"><b><?=$comment?></b> bình luận</span>
                                    <span class="review-no"><b><?=$share?></b> chia sẽ</span>
                                </div>
                                <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga fugiat atque explicabo non nobis velit! Velit nulla impedit, laboriosam fugit, quas debitis fugiat, ad alias accusamus distinctio repellat non nemo.</p>
                                <small class="text-muted">Giá cũ: <s><span>990.000 vnđ</span></s></small>
                                <h4 class="price">Giá hiện tại: <span><?=$price?> VND</span></h4>
                                <p class="vote"><strong>100%</strong> hàng <strong>Chất lượng</strong>, đảm bảo
                                    <strong>Uy
                                        tín</strong>!</p>
                                <h5 class="sizes">sizes:
                                    <span class="size" data-toggle="tooltip" title="cỡ Nhỏ">s</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Trung bình">m</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Lớn">l</span>
                                    <span class="size" data-toggle="tooltip" title="cỡ Đại">xl</span>
                                </h5>
                                <h5 class="colors">colors:
                                    <span class="color orange not-available" data-toggle="tooltip"
                                        title="Hết hàng"></span>
                                    <span class="color green"></span>
                                    <span class="color black"></span>
                                </h5>
                                <div class="form-group" style="margin-bottom:120px">
                                   <div class="quanlity">
                                        <label for="soluong">Số lượng đặt mua:</label>
                                        <input type="number" class="form-control" id="soluong" name="soluong" min="1" value="1">
                                   </div>
                                   <div class="action" >
                                        <button class="add-to-cart btn btn-default" type="submit" style="background-color: #E30019;color:white; margin-top:2em" name="addcart">Thêm vào giỏ hàng</button>
                                        <a class="like btn btn-default"  style="background-color: lightblue;color:white; margin-top:2em;"><span class="fa fa-heart"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="container-fluid">
                    <h3>Thông tin chi tiết về Sản phẩm</h3>
                    <div class="row">
                        <div class="col">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates sunt eius dolores obcaecati ducimus optio, officiis, ipsum placeat et perferendis illum eum eligendi earum at ut nisi veniam quasi. Suscipit!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End block content -->
        <div class="container" style="margin-top:20px;">
              <!-- bình luận đánh giá sản phẩm  -->
              <h3>ĐÁNH GIÁ SẢN PHẨM</h3>

                <div class="cmt" style="height: 60vh;width:auto;">
                    <iframe src="binhluan.php?idsp=<?=$_GET['idsp']?>" width="100%" height="100%"  frameborder="20"></iframe>
                </div>
                <!-- end bình luận đánh giá sản phẩm  -->

                <h2>SẢN PHẨM TƯƠNG TỰ</h2>
                <div class="col-md-12">
                    <div class="my-3" style="display:flex;flex-wrap:wrap">
                        <?= $html_sp_lienquan?>
                    </div>
                </div>
        </div>
    </main>
    <!-- Optional JavaScript -->

</body>

</html>