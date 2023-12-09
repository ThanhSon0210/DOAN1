<?php 
    session_start();
    if(!isset($_SESSION['sonnu'])){
        header('location:login.php');
    }else{
        $user_admin=$_SESSION['username'];
        $email_admin=$_SESSION['email'];
    }

    require_once('model/connect.php');
    require_once('model/product.php');
    require_once('model/catalog.php');
    require_once('model/global.php');
    require_once('public/head.php');
    require_once('public/nav.php');
    include_once "model/user.php";
    
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'home':
                require_once('public/home.php');
                break;

            case 'updatedmform':
                //lấy danh mục 
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $id=$_GET['id'];
                    $detail=get_catalog_detail($id);
                }
                require_once('public/updatedmform.php');
                break;
            case 'search'://tìm
                //lay id,name từ form về
                if(isset($_POST['btnsearch'])){
                    $ktw=$_POST['ktw'];
                }
                //update

                //load lại catelogies
                $tb="";
                $cataloglist=get_catalog($ktw);
                require_once('public/categories.php');
                break;
            case 'update_catalog':
                //lay id,name từ form về
                if(isset($_POST['btnupdate'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    update_catalog($id,$name);
                }
                //update

                //load lại catelogies
                $tb="";
                $cataloglist=get_catalog();
                require_once('public/categories.php');
                break;
            case 'categories'://quan lý danh mục
                $tb="";
                //load danh mục từ database
                $cataloglist=get_catalog();
                require_once('public/categories.php');
                break;

            case 'addcatalog':
                //thêm mới catalog từ form
                if(isset($_POST['btnadd'])){
                    $name=$_POST['name'];
                    insert_catalog($name);
                }
                $tb="";
                //load lại catalog
                $cataloglist=get_catalog();
                require_once('public/categories.php');
                break;

            case 'deldm'://xoa
                //lay id
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $id=$_GET['id'];
                    $tb=delete_dm($id);
                }
                //delete

                //load lại catelogies
                $cataloglist=get_catalog();
                require_once('public/categories.php');
                break;
            case 'updateproduct':
                require_once('public/products.php');
                break;
            case 'updatespform':
                // load database
                $cataloglist = get_catalog();
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $id=$_GET['id'];
                    $detail=get_product_detail($id);
                }
                require_once('public/updatespform.php');
                break;
            case 'products':
                $productlisst = getnewproduct();
                require_once('public/products.php');
                break;
            case 'deletesp':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    // xóa ảnh trên host trước 
                    $ten_file_hinh = get_img_product($id);
                    $hinh = "../".PATH_IMG.$ten_file_hinh;
                    if(file_exists($hinh)){
                        unlink($hinh);
                    }
                    // xóa trong database
                    delete_sp($id);
                }
                // Xóa xong load lại sản phẩm
                $productlisst = getnewproduct();
                require_once('public/products.php');
                break;
            case 'users':
                require_once('public/users.php');
                break;
            case 'bieudo':
                require_once('public/users.php');
                break;
            case 'thongke':
                $list_thongke = loadall_thongke();
                require_once('public/thongke.php');
                break;
            default:
                require_once('public/404.php');
        }
    }else{
        require_once('public/home.php');
    }
 
    require_once('public/footer.php');
?>