<?php 
     if(isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0 )){
        extract($_SESSION['s_user']);
        $userinfor = get_user($id);
        extract($userinfor);
     }
?>
<style>
    .baobu {
        min-height: auto;
        padding: 20px 0 20px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #tieude {
        max-width: 400px;
        background: gainsboro;
        flex-grow: 1;
        padding: 30px 30px 40px;
        box-shadow: 0px 0px 17px 2px rgba(89, 239, 253, 0.8);
        border-radius: 10px;
    }

    .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
    }

    .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }

    .message,
    .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
    }

    .nhaplieu {
        border-bottom: 1px solid #fff;
        margin-top: 15px;
        margin-bottom: 20px;
    }

    .nhaplieu i {
        color: black;
        font-size: 20px;
        padding-right: 10px;
    }

    .hienthi {
        background: none;
        border: 0;
        outline: 0;
        color: black;
        flex-grow: 1;
        font-weight: bold;
    }

    .hienthi::placeholder {
        color: rgba(88, 87, 87, 0.822);
    }

    .add {
        background: #E30019;
        border: 1px solid #f5f5f5;
        color: white;
        font-weight: bold;
        width: 100%;
        text-transform: uppercase;
        padding: 10px 15px;
        transition: 0.25s ease-in-out;
        border-radius: 5px;
    }

    .add:hover {
        background-color: rgb(254, 254, 254);
        color: black;
        font-size: 15px;
    }

    .signin {
        margin: 10px;
        text-align: center;
    }

    .signin a {
        color: royalblue;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }
    .text-col-gg
    {
        background-color: #DF4A32;
        padding: 5px 15px;
        color: white;
    }
    .text-col-fb
    {
        background-color: #3B5998;
        padding: 5px 15px;
        color: white;
    }

</style>

<div class="baobu">
            <form method="post" action="index.php?page=myaccount_confirm" id="tieude" name="" >
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
