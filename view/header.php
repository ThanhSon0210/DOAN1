<?php
    // kết nối đến cơ sở dữ liệu trên database 
    use Google\Service\ServiceControl\Auth;

    include('dao/connect-gg.php');

    // kết nối mysql , kiểm tra xem kết nối được không để báo lỗi 
    $conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD,DATABASE);
    if (!$conn) {
        echo "Lỗi : không thể kết nối đến database." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    // nếu người dùng đăng nhập bằng google hiện ra code thì thực thi lệnh dưới 
    if(isset($_GET["code"]))
    {
        // Nó sẽ cố gắng trao đổi mã lấy mã thông báo xác thực hợp lệ.
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        // Điều kiện này sẽ kiểm tra xem có lỗi nào xảy ra trong quá trình nhận mã thông báo xác thực hay không. Nếu không có lỗi nào xảy ra thì nó sẽ thực thi nếu khối mã/    if(!isset($token['error']))
        {
        // Đặt mã thông báo truy cập user được sử dụng cho các yêu cầu
        $google_client->setAccessToken($token['access_token']);

        
        // Lưu trữ giá trị "access_token" trong biến $_SESSION để sử dụng trong tương lai.
        $_SESSION['access_token'] = $token['access_token'];

        //Tạo đối tượng của lớp Google Service OAuth 2
        $google_service = new Google_Service_Oauth2($google_client);

        // Lấy thông tin user từ google
        $data = $google_service->userinfo->get();
        
        // lấy ra từng loại thông tin user thay thế biến userinfo
        $userinfo = [
            'email' => $data['email'], 
            'first_name' => $data['given_name'], 
            'last_name' => $data['family_name'], 
            'token' => $data['id'], 
            'name' => $data['name'], 
            'picture' => $data['picture'], 
            'gender' => $data['gender'], 
            'verifiedEmail' => $data['verifiedEmail'], 
        ];

        // check user
    //    var_dump($userinfo);
        
        // check user đưa vào database
        $sql = "SELECT * FROM user WHERE email = '{$userinfo['email']}'";
        $result = mysqli_query($conn , $sql);
        if(mysqli_num_rows($result)>0){
            $userdata = mysqli_fetch_assoc($result);
            $token = $userdata['token'];
            $name = $userinfo['name'];
        }else{
            $sql = "INSERT INTO user(email, last_name, first_name, gender, name, picture, verifiedEmail, token)
            VALUES ('{$userinfo['email']}', '{$userinfo['last_name']}', '{$userinfo['first_name']}', '{$userinfo['gender']}', '{$userinfo['name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')
            ";
            $result = mysqli_query($conn,$sql);
            if($result){
            echo "user tạo thành công";
            $token = $userinfo['token'];
            }else{
            echo "Ko thể tạo user";
            die();
            }
        }
        $_SESSION['user_token'] =  $token;   
        $_SESSION['s_users'] = $name;
        // setcookie('user_name', $name, time() + (86400 * 30), '/'); // Lưu cookie trong 30 ngày
        // var_dump($_COOKIE['user_name']);
        header('location: index.php');
        exit();    
        }

    // đăng nhập bằng tài khoản google
      
    // if(isset( $_SESSION['user_name'])){
       
    //     $name = $_SESSION['user_name'];
    //     $html_account ='<div class="col-2 py-1" style="margin-left:25px;">
    //                         <div class="dropdown">
    //                             <button class="btn btn-danger danhmuc" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 5px;">
    //                                 <div class="row text-light">
    //                                     <div class="col-3 fs-3"><i class="fa-solid fa-user"></i></div>
    //                                     <div class="col-9 fw-bold py-2">
    //                                         <a style="text-decoration: none; color: white;" href="index.php?page=myaccount">'.$name.'</a>
    //                                     </div>
    //                                 </div>
    //                             </button>
    //                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    //                                 <li> <a class="dropdown-item" href="index.php?page=myaccount">Cập nhật tài khoản</a></li>
    //                                 <li> <a class="dropdown-item" href="index.php?page=lsdh">Lịch sử đơn hàng</a></li>
    //                                 <li><a class="dropdown-item" href="index.php?page=logout">Thoát</a></li>
    //                             </ul>
    //                         </div>
    //                       </div>';
    //     }
       }
       if(isset( $_SESSION['s_users'])){
       
        $name = $_SESSION['s_users'];
        $html_account ='<div class="col-2 py-1" style="margin-left:25px;">
                            <div class="dropdown">
                                <button class="btn btn-danger danhmuc" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 5px;">
                                    <div class="row text-light">
                                        <div class="col-3 fs-3"><i class="fa-solid fa-user"></i></div>
                                        <div class="col-9 fw-bold py-2">
                                            <a style="text-decoration: none; color: white;" href="index.php?page=myaccount">'.$name.'</a>
                                        </div>
                                    </div>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li> <a class="dropdown-item" href="index.php?page=myaccount">Cập nhật tài khoản</a></li>
                                    <li> <a class="dropdown-item" href="index.php?page=lsdh">Lịch sử đơn hàng</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=logoutgg">Thoát</a></li>
                                </ul>
                            </div>
                          </div>';
        }
        // đăng nhập bằng tài khoản thông thường
       elseif(isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
         extract($_SESSION['s_user']);
         $html_account ='<div class="col-2 py-1" style="margin-left:25px;">
                           <div class="dropdown">
                             <button class="btn btn-danger danhmuc" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 5px;">
                               <div class="row text-light">
                                 <div class="col-3 fs-3"><i class="fa-solid fa-user"></i></div>
                                 <div class="col-9 fw-bold py-2">
                                   <a style="text-decoration: none; color: white;" href="index.php?page=myaccount">'.$username.'</a>
                                 </div>
                               </div>
                             </button>
                             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <li> <a class="dropdown-item" href="index.php?page=myaccount">Cập nhật tài khoản</a></li>
                                 <li> <a class="dropdown-item" href="index.php?page=lsdh">Lịch sử đơn hàng</a></li>
                                 <li><a class="dropdown-item" href="index.php?page=logout">Thoát</a></li>
                             </ul>
                           </div>
                         </div>';
        }
        else{
         $html_account ='   
         <li class="nav-item py-2">
            <a class="nav-link py-2" style="white-space:nowrap;background-color: #BE1529;border-radius: 5px;color: white;font-weight: bold;margin-top:3px;margin-right:15px;" href="index.php?page=dangky" style="margin-left:10px;margin-right:10px;"><i class="fa-solid fa-user"></i> Đăng Kí</a>
         </li>
   
        <li class="nav-item py-2">
            <a class="nav-link py-2" style="white-space:nowrap;background-color: #BE1529;border-radius: 5px;color: white;font-weight: bold;margin-top:3px;" href="index.php?page=dangnhap"><i class="fa-regular fa-user"></i> Đăng Nhập</a>
        </li>';
        }
    
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lập Trình Cùng HTPS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Thư viện font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--  End Thư viện font awesome -->

    <!-- thư viện bootstraps -->
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- end thư viện bootstraps -->

    <!-- tích hợp chat bot vào website -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="HTPS" agent-id="1dafc989-ea18-4002-84af-d09a81e72a00" language-code="vi"></df-messenger>
    <!-- end tích hợp chat bot vào website -->

    <link rel="icon" href="logo-shortcut.png" type="image/x-icon">
<style>
    .top-header {
        background-color: #ECE2E1;
    }

    @media (max-width: 995px) {
        .input-group .form-control , .search {
          display: none;
        }
    }
    @media (max-width: 570px) {
        .input-group .form-control , .search {
          display: block;
        }
    }
    @media (max-width:1200px) {
        .text-light{
            display: none;
        }
    }
    @media (max-width:570px) {
    .text-light{
        display: block;
    }
}
    @media (max-width:995px) {
    .icon{
        display: none;
    }
}

</style>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" >
    <!-- top1 baner header -->
    <nav class="top-header">
        <div class="container mx-auto" id="sectionheader">
            <a href="#"> <img src="images/banner_header.webp" alt="hình ảnh top 1 banner"></a>
        </div>
    </nav>
    <!-- end top1 baner header -->

    <!-- top2 baner header -->
    <nav class="navbar navbar-expand-sm navbar-dark justify-content-between" style="background-color: #E30019;">
        <div class="container">

             <!-- logo -->
            <a class="navbar-brand" href="index.php"><img src="images/logo-htps-komau.png" class="img" width="150px" alt=""></a>
             <!--end logo -->

             <!-- resposive nhỏ thu về  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end responsive nhỏ thu về  -->

            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">

                 <!-- header danh muc -->
                    <li class="nav-item py-2" style="margin-right:20px">
                        <a href="index.php?page=sanpham" class="nav-link py-2" style="white-space:nowrap;background-color: #BE1529;border-radius: 5px;color: white;font-weight: bold;margin-top:3px;" href="javascript:void(0)"> <i class="fa-solid fa-bars"></i> Danh Mục</a>
                    </li>
                <!-- end header danh muc -->


                 <!-- Header search  -->
                    <li class="nav-item py-2" style="margin-left:10px;margin-top:2px;">
                        <form action="index.php?page=sanpham" method="post" class="d-flex" >
                        <div class="input-group">
                                <input size="max" type="text" name="key" placeholder="Tìm sản phẩm yêu thích ?" class="form-control p-2" aria-label="Recipient's username" aria-describedby="basic-addon2">           
                                <input type="submit" name="timkiem" class="search input-group-text bg-white border-0 " id="basic-addon2" value="Search"> 
                        </form>
                    </li>
                <!-- end Header search  -->

                <!-- nav header text -->
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <li class="icon"><i class="fa-solid fa-phone fa-shake fs-3 p-1"></i></li>
                            <li>
                                <div class="text-light fw-bold" style="white-space: nowrap;">Hot Line <br><span style="color: white;">1900 9999</span></div>
                            </li>
                         </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">
                            <li class="icon"><i class="fa-solid fa-bell fs-3 p-1"></i></li>
                            <li>
                                <div class="text-light fw-bold" style="white-space: nowrap;">Hệ Thống <br>Thông Báo</div>
                            </li>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="index.php?page=viewcart" class="nav-link">
                            <li class="icon"><i class="fa fa-shopping-cart fs-3 p-1"></i></li>
                            <li>
                                <div class="text-light fw-bold" style="white-space: nowrap;">Giỏ Hàng <br> Của Bạn</div>
                            </li>
                        </a>
                    </li>
                <!-- end nav header text -->

                <?=$html_account?>
                <!-- đăng kí và đăng nhập  -->
                    <!-- <li class="nav-item py-2">
                        <a class="nav-link py-2" style="white-space:nowrap;background-color: #BE1529;border-radius: 5px;color: white;font-weight: bold;margin-top:3px;margin-right:15px;" href="index.php?page=dangky" style="margin-left:10px;margin-right:10px;"><i class="fa-solid fa-user"></i> Đăng Kí</a>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link py-2" style="white-space:nowrap;background-color: #BE1529;border-radius: 5px;color: white;font-weight: bold;margin-top:3px;" href="index.php?page=dangnhap"><i class="fa-regular fa-user"></i> Đăng Nhập</a>
                    </li> -->
                <!-- end đăng kí và đăng nhập  -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- end top 2 banner  -->

    <!-- top 3 banner -->
    <div class="navbar-expand-sm" style="background-color: #ECECEC; width: 100%;">
        <div class="container">
                <ul class="nav justify-content-between text-dark">
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#section1">
                            <i class="fa-solid fa-fire"></i> Xu Hướng
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fw-bold" href="#section2">
                            <i class="fa-solid fa-tag"></i> Nổi Bật
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fw-bold" href="#section3">
                            <i class="fa-solid fa-book"></i> Tin Tức
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fw-bold" href="#section4">
                            <i class="fa-solid fa-users"></i> Thành Viên
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-bold" href="#section5">
                             <i class="fa-solid fa-list "></i> Hàng Mục
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-dark fw-bold" href="#section6">
                            <i class="fa-solid fa-handshake"></i> Cộng Tác
                        </a>
                    </li>
                </ul>
        </div>
   </div>
    <!-- end top 3 banner  -->

</body>

</html>