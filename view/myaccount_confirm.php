<?php 
     if(isset($_SESSION['s_useget_user($id)r']) && (count($_SESSION['s_user']) > 0 )){
        extract($_SESSION['s_user']);
        $userinfor = get_user($id);
        $_SESSION['s_user'] = $userinfor;
        extract($userinfor);
     }
?>
<style>
    .baobu{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    #tieude{
        max-width: 400px;
        background: rgba(44, 5, 66, 0.8);
        flex-grow: 1;
        padding: 30px 30px 40px;
        box-shadow: 0px 0px 17px 2px  rgba(89, 239, 253, 0.8);
    }
    .hello{
        font-size: 25px;
        color: #f5f5f5;
        text-align: center;
        margin-bottom: 30px;
    }
    .nhaplieu{
        border-bottom: 1px solid #fff;
        margin-top: 15px;
        margin-bottom: 20px;
    }
    .nhaplieu i{
        color: #fff;
        font-size: 14px;
    }
    .hienthi{
        background: transparent;
        border: 0;
        outline: 0;
        color: #f5f5f5;
        flex-grow: 1;
    }
    .hienthi::placeholder{
        color: aqua;
    }
    .add{
        background: transparent;
        border: 1px solid #f5f5f5;
        color: #fff;
        width: 100%;
        text-transform: uppercase;
        padding: 10px 15px;
        transition: 0.25s ease-in-out;
        margin-top: 30px;
    }
    .add:hover{
        background-color:rgb(254, 254, 254);
        color: black;
        font-size: 15px;
    }
</style>
<div class="baobu">
            <form method="post" action="index.php?page=updateuser" id="tieude" name="" >
                <div id="error-message"></div>
                <h1 class="hello">CẬP NHẬT THÀNH CÔNG</h1>
                <div class="nhaplieu">
                    <i class="fa fa-user"></i>
                    <?=$username?>
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-key"></i>
                    <?=$pass?>
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-envelope"></i>
                    <?=$email?>
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-map-marker"></i>
                    <?=$diachi?>
                </div>
                <div class="nhaplieu">
                    <i class="fa fa-phone custom-cursor-on-hover"></i>
                    <?=$dienthoai?>
                </div>
            </form>
        </div>
