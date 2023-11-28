<?php
    session_start();
    include "dao/pdo.php";
    include "dao/binhluan.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>binh luan</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="noidung" id=""  cols="30" rows="5" style="width: 90%;"></textarea>
        <input type="submit" value="gửi bình luận" name="guibinhluan">
    </form>
    <hr>
    <?php
        foreach ($dsbl as $bl) {
            extract($bl);
            echo '<div class="row"  style="border-bottom: 1px solid rgb(0, 0, 0); padding: 5px;">
            <div class="col-sm-3">
                <strong><i class="fa fa-user-circle"></i> '.$name_user.'</strong><br>
                
            </div>
            <div class="col-sm-5">
            <p>'.$noidung.'</p>
                <a href=""><i class="fa fa-thumbs-up"></i></a>
            </div>
            
        </div>';
           
        }
    ?>
</body>
</html>
<?php 

}else {
    echo "<a href='index.php?page=dangnhap' target='_parent' > vui lòng đăng nhập</a>";
}

?>
<style>
    body{
        margin:0px;
        padding:0px;
        height:100%;
    }
    form{
        height: 100em;
    }
</style>

