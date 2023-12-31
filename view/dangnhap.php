<?php
    include_once('dao/pdo.php');
    $login_button = '<a style="text-decoration:none" href="'.$google_client->createAuthUrl().'"> <span class="text-col-gg">Google</span> </a>';
?>
<style>
    .baobu {
        min-height: auto;
        padding: 20px 0 20px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #tieude {
        max-width: 400px;
        background: gainsboro;
        flex-grow: 1;
        padding: 30px 30px 40px;
        box-shadow: 0px 0px 17px 1px rgba(89, 239, 253, 0.8);
        border-radius: 10px;
    }

    .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .nhaplieu {
        border-bottom: 1px solid #fff;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .nhaplieu i {
        color: black;
        font-size: 20px;
        padding-right: 10px;
    }

    .hienthi {
        background: none;
        border: 0;
        outline: 0;
        color: black;
        flex-grow: 1;
        font-weight: bold;
    }

    .hienthi::placeholder {
        color: rgba(88, 87, 87, 0.822);
    }

    .add {
        background: #E30019;
        border: 1px solid #f5f5f5;
        color: white;
        font-weight: bold;
        width: 100%;
        text-transform: uppercase;
        padding: 10px 15px;
        transition: 0.25s ease-in-out;
        border-radius: 5px;
    }

    .add:hover {
        background-color: rgb(254, 254, 254);
        color: black;
        font-size: 15px;
    }

    .signin {
        margin: 10px;
        text-align: center;
    }

    .signin a {
        color: royalblue;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }
    .text-col-gg
    {
        background-color: #DF4A32;
        padding: 5px 15px;
        color: white;
        cursor: pointer;
    }
    .text-col-fb
    {
        background-color: #3B5998;
        padding: 5px 15px;
        color: white;
        cursor: pointer;
    }

</style>

<html>
    <head>
        <!-- thư viện hiển thị thông báo đẹp sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css" rel="stylesheet">
        <!-- end thư viện hiển thị thông báo đẹp sweetalert2 -->
    </head>
</html>
<body>
    <div class="baobu">
        <form method="post" action="index.php?page=login" id="tieude" name="">
            <div id="error-message"></div>
            <h2>
                <?php
                if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) {
                    echo $_SESSION['tb_dangnhap'];
                    unset($_SESSION['tb_dangnhap']);
                }
                ?>
            </h2>
            <h1 class="title"> ĐĂNG NHẬP </h1>
            <p class="message">Vui lòng đăng nhập để sử dụng .</p>

            <div class="nhaplieu">
                <i class="fa fa-user" style="color: gray; font-size: small;"></i>
                <input style="font-size: small;" type="text" class="hienthi" name="username" placeholder="Nhập tên *">
            </div>
            <div class="nhaplieu">
                <i class="fa fa-key" style="color: gray; font-size: small;"></i>
                <input style="font-size: small;" type="password" class="hienthi" name="password" placeholder="Nhập mật khẩu *">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color: black;">Ghi nhớ tài khoản</label>
            </div>
            <input type="submit" name="dangnhap" value="ĐĂNG NHẬP" class="add" onclick="thongbaodangnhap(event)">
            <p class="signin">Bạn chưa có tài khoản ? <a href="index.php?page=dangky"> Đăng Kí</a>
            <div class="gg-fb">
                <div class="row justify-content-center align-content-center">

                    <!-- xử lí sau khi đăng nhập bằng google  -->
                    <div class="col-3" align="center"><?=$login_button?></div>
                    <div class="col-3"><span class="text-col-fb">Facebook</span></div>

                    <!-- end xử lí sau khi đăng nhập bằng google  -->              
                </div>
            </div>
        </form>

    </div>