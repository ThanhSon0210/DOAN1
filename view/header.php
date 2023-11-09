<?php 
  if(isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
    $html_account ='<a href="index.php?page=myaccount" class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Xin Chào, '.$username.'
                    </a>
                      
                    <ul class="dropdown-menu end-0" style="left:auto">
                      <li><a class="dropdown-item" href="index.php?page=myaccount">CẬP NHẬT THÔNG TIN </a></li>
                      <li><a class="dropdown-item" href="index.php?page=logout">THOÁT</a></li>
                    </ul>';
  }else{
    $html_account ='<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Xin Chào, ?
                    </a>
                    <ul class="dropdown-menu end-0" style="left:auto">
                      <li><a class="dropdown-item" href="index.php?page=dangky">ĐĂNG KÝ </a></li>
                      <li><a class="dropdown-item" href="index.php?page=dangnhap">ĐĂNG NHẬP</a></li>
                    </ul>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa header</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<style>
  .top-header
  {
      width: 100%;
      height: 100%;
      background-color: #ECE2E1;
  }
  .form-control
  {
      height: 50px;
      font-family: Arial, Helvetica, sans-serif;
  }
  .col-8
  {
      font-size: 18.5px;
  }
</style>
<body>
    <!-- top1 baner header -->
    <nav class="top-header">
        <div class="container">
            <a href="#"> <img src="images/banner_header.webp" alt="hình ảnh top 1 banner"></a>
         </div>
    </nav>
    <!-- end top1 baner header -->

    <!-- top2 baner header -->
    <nav class="navbar-expand-sm" style="background-color: #E30019;">
        <div class="container-fluid">
            <div class="row py-3">
            <div class="col-1"></div>
                <!-- logo -->
                <div class="col-1">
                    <a class="logo" href="index.php?page=home"><img src="images/logo-htps-komau.png" class="img-fluid" width="250px" alt=""></a>

                </div>
                <!-- end logo -->

                <!-- header danh muc -->
                <div class="col-1 py-2">
                   <button class="danhmuc" style="background-color: #BE1529; border: none; border-radius: 5px;">
                    <div class="row text-light">
                        <div class="col-md-1 fs-3"><i class="fa-solid fa-bars"></i></div>
                        <div class="col-md-9 fw-bold">Danh mục</div>
                    </div>
                   </button>
                </div>
                 <!-- end haeder danh muc -->

                <!-- Header search  -->
                <div class="col-md-3 py-2">
                    <form class="d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm sản phẩm yêu thích ?" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><a href=""><i class="fa-solid fa-magnifying-glass text-dark fw-bold"></i></a></span>
                          </div>                      
                    </form>
                </div>
                <!-- End header search -->
                
                <!-- nav header text -->
                <div class="col-md-6 py-2">
                    <div class="row">
                        <div class="col-2">
                            <div class="row">
                                <div class="col-3 fs-2 text-light "><i class="fa-solid fa-phone"></i></i></div>
                                <div class="col-9 text-light fw-bold"><a class="nav-link" href="#">Hot Line
                                    <br><span style="color: blue;">1900 9999</span>
                                </a></div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-3 fs-2 text-light"><i class="fa-solid fa-bell"></i></div>
                                <div class="col-9 text-light fw-bold"><a class="nav-link" href="#">Hệ thống <br> thông báo</a></div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <div class="col-3 fs-2 text-light"><i class="fa fa-shopping-cart"></i></div>
                                <div class="col-9 text-light fw-bold"><a class="nav-link" href="index.php?page=viewcart">Giỏ hàng </a></div>
                            </div>
                        </div>
                        <div  class="col-2">
                            <button class="danhmuc" style="background-color: #BE1529; border: none; border-radius: 5px;">
                             <div class="row text-light">
                                 <div class="col-3 fs-3"><i class="fa-solid fa-user"></i></div>
                                 <div class="col-9 fw-bold py-2"><a style="text-decoration: none; color:white;" href="index.php?page=dangky">Đăng Kí</a></div>
                             </div>
                            </button>
                         </div>
                         <div  class="col-3">
                            <button class="danhmuc" style="background-color: #BE1529; border: none; border-radius: 5px;">
                             <div class="row text-light">
                                 <div class="col-3 fs-3"><i class="fa-solid fa-user"></i></div>
                                 <div class="col-9 fw-bold py-2"><a style="text-decoration: none; color:white;" href="index.php?page=dangnhap">Đăng Nhập</a></div>
                             </div>
                            </button>
                         </div>
                    </div>
                </div>
                <!--end nav header text -->
            </div>
        </div>
    </nav>
    <!-- end top 2 banner header -->

    <!-- top 3 banner header -->
    <nav class="navbar-expand-sm" style="background-color: #ECECEC;" >
       <div class="container">
        <div class="row fw-bold fs-5 py-2 ">
            
            <div class="col-md-2">

            <div class="row">
                    <div class="col-md-1"><i class="fa-solid fa-fire"></i></div>
                    <div class="col-md-9">Xu Hướng</div>
                    <div class="col-md-1">|</div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-1"><i class="fa-solid fa-tag"></i></div>
                    <div class="col-9">Khuyến mãi</div>
                    <div class="col-1">|</div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-2"><i class="fa-solid fa-book"></i></div>
                    <div class="col-8">Tin Tức</div>
                    <div class="col-1">|</div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-1"><i class="fa-solid fa-barcode"></i></div>
                    <div class="col-9">Thanh toán</div>
                    <div class="col-1">|</div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-2"><i class="fa-solid fa-circle-exclamation"></i></div>
                    <div class="col-8"> Trả góp</div>
                    <div class="col-1">|</div>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <div class="col-2"><i class="fa-solid fa-handshake"></i></div>
                    <div class="col-8">Cộng tác</div>
                </div>
            </div>
        </div>
       </div>
    </nav>
     <!-- end top 3 banner header -->
</body>