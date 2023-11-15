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
        box-shadow: 0px 0px 17px 2px rgba(89, 239, 253, 0.8);
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
    }
    .text-col-fb
    {
        background-color: #3B5998;
        padding: 5px 15px;
        color: white;
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
        <form method="post" action="index.php?page=adduser" id="tieude" name="">
            <h1 class="title"> ĐĂNG KÍ </h1>
            <p class="message">Đăng kí tài khoản ngay để nhận nhiều ưu đãi .</p>

            <div class="nhaplieu">
                    <i class="fa fa-user"></i>
                    <input type="text" class="hienthi" name="username" placeholder="Nhập tên">
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="hienthi" name="email" placeholder="Nhập email">
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-key"></i>
                    <input type="password" class="hienthi" name="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-key"></i>
                    <input type="password" class="hienthi" name="password" placeholder="Nhập lại mật khẩu">
                </div>  

            <input type="submit" name="dangky" value="ĐĂNG KÍ" class="add" onclick="thongbaodangki()">
            <p class="signin">Bạn đã có tài khoản ? <a href="index.php?page=dangnhap"> Đăng Nhập </a>
            <div class="gg-fb">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-3">
                          <span class="text-col-gg">Google</span>  
                    </div>
                    <div class="col-3">
                            <span class="text-col-fb">Facebook</span>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </form>

    </div>
    <!-- <script>
        function thongbaodangki(){
            Swal.fire({
                    title: "Đăng Kí Thành Công!",
                    text: "Vui lòng đăng nhập để sử dụng dịch vụ!",
                    icon: "success",
                    timer: 4000,  
                    showConfirmButton: false 
                 });
        }
    </script> -->
</body>