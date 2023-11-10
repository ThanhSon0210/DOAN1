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
</style>
<div class="container">
      <div class="row">
        <ul class="list-group col-md-2 my-2 ">
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
        <div id="carouselExampleCaptions" class="carousel slide col-md-8 my-2">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/b1.jpg" class="d-block w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <h2>sonnu keyboard</h2>
                <h4>Tất cả sản phẩm sẽ được làm mới trong ngày!</h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/b2.jpg" class="d-block w-100" alt="..." >
              <div class="carousel-caption d-none d-md-block">
                <h2>SALE 50%</h2>
                <h4>Nhiều chương trình khuyến mãi hấp dẫn </h4>
              </div>
            </div>
            <div class="carousel-item">
              <img src="images/banner4.webp" class="d-block w-100" alt="..." >
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
        
        <ul class="list-group  col-md-2 my-2 ">
          <img src="images/banner1.webp" class="list-group my-3"  alt="">
          <img src="images/banner3.webp" class="list-group my-3"  alt="">
          <img src="images/banner2.webp" class="list-group my-3"  alt="">
        </ul>
      </div>
<div class="row">
      <div style=" padding: 5px; color: white; background-color: rgba(253, 46, 0, 0.909);">
        <h1 style="text-align: center;">Flash Sale Eveyday <i class="fa fa-fire"></i></i></h1>
      </div>
      <div class="col-sm-12" style="overflow-x: auto; white-space: nowrap;">
          <div class="d-flex my-3">
        <?=$html_dssp_sale?>
              
          </div>
      </div>
      <img src="images/banersale.jpg" alt="" class="ard-img-top img-fluid my-2">
    </div>
    <div class="row">
      <div class="col-md-12 my-3 shadow">
        <div id="section3" style="padding: 5px; color: white; background-color: #E30019;">
          <h1 style="text-align: center;">Bài Viết Tin Tức <i class="fa-solid fa-book"></i></h1>
        </div>
        <div class="container mt-3">
          <div class="row my-3">
            <div class="col-sm-4">
              <div class="card1" style=" background-image: url('https://img.freepik.com/free-vector/blue-abstract-hi-speed-internet-technology-background-illustration-eye-scan-virus-computer-motion-move_115579-20.jpg?size=626&ext=jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Công Nghệ Thông Tin
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="card1" style=" background-image: url('https://thumbs.dreamstime.com/z/megaphone-drawing-conversation-bubble-showing-new-announcement-bullhorn-voice-device-speech-balloon-presenting-fresh-259158453.jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Làm Chủ Digital Maketing
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="card1" style=" background-image: url('https://image.slidesdocs.com/responsive-images/background/festive-wedding-stage-chinese-powerpoint-background_c0ab199531__655_368.jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Ứng Dụng Framer Vô Figma
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  <!-- End Row bài viết tin tức -->

