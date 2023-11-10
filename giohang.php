<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="offcanvas offcanvas-end" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Giỏ Hàng</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p> <?php  
            if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
                $i = 0;
                $tong = 0;
                $tt=0;
                foreach ($_SESSION['giohang'] as $item) {
                    extract($item);
                    $tt = (Int)$price * (Int)$soluong;
                    $tong+=$tt;
                    $link="index.php?page=delsp&ind=".$i;   
                    echo  '<tr>
                                    <td><img src="images/'.$img.'" alt="" width="100px";></td>
                                    <td>'.$name.'</td>
                                    <td>'.$price.'</td>
                                    <td>'.$soluong.'</td>
                                    <td>'.$tt.'</td>
                                    <td>
                                        <a href="'.$link.'">
                                            <i class="fa fa-trash custom-cursor-on-hover"></i>
                                        </a>
                                    </td>
                                </tr>';
                    $i++;
                }
            }
        ?></p>

    <button class="btn btn-secondary" type="button">Thanh Toán</button>
  </div>
</div>

<div class="container-fluid mt-3">
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
    Toggle Right Offcanvas
  </button>
</div>

</body>
</html>
