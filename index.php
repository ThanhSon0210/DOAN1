
<?php 
    session_start();
    ob_start();
    if(!isset($_SESSION["giohang"])){
        $_SESSION["giohang"]=[];
    }
   
 
    include_once "dao/donhang.php";

    include_once "dao/pdo.php";
    // include_once "dao/binh-luan.php";
    include_once 'dao/thanhtoanvnpay.php';
    include_once "dao/user.php";
    include_once "dao/cart.php";
    // include_once "dao/billconfirm.php";
    include_once "dao/danhmuc.php";
    include_once "dao/sanpham.php";

    include_once "view/header.php";
    $html_hm = get_hm(18);
    $dssp_nb = get_dssp_nb(8);
    $dssp_sale = get_dssp_sale(12);

    if(!isset($_GET['page'])){
        include_once "view/home.php";
    }else{
        switch ($_GET['page']) {
            case 'sanpham':
                $key = "";
                $titlepage = "";
                $dsdm = danhmuc_all();
                
                if(!isset($_GET['iddm'])){
                    $iddm=0;
                }else{
                    $iddm = $_GET['iddm'];
                    $titlepage = get_name_dm($iddm);
                }

                // kiểm tra có phải seach không?
                if(isset($_POST['timkiem']) && ($_POST['timkiem'])){
                    $key = $_POST['key'];
                    $titlepage ="Kết Quả Tìm Kiếm Với Từ Khóa: ".$key;
                }

                $dssp = get_dssp($key, $iddm,12);
                include_once "view/sanpham.php";
                break;
            case 'chitiet':
                if(isset($_GET['idsp'])){
                    $id = $_GET['idsp'];
                    $spct =get_sp_by_id($id);
                    $dsdm = danhmuc_all();
                    $iddm = $spct['iddm'];
                    $splq =get_dssp_lienquan($iddm, $id, 4);
                    include_once "view/chitiet.php";
                }else{
                    include_once "view/home.php";
                }
                break;
            case 'addcart':
                if (isset($_POST["addcart"])) {
                    $name = $_POST["name"];
                    $img = $_POST["img"];
                    $price = $_POST["price"];
                    $soluong = $_POST["soluong"];
    
                    $sp = array(
                        "idpro" => $idpro,
                        "name" => $name,
                        "img" => $img,
                        "price" => $price,
                        "soluong" => $soluong
                        
                    );
                    $giohang = &$_SESSION['giohang']; // Sử dụng biến tham chiếu để thao tác trực tiếp với mảng $_SESSION["giohang"]
            
                    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
                    $productExists = false;
                    foreach ($giohang as $key => $item) {
                        if ($item["name"] == $name) {
                            $giohang[$key]["soluong"] += $soluong; // Nếu sản phẩm đã tồn tại, tăng số lượng
                            $productExists = true;
                            break;
                        }
                    }
                    if (!$productExists) {
                        array_push($giohang, $sp); // Nếu sản phẩm chưa tồn tại, thêm vào mảng
                    }
                    header('location: index.php?page=viewcart');
                }
            break;                
            case 'delsp':
                if(isset($_GET['ind']) && ($_GET['ind']>=0)){
                    array_splice($_SESSION['giohang'], $_GET['ind'],1);
                    header('location: index.php?page=viewcart');
                }
                break;
            case 'viewcart':
                if(isset($_GET['del']) && ($_GET['del']==1)){
                    unset($_SESSION['giohang']);
                    header('location: index.php?page=viewcart');
                }else{
                    include_once "view/cart/viewcart.php";
                }
                break;
            case 'login':
                // kiểm tra đăng nhập bằng tài khoản tay
                if(isset($_POST["dangnhap"]) && ($_POST["dangnhap"])){
                    $name = $_POST["username"];
                    $password = $_POST["password"];
                    // xử lý: kiểm tra
                    $kq = checkuser( $name, $password);
                    if(is_array($kq)&&(count($kq))){
                        $_SESSION['s_user'] = $kq;
                        header('location: index.php'); 
                    }else{
                        $tb = "Tài Khoản Không Tồn Tại";
                        $_SESSION['tb_dangnhap'] = $tb;
                        header('location: index.php?page=dangnhap'); 
                    }  
                }
                break;
            case 'tintuc':
                include_once "view/tintuc.php";
                break;
            case 'about':
                include_once "view/about.php";
                break;
            case 'dangnhap':
                include_once "view/dangnhap.php";
                break;
            case 'myaccount':
                if(isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0 )){
                    include_once "view/myaccount.php";
                }
                break;
            case 'logout':
                if(isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0 )){
                    unset($_SESSION['s_user']);
                    $accesstoken=$_SESSION['access_token'];
 
                    //Reset OAuth access token
                    $google_client->revokeToken($accesstoken);
                    
                    //Destroy entire session data.
                    session_destroy();
                    
                }
                header('location: index.php');
                break;
                case 'logoutgg':
                    if(isset( $_SESSION['s_users'])){
                        $accesstoken=$_SESSION['s_users'];
 
                        //Reset OAuth access token
                        $google_client->revokeToken($accesstoken);
                         
                        //Destroy entire session data.
                        session_destroy();
                        
                    }
                    header('location: index.php');
                    break;
            case 'adduser':
                // xác định giá trị input 
                if(isset($_POST["dangky"]) && ($_POST["dangky"])){
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $email = $_POST["email"];

                    // xử lý 
                    user_insert($username, $password, $email);
                }
                include_once "view/dangnhap.php";
                break;
            case 'updateuser':
                // xác định giá trị input 
                if(isset($_POST["capnhat"]) && ($_POST["capnhat"])){
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $email = $_POST["email"];
                    $diachi = $_POST["diachi"];
                    $dienthoai = $_POST["dienthoai"];
                    $id = $_POST["id"];
                    $role = 0;
                    // xử lý 
                    update_user($username, $password, $email, $diachi, $dienthoai, $role, $id);
                    include_once "view/myaccount_confirm.php";
                }
               
                break;
            
            case 'dangky':
                include_once "view/dangky.php";
                break;
            case 'donhang':
                include_once "view/donhang.php";
                break;
            case 'donhangconfirm':
              if (isset($_SESSION['s_user'])) {
                if(isset($_POST['dongydathang']) ){
                    $hoten = $_POST['hoten'];
                    $diachi = $_POST['diachi'];
                    $dienthoai = $_POST['dienthoai'];
                    $email = $_POST['email'];
                    $pttt = $_POST['pttt'];
                    
                    $ngaydathang = date('d/m/Y');
                    $tongtiendonhang = tongtiendonhang();
                    $iddonhang = insert_bill($_SESSION['s_user']['id'], $hoten, $diachi, $dienthoai, $email, $pttt, $ngaydathang, $tongtiendonhang);
                    // $iddonhang = 1;
                    // insert into cart với session giohang và iddonhang
                    
                    $total = 0; // Khai báo biến $total trước vòng lặp

                    foreach ($_SESSION['giohang'] as $item) {
                        $subtotal = $item['price'] * $item['soluong']; // Tính tổng phụ cho từng sản phẩm
                        $total += $subtotal; // Cộng tổng phụ vào tổng chung
                        insert_cart($_SESSION['s_user']['id'], $_SESSION['s_user']['id'], $item['price'], $item['img'], $item['name'], $item['soluong'], $subtotal, $iddonhang);
                    }
                    
                    // Sử dụng biến $total cho thanh toán VNPay
                    
                    $_SESSION['giohang'] = [];
                    $bill = loadone_bill($iddonhang);
                    include_once "view/donhangconfirm.php";
                }else{
                    $bill = "";
                    include_once "view/donhangconfirm.php";
                }
              }else{
                echo "<script>alert('Bạn cần đăng nhập để thanh toán');</script>";
                echo "<script>window.location='index.php?page=dangnhap';</script>";
                // header('location: index.php?page=dangnhap');
              }
                
                break;
            case 'lsdh':
                $list_bill = loadall_bill($_SESSION['s_user']['id']);
                include_once "view/lsdh.php";
                break;
            case 'binhluan':
                
                include_once "view/binhluan.php";
                break;
            default:
            
                include_once "view/home.php";
                break;
        }
    }

    include_once "view/footer.php";
?>
