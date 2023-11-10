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
    width: 100%;

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
</div>
    <hr>
    <footer class="mb-9 my-3">
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
                    <li>Email: <a  style="color: blue;"> htps@gmail.com</a></li>
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
    </footer>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>