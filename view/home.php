<?php
  $html_dssp_sale = showsp($dssp_sale);
  $html_dssp_nb = showsp($dssp_nb);
?>
<style>
  .card1 {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 320px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    padding: 32px;
    overflow: hidden;
    border-radius: 10px;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
    color: #e8e8e8;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .content .heading {
    font-weight: 700;
    font-size: 32px;
  }

  .content .para {
    line-height: 1.5;
  }

  .content .btn {
    color: #e8e8e8;
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .card1::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
    z-index: -1;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .card1:hover::before {
    height: 100%;
  }

  .card1:hover {
    box-shadow: none;
  }

  .card1:hover .btn {
    color: #212121;
    background: #e8e8e8;
  }

  .content .btn:hover {
    outline: 2px solid #e8e8e8;
    background: transparent;
    color: #e8e8e8;
  }

  .content .btn:active {
    box-shadow: none;
  }

  .plan {
    border-radius: 16px;
    box-shadow: 0 30px 30px -25px rgba(0, 38, 255, 0.205);
    padding: 10px;
    background-color: #fff;
    color: #697e91;
    max-width: 300px;
  }

  .plan strong {
    font-weight: 600;
    color: #425275;
  }

  .plan .inner {
    align-items: center;
    padding: 20px;
    padding-top: 40px;
    background-color: #ecf0ff;
    border-radius: 12px;
    position: relative;
  }

  .plan .pricing {
    position: absolute;
    top: 0;
    right: 0;
    background-color: #bed6fb;
    border-radius: 99em 0 0 99em;
    display: flex;
    align-items: center;
    padding: 0.1em 0.75em;
    font-size: 1.3rem;
    font-weight: 00;
    color: #425475;
  }

  .plan .pricing small {
    color: #707a91;
    font-size: 0.75em;
    margin-left: 0.25em;
  }

  .plan .title {
    font-weight: 600;
    font-size: 1.25rem;
    color: #425675;
  }

  .plan .title+* {
    margin-top: 0.75rem;
  }

  .plan .info+* {
    margin-top: 1rem;
  }

  .plan .features {
    display: flex;
    flex-direction: column;
  }

  .plan .features li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .plan .features li+* {
    margin-top: 0.75rem;
  }

  .plan .features .icon {
    background-color: #1FCAC5;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
  }

  .plan .features .icon svg {
    width: 14px;
    height: 14px;
  }

  .plan .features+* {
    margin-top: 1.25rem;
  }

  .plan .action {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: end;
  }

  .plan .button {
    background-color: #6558d3;
    border-radius: 6px;
    color: #fff;
    font-weight: 500;
    font-size: 1.125rem;
    text-align: center;
    border: 0;
    outline: 0;
    width: 100%;
    padding: 0.625em 0.75em;
    text-decoration: none;
  }

  .plan .button:hover,
  .plan .button:focus {
    background-color: #4133B7;
  }

  /* giới thiệu bản thân */
  .flip-card {
    background-color: transparent;
    width: 245px;
    height: 270px;
    perspective: 1000px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
  }

  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 5px;
    border-radius: 2em;
    backface-visibility: hidden;
  }

  .flip-card-front {
    background-color: #B7E3D9;
    border: 4px solid #1700E3;
  }

  .profile-image {
    background-color: transparent;
    border: none;
    margin-top: 15px;
    border-radius: 5em;
    width: 120px;
    height: 120px;
    margin-left: 50px;
  }

  .pfp {
    border-radius: 35em;
    fill: #c143da;
  }

  .name {
    margin-top: 15px;
    font-size: 25px;
    color: #1700E3;
    font-weight: bold;
  }

  .flip-card-back {
    background-color: #1700E3;
    border: 4px solid #B7E3D9;
    transform: rotateY(180deg);
    padding: 11px;
  }

  .description {
    margin-top: 10px;
    font-size: 14px;
    letter-spacing: 1px;
    color: white
  }

  .socialbar {
    background-color: transparent;
    border-radius: 3em;
    width: 90%;
    padding: 14px;
    margin-top: 11px;
    margin-left: 10px;
    word-spacing: 24px;
    color: white;
  }

  .socialbar svg {
    transition: 0.4s;
    width: 20px;
    height: 20px;
    color: #B7E3D9
  }

  .socialbar svg:hover {
    color: yellowgreen;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
  #dm{
    display: grid;
    grid-template-columns: auto, auto, auto, auto, auto, auto, auto, auto, auto, auto;
  }
  #dssp
  {
    display: flex;
    flex-wrap: wrap;
  }

</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>trangg chủ HTPS</title>
</head>
<body>
  <div class="container">
    <!-- Row Danh mục -->
    <div class="row">
      <ul class="list-group col-md-2 my-2 fw-bold bg-light">
        <li class="list-group-item shadow-inset"><i class="fa-regular fa-keyboard"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">BÀN PHÍM KHÔNG DÂY</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-regular fa-keyboard"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none">BÀN PHÍM CÓ DÂY</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-sharp fa-solid fa-microchip"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none">PHỤ KIỆN</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-computer-mouse"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none">CHUỘT</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-money-bill-transfer"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">HÀNG CŨ</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-headphones"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">TAI NGHE - LOA</a></li>
        <li class="list-group-item shadow-inset"><i class="fa fa-hdd"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">BỘ NHỚ LƯU TRỮ</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-desktop"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">MÀNG HÌNH</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-rug"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">LÓT CHUỘT</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-brands fa-windows"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">PC GAMING</a></li>
        <li class="list-group-item shadow-inset"><i class="fa-solid fa-laptop"></i> <a href="" style="font-size: 12px; color: black;" class="text-decoration-none ">LAPTOP</a></li>
      </ul>

      <div id="carouselExampleCaptions" class="carousel slide col-md-8 my-2" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/b1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>sonnu keyboard</h2>
              <h4>Tất cả sản phẩm sẽ được làm mới trong ngày!</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/b2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2>SALE 50%</h2>
              <h4>Nhiều chương trình khuyến mãi hấp dẫn </h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner4.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h2 style="color: rgb(255, 255, 255)">Giảm giá cực sốc cho học sinh </h2>
              <h4 style="color: rgb(255, 255, 255);">Sinh viên không có nhiều điều kiện đừng lo hãy đến với chúng tôi</h4>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <ul class="list-group  col-md-2 my-2">
        <img src="images/banner1.webp" class="list-group my-4" alt="">
        <img src="images/banner3.webp" class="list-group my-4" alt="">
        <img src="images/banner2.webp" class="list-group my-4" alt="">
      </ul>
    </div>
    <!-- End Row Danh mục -->

    <!-- scroll top  -->
    <div class="scroll" style="background-color: #212121; width: 3rem; color:white; position: fixed; height: auto; bottom: 20px;left: 20px; text-align: center;border-radius: 30%; padding: 10px; opacity: 0.7;">
        <a href="#sectionheader" style="color: white;"> <i class="fa-solid fa-arrow-up fs-2"></i></a>
    </div>
      <!-- end scroll top  -->

    <!-- Sản phâm xu hướng -->
    <div class="row">
      <div id="section1" style=" padding: 5px; color: white; background-color: #E30019;">
        <h1 style="text-align: center;">Sản Phẩm Xu Hướng <i class="fa fa-fire"></i></i></h1>
      </div>
      <div class="col-sm-12" style="overflow-x: auto; white-space: nowrap;">
        <div  class="d-flex my-3">
          <?= $html_dssp_sale ?>

        </div>
      </div>
      <img src="images/banersale.jpg" alt="" class="ard-img-top img-fluid my-2">
    </div>
    <!-- End sản phâm xu hướng -->

    <!-- Sản phẩm nổi bật -->
    <div class="row">
      <div class="col my-3 shadow">
        <div id="section2" style="color: white; background-color: #E30019;">
          <h1 style="text-align: center;">SẢN PHẨM NỔI BẬT <i class="fa fa-hand-holding-heart"></i></h1>
        </div>
            <div class="col-sm-12" style="overflow-x: auto; white-space: nowrap;">
              <div id ="dssp" class="my-3">
              <?= $html_dssp_nb ?>

              </div>
            </div>
      </div>
    </div>
    <!-- End Sản phẩm nổi bật -->

    <div class="row">
      <div class="col-md-12 my-3">
        <div id="section5" style="padding: 5px; color: white; background-color: #E30019;">
          <h1 style="text-align: center;">Hàng Mục</h1>
        </div>
        <div class="row">
        <?php 
              foreach ($html_hm as $item) {
                extract($item);
                echo '<div class="col-md-2 py-3">
                        <div class="row">
                            <div class="col-3">
                              <img src="images/'.$img.'" alt="" width="50px">             
                            </div>
                            <div class="col-9 p-2 fw-bold" >
                              <span>'.$name.'</span>
                            </div>
                        </div>
                      </div>';
                      }
          ?>
          
        </div>
      </div>