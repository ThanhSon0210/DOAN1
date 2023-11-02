<?php 
  if(isset($_SESSION['s_user']) && (count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
    $html_account ='<a class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Xin Chào, 
                    </a>
                    <a href="index.php?page=myaccount">'.$username.'</a>
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
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body>
    <nav  class="navbar navbar-expand-lg" style="background-color: rgb(240, 240, 240);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/sonnu logo.png" alt="" width="50px;" style="border-radius: 5px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=home">Trang Chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=sanpham">Tất Cả Sản Phẩm</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  Thể Loại
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Bàn Phím Có Dây</a></li>
                  <li><a class="dropdown-item" href="#">Bàn Phím Không Dây</a></li>
                  <!-- <li><hr class="dropdown-divider"></li> -->
                  <li><a class="dropdown-item" href="#">Phụ Kiện Bàn Phím</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <form action="index.php?page=sanpham" method="post" class="d-flex" role="search">
                    <input class="form-control me-2"  type="text" name="key"  placeholder="Tìm kiếm ...">
                    <input class="btn btn-outline-success" type="submit"  name="timkiem"  value="Tìm" >
                  </form>
              </li>
            </ul>
            
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php?page=viewcart"><i class="fa fa-shopping-cart"></i></a>
                </li>
                <li class="nav-item dropdown">
                  <?=$html_account?>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    