<?php
    session_start();
    ob_start();
    include_once "model/connect.php";
    include_once "model/user.php";
    $thongbao="";
    if(isset($_POST['btnlogin'])){
        $user=$_POST['username'];
        $pass=$_POST['pass'];
        $useradmin=check_user($user,$pass);
        //echo var_dump($useradmin);
        
        //if(is_array($userone)){
            extract($useradmin);
            if($role==1){   
                $_SESSION['sonnu']=1;
                $_SESSION['username']=$user;
                $_SESSION['email']=$email;
                header('location: index.php');
            }else{
                $thongbao="Tài Khoản Không tồn tại";
            }
        //}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - ADMIN</title>
    <link rel="stylesheet" href="login/main.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <div class="container">
        <div class="respon-nav">
            <div class="respon-nav__icons">
                <ul class="respon-left-nav flex">
                    <li class="nav__item">
                        <a href="/index.html" class="nav__link"><i class="fa-solid fa-home"></i></a>
                    </li>
                    <li class="nav__item">
                        <a href="/html/log-in.html" class="nav__link"><i class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="nav__item">
                        <a href="/html/cart.html" class="nav__link"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                </ul>
                <i class="fa-solid fa-bars respon-bar-icon close-btn"></i>
            </div>
            <ul class="respon-nav__content">
                <li class="nav__item">
                    <a href="/html/pre-built.html" class="nav__link">Keyboards</a>
                </li>
                <li class="nav__item">
                    <a href="/html/switches.html" class="nav__link">Switches</a>
                </li>
                <li class="nav__item">
                    <a href="/html/keycaps.html" class="nav__link">Keycaps</a>
                </li>
                <li class="nav__item">
                    <a href="/html/kits.html" class="nav__link">Kits</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Deskpads</a>
                </li>
            </ul>
        </div>
        <div class="respon-overlay"></div>
        <div class="section log-in__body" style="margin-top: 80px;">
            <div class="form__container">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="log-in-form">
                    <h1 class="form__title">ĐĂNG NHẬP</h1>
                    <div class="form__group">
                        <input type="text" name="username" class="form__input fullname" placeholder=" ">
                        <label for="">Tên đăng nhâp</label>
                        <span class="form__message"></span>
                    </div>
                    <div class="form__group">
                        <input type="password" name="pass" class="form__input password" placeholder=" ">
                        <label for="">Mật khẩu</label>
                        <span class="form__message"></span>
                    </div>
                    <button type="submit" name="btnlogin" class="form__btn">Đăng nhập</button>
                </form>
                <h2 color="color:red"><?=$thongbao?></h2>
                <a href="" class="forgot">Quên mật khẩu?</a>
                <h5>Bạn cũng có thể đăng nhập bằng các cách sau</h5>
                <ul class="social__icon__list flex">
                    <li class="nav__item"><i class="fa-brands fa-google"></i></li>
                    <li class="nav__item"><i class="fa-brands fa-facebook"></i></li>
                    <li class="nav__item"><i class="fa-brands fa-github"></i></li>
                    <li class="nav__item"><i class="fa-brands fa-instagram"></i></li>
                    <li class="nav__item"><i class="fa-brands fa-twitter"></i></li>
                </ul>
                <h5>Không có tài khoản ? <a href="/html/create-account.html">Tạo ngay</a></h5>
            </div>
        </div>
        <!-- footer -->
        <footer class="footer flex">
        </footer>
        <hr style="margin: 0">
        <footer class="right-reserved">
            <h4>© 2023 TYPISTIAL ™</h4>
            <h4>ALL RIGHT RESERVED</h4>
        </footer>
    </div>
</body>
<script src="/js/main.js"></script>
<script src="/js/validator.js"></script>
<script>
    Validator({
        formSelector: '.log-in-form',
        formMessage: '.form__message',
        rules: [
            Validator.isRequired('.fullname'),
            Validator.isPassword('.password')
        ]
    })
</script>

</html>