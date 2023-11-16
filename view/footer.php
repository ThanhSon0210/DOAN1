<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Học làm footer</title>
</head>
<style>
    .foter {
    display: grid;
    grid-template-columns: auto auto auto auto auto;
    gap: 20px;
    height: auto;

    }

    .foter1 {

    }

    .foter2 a {
        color: black;
        text-decoration: none;
    }

    .foter2 a:hover {
        color: red;
    }

    .foter2 li {
        list-style: none;
    }

    .foter2 li {
        padding: 10px;
    }

    .foter3 a {
        color: black;
        text-decoration: none;
    }

    .foter3 a:hover {
        color: red;
    }

    .foter3 li {
        list-style: none;
    }

    .foter3 li {
        padding: 10px;
    }

    .foter4 p {
        width: 220px;
    }

    .foter4 input {
        padding: 10px;
    }

    .cart {
        width: fit-content;
        height: auto;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 25px 25px;
        gap: 20px;
        float: right;
      }
      
      /* for all social containers*/
      .socialContainer {
        width: 52px;
        height: 52px;
        background-color: rgb(44, 44, 44);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        transition-duration: .3s;
      }
      /* instagram*/
      .containerOne:hover {
        background-color: #d62976;
        transition-duration: .3s;
      }
      /* twitter*/
      .containerTwo:hover {
        background-color: #00acee;
        transition-duration: .3s;
      }
      /* linkdin*/
      .containerThree:hover {
        background-color: #0072b1;
        transition-duration: .3s;
      }
      /* Whatsapp*/
      .containerFour:hover {
        background-color: #128C7E;
        transition-duration: .3s;
      }
      
      .socialContainer:active {
        transform: scale(0.9);
        transition-duration: .3s;
      }
      
      .socialSvg {
        width: 17px;
      }
      
      .socialSvg path {
        fill: rgb(255, 255, 255);
      }
      
      .socialContainer:hover .socialSvg {
        animation: slide-in-top 0.3s both;
      }
      
      @keyframes slide-in-top {
        0% {
          transform: translateY(-50px);
          opacity: 0;
        }
      
        100% {
          transform: translateY(0);
          opacity: 1;
        }
      }
      .🤚 {
      --skin-color: #E4C560;
      --tap-speed: 0.6s;
      --tap-stagger: 0.1s;
      position: relative;
      width: 80px;
      height: 60px;
      margin-left: 410px;
    }

    .🤚:before {
      content: '';
      display: block;
      width: 180%;
      height: 75%;
      position: absolute;
      top: 70%;
      right: 20%;
      background-color: black;
      border-radius: 40px 10px;
      filter: blur(10px);
      opacity: 0.3;
    }

    .🌴 {
      display: block;
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      background-color: var(--skin-color);
      border-radius: 10px 40px;
    }

    .👍 {
      position: absolute;
      width: 120%;
      height: 38px;
      background-color: var(--skin-color);
      bottom: -18%;
      right: 1%;
      transform-origin: calc(100% - 20px) 20px;
      transform: rotate(-20deg);
      border-radius: 30px 20px 20px 10px;
      border-bottom: 2px solid rgba(0, 0, 0, 0.1);
      border-left: 2px solid rgba(0, 0, 0, 0.1);
    }

    .👍:after {
      width: 20%;
      height: 60%;
      content: '';
      background-color: rgba(255, 255, 255, 0.3);
      position: absolute;
      bottom: -8%;
      left: 5px;
      border-radius: 60% 10% 10% 30%;
      border-right: 2px solid rgba(0, 0, 0, 0.05);
    }

    .👉 {
      position: absolute;
      width: 80%;
      height: 35px;
      background-color: var(--skin-color);
      bottom: 32%;
      right: 64%;
      transform-origin: 100% 20px;
      animation-duration: calc(var(--tap-speed) * 2);
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
      transform: rotate(10deg);
    }

    .👉:before {
      content: '';
      position: absolute;
      width: 140%;
      height: 30px;
      background-color: var(--skin-color);
      bottom: 8%;
      right: 65%;
      transform-origin: calc(100% - 20px) 20px;
      transform: rotate(-60deg);
      border-radius: 20px;
    }

    .👉:nth-child(1) {
      animation-delay: 0;
      filter: brightness(70%);
      animation-name: tap-upper-1;
    }

    .👉:nth-child(2) {
      animation-delay: var(--tap-stagger);
      filter: brightness(80%);
      animation-name: tap-upper-2;
    }

    .👉:nth-child(3) {
      animation-delay: calc(var(--tap-stagger) * 2);
      filter: brightness(90%);
      animation-name: tap-upper-3;
    }

    .👉:nth-child(4) {
      animation-delay: calc(var(--tap-stagger) * 3);
      filter: brightness(100%);
      animation-name: tap-upper-4;
    }

    @keyframes tap-upper-1 {
      0%, 50%, 100% {
        transform: rotate(10deg) scale(0.4);
      }

      40% {
        transform: rotate(50deg) scale(0.4);
      }
    }

    @keyframes tap-upper-2 {
      0%, 50%, 100% {
        transform: rotate(10deg) scale(0.6);
      }

      40% {
        transform: rotate(50deg) scale(0.6);
      }
    }

    @keyframes tap-upper-3 {
      0%, 50%, 100% {
        transform: rotate(10deg) scale(0.8);
      }

      40% {
        transform: rotate(50deg) scale(0.8);
      }
    }

    @keyframes tap-upper-4 {
      0%, 50%, 100% {
        transform: rotate(10deg) scale(1);
      }

      40% {
        transform: rotate(50deg) scale(1);
      }
    }
</style>
<div class="container">
  <footer class="mb-9 my-3 shadow">
      <div class="gach-hr"></div>
      <div class="foter">
          <div class="foter1">
              <h6>Về HTPS</h6>
              <i class="fab fa-facebook-square"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-instagram"></i>
              <i class="fab fa-youtube"></i>
              <i class="fab fa-discord"></i><br><br>
              <p>Giới thiệu</p>
              <p>Tuyển dụng</p>
          </div>
          <div class="foter2">
              <h6 style="text-align: center;">CHÍNH SÁCH</h6>
              <ul>
                  <li><a href="">Chính sách bảo hành</a></li>
                  <li><a href="">Chính sách thanh toán</a></li>
                  <li><a href="">Chính sách giao hàng</a></li>
                  <li><a href="">Chính sách bảo mật</a></li>
              </ul>
          </div>
          <div class="foter3">
              <h6 style="text-align: center;">THÔNG TIN</h6>
              <ul>
                  <li><a href="">Hệ thống cửa hàng</a></li>
                  <li><a href="">Trung tâm bảo hành</a></li>
              </ul>
          </div>
          <div class="foter3">
              <h6 style="text-align: center;">TỔNG ĐÀI HỔ TRỢ MIỄN PHÍ</h6>
              <ul>
                  <li>Gọi mua: <a style="color: blue;">1800.6975</a>(8:00 - 21:00)</li>
                  <li>CSKH: <a style="color: blue;"> 1800.6973</a>(8:00 - 21:00)</li>
                  <li>Email: <a style="color: blue;"> htps@gmail.com</a></li>
                  <li>Sale: Black Friday</a></li>
              </ul>
          </div>
          <div class="foter4">
              <h6>ĐƠN VỊ VẬN CHUYỂN</h6>
              <img src="images/ghn.png" style="width: 70px" alt="">
              <img src="images/ht.jpg" style="width: 50px" alt="">
              <img src="images/ems.png" style="width: 70px" alt="">
              <img src="images/ghtk.png" style="width: 50px" alt=""><br>
              <h6>CÁCH THỨC THANH TOÁN</h6>
              <img src="images/momo.png" style="width: 50px; box-shadow:currentColor" alt="">
              <img src="images/visa.jpg" style="width: 50px" alt="">
              <img src="images/zalopay.png" style="width: 50px" alt="">
              <img src="images/tienmat.jpg" style="width: 50px;" alt="">
              <img src="images/tragop.jpg" style="width: 50px" alt="">
          </div>
      </div>

      <hr>
      <!-- nhận khuyến mãi footer -->
      <div class="row">
                      <div class="col">
                      <div class="container mt-3">
              <h3> <i class="fa-solid fa-ticket"></i> Vouchez 2.000.000 Triệu Đồng </h3> 
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                  Nhận Ngay
              </button>
              </div>

              <!-- The Modal -->
              <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                  <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                      <h4 class="modal-title">Thông Báo</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                      Kính lỗi quý khách hàng của <strong> HTPS </strong> chúng tôi đã phân chia hơn 200 vouchez cho các khách hàng trong ngày rồi !!!
                      <div class="🤚">
                          <div class="👉"></div>
                          <div class="👉"></div>
                          <div class="👉"></div>
                          <div class="👉"></div>
                          <div class="🌴"></div>		
                          <div class="👍"></div>
                      </div>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                  </div>

                  </div>
              </div>
              </div>
          </div>


          <div class="col">
              <div class="cart">
                  <a href="#" class="socialContainer containerOne">
                      <svg class="socialSvg instagramSvg" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                      </svg>
                  </a>

                  <a href="#" class="socialContainer containerTwo">
                      <svg class="socialSvg twitterSvg" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                      </svg> </a>

                  <a href="#" class="socialContainer containerThree">
                      <svg class="socialSvg linkdinSvg" viewBox="0 0 448 512">
                          <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                      </svg>
                  </a>

                  <a href="#" class="socialContainer containerFour">
                      <svg class="socialSvg whatsappSvg" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                      </svg>
                  </a>
              </div>

          </div>
      </div>




      <!-- end nhận khuyến mãi footer -->
  </footer>
</div>
</body>
</html>