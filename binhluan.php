<?php
    session_start();
    include "dao/pdo.php";
    include "dao/binh-luan.php";
    if(isset($_SESSION['s_user']) && ($_SESSION['s_user'] > 0 )){
        // foreach ($_SESSION['s_user'] as $key) {
            //     print_r($_SESSION['s_user']['id']);
            // }
                $id_user = $_SESSION['s_user']['id'];
                $name_user = $_SESSION['s_user']['username'];
        // if(isset($_SESSION['s_user']) && ($_SESSION['s_user']!="" )){
        //     $user= $_SESSION['s_user'];
            
        // }else{
        //     $user="";
        // }

        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan']!="" )){
            $noidung=$_POST['noidung'];
            $idsp=$_GET['idsp'];
            thembl($name_user,$id_user,$idsp,$noidung);
            // print_r($name, $noidung, $idsp, $iduser);
        }

        $dsbl = showbl();
?>
<style>
      .card {
  background-color: rgba(243, 244, 246, 1);
  padding: 2rem;
  max-width: auto;
  border-radius: 10px;
  box-shadow: 0 20px 30px -20px rgba(5, 5, 5, 0.24);
}

.header {
  display: flex;
  align-items: center;
  grid-gap: 1rem;
  gap: 1rem;
}

.header .image img {
  height: 4rem;
  width: 4rem;
  border-radius: 9999px;
  object-fit: cover;
  background-color: royalblue;
}

.stars {
  display: flex;
  justify-content: center;
  grid-gap: 0.125rem;
  gap: 0.125rem;
  color: rgba(34, 197, 94, 1);
}

.stars svg {
  height: 1rem;
  width: 1rem;
}

.name {
  margin-top: 0.25rem;
  font-size: 1.125rem;
  line-height: 1.75rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgba(55, 65, 81, 1);
}

.message {
  overflow: hidden;
  display: -webkit-box;
  -webkit-box-orient: vertical;
  margin-top: 1rem;
  color: rgba(107, 114, 128, 1);
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>binh luan</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="noidung" id="" style="width: 89%;height:100px;font-size: 15px;"></textarea>
        <input class="btn btn-primary" type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>
    <hr>
    <?php
        foreach ($dsbl as $bl) {
            extract($bl);
        //     echo '<div class="row"  style="border-bottom: 1px solid rgb(0, 0, 0); padding: 5px;">
        //     <div class="col-sm-3">
        //         <strong><i class="fa fa-user-circle"></i> '.$name_user.'</strong><br>
                
        //     </div>
        //     <div class="col-sm-5">
        //     <p>'.$noidung.'</p>
        //         <a href=""><i class="fa fa-thumbs-up"></i></a>
        //     </div>
            
        // </div>'; 
        echo '
        <div class="card">
                <div class="header">
                <div class="image"><img src="uploads/vovinam.png" alt=""></div>
                <div>
                        <!-- ngôi sao  -->
                    <div class="stars">
                    <svg fill="#FFD700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg fill="#FFD700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg fill="#FFD700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg fill="#FFD700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg fill="#FFD700" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    </div>
                    <!-- end ngôi sao  -->
                    <p class="name">'.$name_user.'</p>
                </div>
                </div>

                <p class="message">'.$noidung.'</p>
        </div>
        ';
        }
    ?>
</body>
</html>
<?php 

}else {
    echo "<a href='index.php?page=dangnhap' target='_parent' > vui lòng đăng nhập</a>";
}

?>

