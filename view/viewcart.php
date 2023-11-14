<style>
    .text-my-cart {
        text-align: center;
    }

    #my-cart {
        border-collapse: collapse;
        width: 100%;
    }

    #my-cart th,
    #my-cart td {
        padding: 8px;
        text-align: center;
    }

    #my-cart th {
        background-color: #f2f2f2;
    }

    #my-cart tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    #my-cart img {
        max-width: 150px;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    #my-cart a {
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        border: 1px solid black;
        padding: 4px;
        border-radius: 5px;
    }

    #my-cart a:hover {
        background-color: rgb(254, 2, 2);
    }

    #my-cart a:hover {
        background-color: rgb(254, 2, 2);
    }



    .my-cart {
        margin-top: 50px;
    }


    .chuy {
        display: grid;
        grid-template-columns: auto auto;
        height: 250px;
        gap: 20px;
    }

    #note-left {
        margin-left: 30%;
    }

    .chuy1 {
        width: 100%;
    }

    .chuy1 h2 {
        margin-left: 20px;
    }

    .chuy1 textarea {
        padding: 5px;
        width: 400px;
        height: 100px;
    }

    .chuy1 strong {
        color: red;
    }

    .chuy1 p {
        width: 300px;
        display: flex;
        justify-content: end;
        align-items: end;
    }

    .chuy1 button {
        padding: 10px;
        width: 300px;
        font-size: large;
        border: 1px solid black;
        background-color: rgb(255, 255, 255);
    }

    .chuy1 button:hover {
        background-color: black;
        color: white;
        border: 1px solid white;
        cursor: pointer;

    }
    .text-header
    {
        color: blue;
        text-decoration: none;
    }
    /* tiếp tục mua css ở đây */
    .btn-12,
.btn-12 *,
.btn-12 :after,
.btn-12 :before,
.btn-12:after,
.btn-12:before {
  border: 0 solid;
  box-sizing: border-box;
}

.btn-12 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  font-weight: 900;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
  text-transform: uppercase;
}

.btn-12:disabled {
  cursor: default;
}

.btn-12:-moz-focusring {
  outline: auto;
}

.btn-12 svg {
  display: block;
  vertical-align: middle;
}

.btn-12 [hidden] {
  display: none;
}

.btn-12 {
  border-radius: 99rem;
  border-width: 2px;
  overflow: hidden;
  padding: 0.8rem 3rem;
  position: relative;
}

.btn-12 span {
  mix-blend-mode: difference;
}

.btn-12:after,
.btn-12:before {
  background: linear-gradient(
    90deg,
    #fff 25%,
    transparent 0,
    transparent 50%,
    #fff 0,
    #fff 75%,
    transparent 0
  );
  content: "";
  inset: 0;
  position: absolute;
  transform: translateY(var(--progress, 100%));
  transition: transform 0.2s ease;
}

.btn-12:after {
  --progress: -100%;
  background: linear-gradient(
    90deg,
    transparent 0,
    transparent 25%,
    #fff 0,
    #fff 50%,
    transparent 0,
    transparent 75%,
    #fff 0
  );
  z-index: -1;
}

.btn-12:hover:after,
.btn-12:hover:before {
  --progress: 0;
}
 /* end tiếp tục mua css ở đây */

/* thanh toán css ở đây  */
.button {
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  border: none;
  background: none;
  color: #0f1923;
  cursor: pointer;
  position: relative;
  padding: 8px;
  margin-bottom: 20px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 14px;
  transition: all .15s ease;
}

.button::before,
.button::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  left: 0;
  height: calc(50% - 5px);
  border: 1px solid #7D8082;
  transition: all .15s ease;
}

.button::before {
  top: 0;
  border-bottom-width: 0;
}

.button::after {
  bottom: 0;
  border-top-width: 0;
}

.button:active,
.button:focus {
  outline: none;
}

.button:active::before,
.button:active::after {
  right: 3px;
  left: 3px;
}

.button:active::before {
  top: 3px;
}

.button:active::after {
  bottom: 3px;
}

.button_lg {
  position: relative;
  display: block;
  padding: 10px 20px;
  color: #fff;
  background-color: #0f1923;
  overflow: hidden;
  box-shadow: inset 0px 0px 0px 1px transparent;
}

.button_lg::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 2px;
  height: 2px;
  background-color: #0f1923;
}

.button_lg::after {
  content: '';
  display: block;
  position: absolute;
  right: 0;
  bottom: 0;
  width: 4px;
  height: 4px;
  background-color: #0f1923;
  transition: all .2s ease;
}

.button_sl {
  display: block;
  position: absolute;
  top: 0;
  bottom: -1px;
  left: -8px;
  width: 0;
  background-color: #ff4655;
  transform: skew(-15deg);
  transition: all .2s ease;
}

.button_text {
  position: relative;
}

.button:hover {
  color: #0f1923;
}

.button:hover .button_sl {
  width: calc(100% + 15px);
}

.button:hover .button_lg::after {
  background-color: #fff;
}
/* end thanh toán css ở đây  */

/* css muc giua thanh toan va tiep tuc */
.loader {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
}

.slider {
  overflow: hidden;
  background-color: white;
  margin: 0 15px;
  height: 80px;
  width: 20px;
  border-radius: 30px;
  box-shadow: 15px 15px 20px rgba(0, 0, 0, 0.1), -15px -15px 30px #fff,
    inset -5px -5px 10px rgba(0, 0, 255, 0.1),
    inset 5px 5px 10px rgba(0, 0, 0, 0.1);
  position: relative;
}

.slider::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  border-radius: 100%;
  box-shadow: inset 0px 0px 0px rgba(0, 0, 0, 0.3), 0px 420px 0 400px #2697f3,
    inset 0px 0px 0px rgba(0, 0, 0, 0.1);
  animation: animate_2 2.5s ease-in-out infinite;
  animation-delay: calc(-0.5s * var(--i));
}

@keyframes animate_2 {
  0% {
    transform: translateY(250px);
    filter: hue-rotate(0deg);
  }

  50% {
    transform: translateY(0);
  }

  100% {
    transform: translateY(250px);
    filter: hue-rotate(180deg);
  }
}

/* END css muc giua thanh toan va tiep tuc */

</style>
<div class="container">
    <div class="d-flex p-2 text-white">
        <div class="p-2 ">
            <i class="fa-solid fa-house" style="color: blue;"></i>
            <a class="text-header" href="index.php?page=index">Trang Chủ ></a>
        </div>
        <div class="p-2 "> <a class="text-header" href="">Sản Phẩm ></a></div>
        <div class="p-2 "> <a class="text-header" href="index.php?page=viewcart">Giỏ Hàng</a></div>
    </div>

</div>
<h1 class="text-my-cart py-3" style="background-color: #ECECEC;" >Giỏ Hàng Của Tôi</h1>
<hr><br><br>
<table id="my-cart">
    <thead>
        <tr>
            <th>Ảnh Sản Phẩm</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        <!-- chổ này show danh sách sản phẩm -->
        <?php
        if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
            $i = 0;
            $tong = 0;
            $tt = 0;
            foreach ($_SESSION['giohang'] as $item) {
                extract($item);
                $tt = (int)$price * (int)$soluong;
                $tong += $tt;
                $link = "index.php?page=delsp&ind=" . $i;
                echo  '<tr>
                                    <td><img src="images/' . $img . '" alt="" width="100px";></td>
                                    <td>' . $name . '</td>
                                    <td>' . $price . '</td>
                                    <td>' . $soluong . '</td>
                                    <td>' . $tt . '</td>
                                    <td>
                                        <a href="' . $link . '">
                                            <i class="fa fa-trash custom-cursor-on-hover"></i>
                                        </a>
                                    </td>
                                </tr>';
                $i++;
            }
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="4" style="text-align: right">
                Tổng Tiền :
            </th>
            <!-- <th id="tt" style="text-align: left">
                   
                </th> -->
            <th style="text-align: center">
                <!-- Show tổng tiền -->
                <?= $tong ?>
            </th>
            <th>
                <button onclick="xoaAll()" style="text-align: left">Xóa Hết</button>
            </th>
        </tr>
    </tfoot>
</table>
<br>

<div class="d-sm-flex flex-sm justify-content-around mb-3">
    <div class="p-3 justify-content-center ">
    <button class="btn-12"><span><a href="index.php" style="color:white;text-decoration: none;">Tiếp Tục Mua</a></span></button>
    </div>
    <div class="p-3 ">
        
  <section class="loader">

<div class="slider" style="--i:0">
</div>
<div class="slider" style="--i:1">
</div>
<div class="slider" style="--i:2">
</div>
<div class="slider" style="--i:3">
</div>
<div class="slider" style="--i:4">
</div>
</section>



    </div>
    <div class="p-2">
    <button class="button">
    <span class="button_lg">
        <span class="button_sl"></span>
        <span class="button_text"><a href="index.php?page=donhang" onclick="dh()" style="color:#ECECEC;text-decoration: none;">Thanh Toán</a></span>
    </span>
</button>
    </div>
  </div>
</div><br>