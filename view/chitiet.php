<?php 
    extract($spct);

    $html_sp_lienquan = showsp($splq);
?>
<style>

    #product-list{
    display: grid;
    grid-template-columns: 10% 40% 40%; 
    gap: 30px;
    }
    .imagedetails-mota{
        display: grid;
        grid-template-rows: auto auto auto auto;
    }
    .imagedetails-mota img{
        width: 100%;
    }
        .motaCT button{
        width: 400px;
        padding: 10px;
        background-color: white;
        color: black;
        margin-left: 10%;
    }
    .onesp button{
        width: 300px;
        padding: 10px;
        background-color: white;
        color: black;
    }
    .onesp button:hover{
        color: white;
        background-color: rgb(58, 58, 58);
    }
    .motaCT button:hover{
        color: white;
        background-color: rgb(58, 58, 58);
    }
    .motaCT i{
        color: rgb(235, 235, 32);
    }
    .addto input{
        width: 80px;
        padding: 10px;
    }
    .share {
        display: grid;
        grid-template-columns: 30% 30% 30%;
        font-size: x-large;
        color: black;
    }
    .share i{
        color: black;
        font-size: small;
    }
    .end-of-description{
        display: grid;
        grid-template-columns: 25% 25% 25%;
        gap: 30px;
        margin-left:  15%;
    }
    .child-description{
        height: 400px;
        text-align: center;
    }
    .child-description p{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .end-child-description h1{
        text-align: center;
    }

</style>
<div class="container">
        <div id="product-list">
            <div class="imagedetails-mota">
            </div>
            <div class="my-3 col-xxl-12">
                <div class="card mb-3">
                    <img src="images/<?=$img?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?=$name?></h5>
                      <h6 class="card-text" style="color: red;"><?=$price?> <del style="color: black;">900.000VND</del></h6>
                      <p class="card-text">
                        🎁Tặng phiếu mua hàng (20$) Xem chi tiết
                      </p>
                      <a href="#" class="btn btn-primary" style="display: flex; align-items: center; justify-content: center;">MUA <i class="fa fa-plus-circle"></i></a>
                    </div>
                  </div>
            </div>
            <div class="motaCT">
                <h1><?=$name?></h1>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 1089 reviews 
                <H3>K2-C1Z</H3><br>
                <p>Vui lòng gửi email của bạn trên "Thông báo cho tôi khi có hàng" nếu mẫu sản phẩm hết hàng.
                    Bàn phím cơ Keychron K2 Wireless bao gồm keycaps cho cả hệ điều hành Windows và Mac.</p>
                <BR>
                <div class="addto">
                    <h3>Số Lượng</h3>
                    <input type="number" min="1" max="10">
                </div><br>
                <div class="share">
                    <i class="fab fa-facebook"> Share</i> 
                    <i class="fab fa-twitter"> Twitter</i> 
                    <i class="fab fa-pinterest"> Pin</i>
                </div>
                <br><br>
                <a href=""><button>SHOW CART</button></a>
            </div>
        </div>
        <hr>
        <h2>SẢN PHẨM TƯƠNG TỰ</h2>
        <div class="col-md-12">
            <div class="my-3" style="display:flex;flex-wrap:wrap">
                <?= $html_sp_lienquan?>
            </div>
        </div>
        <h3>ĐÁNH GIÁ SẢN PHẨM</h3>
        <div class="row"  style="border-bottom: 1px solid rgb(0, 0, 0); padding: 5px;">
            <div class="col-sm-3">
                <strong><i class="fa fa-user-circle"></i> Lê Thanh Sơn</strong><br>
                ⭐⭐⭐⭐⭐<br>
                <i>11:59 21/09/2023 </i><br>
            </div>
            <div class="col-sm-5">
                <p> Chất lượng sản phẩm: quá tốt <br>
                    Tính năng nổi bật: gõ kêu rất êm tay. bàn phím mượt <br>
                    Bàn phím gõ rất êm, shop gói hàng cũng rất kĩ, nên mua nha
                </p>
                <a href=""><i class="fa fa-thumbs-up"></i></a> 48
            </div>
            <div class="col-sm-1">
                <img src="images/cmt5.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt1.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt3.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt2.jpg" class="card-img-top" alt="">
            </div>
        </div>
        <div class="row"  style="border-bottom: 1px solid rgb(0, 0, 0); padding: 5px;">
            <div class="col-sm-3">
                <strong><i class="fa fa-user-circle"></i> Lê Thanh Sơn</strong><br>
                ⭐⭐⭐⭐⭐<br>
                <i>11:59 21/09/2023 </i><br>
            </div>
            <div class="col-sm-5">
                <p> Chất lượng sản phẩm: quá tốt <br>
                    Tính năng nổi bật: gõ kêu rất êm tay. bàn phím mượt <br>
                    Bàn phím gõ rất êm, shop gói hàng cũng rất kĩ, nên mua nha</p>
                    <a href=""><i class="fa fa-thumbs-up"></i></a> 48
            </div>
            <div class="col-sm-1">
                <img src="images/cmt5.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt1.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt3.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt2.jpg" class="card-img-top" alt="">
            </div>
        </div>
        <div class="row"  style="border-bottom: 1px solid rgb(0, 0, 0); padding: 5px;">
            <div class="col-sm-3">
                <strong><i class="fa fa-user-circle"></i> Lê Thanh Sơn</strong><br>
                ⭐⭐⭐⭐⭐<br>
                <i>11:59 21/09/2023 </i><br>
            </div>
            <div class="col-sm-5">
                <p> Chất lượng sản phẩm: quá tốt <br>
                    Tính năng nổi bật: gõ kêu rất êm tay. bàn phím mượt <br>
                    Bàn phím gõ rất êm, shop gói hàng cũng rất kĩ, nên mua nha</p>
                    <a href=""><i class="fa fa-thumbs-up"></i></a> 48
            </div>
            <div class="col-sm-1">
                <img src="images/cmt5.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt1.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt3.jpg" class="card-img-top" alt="">
            </div>
            <div class="col-sm-1">
                <img src="images/cmt2.jpg" class="card-img-top" alt="">
            </div>
        </div>
        <h3  class="my-3">CHO TÔI BIẾT CẢM NHẬN CỦA BẠN</h3>
        <form method="post" action="">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nhập tên của bạn</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nhận xét của bạn</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Chọn ảnh</label>
                <input type="file" class="form-control" id="exampleInputPassword1" accept="image/*">
              </div>              
            <button type="submit" class="btn btn-primary">Gửi <i class="fa fa-paper-plane"></i></button>
          </form>
    </div>