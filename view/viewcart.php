
<style>
        .text-my-cart{
        text-align: center;
    }

    #my-cart {
        border-collapse: collapse;
        width: 100%;
    }
    
    #my-cart th, #my-cart td {
        padding: 8px;
        text-align: center;
    }
    
    #my-cart th {
        background-color: #f2f2f2;
    }
    
    #my-cart tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    #my-cart img {
        max-width: 150px;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    
    #my-cart a {
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        border: 1px solid black;
        padding: 4px;
        border-radius: 5px;
    }
    #my-cart a:hover{
        background-color: rgb(254, 2, 2);
    }
    #my-cart a:hover{
        background-color: rgb(254, 2, 2);
    }
    

    
    .my-cart{
        margin-top: 50px;
    }


    .chuy{
        display: grid;
        grid-template-columns: auto auto;
        height: 250px;
        gap: 20px;
    }
    #note-left{
        margin-left: 30%;
    }
    .chuy1{
        width: 100%;
    }
    .chuy1 h2{
        margin-left: 20px;
    }
    .chuy1 textarea{
        padding: 5px;
        width: 400px;
        height: 100px;
    }
    .chuy1 strong{
        color: red;
    }
    .chuy1 p{
        width: 300px;
        display: flex;
        justify-content:end;
        align-items: end;
    }
    .chuy1 button{
        padding: 10px;
        width: 300px;
        font-size: large;
        border: 1px solid black;
        background-color: rgb(255, 255, 255);
    }
    .chuy1 button:hover{
        background-color: black;
        color: white;
        border: 1px solid white;
        cursor: pointer;
        
    }
</style>

    <h1 class="text-my-cart">MY CART</h1><hr><br><br>
    <table id="my-cart">
        <thead>
            <tr>
               <th>Ảnh Sản Phẩm</th>
               <th>Tên Sản Phẩm</th>
               <th>Giá</th>
               <th>Số Lượng</th>
               <th>Thành Tiền</th>
               <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            <!-- chổ này show danh sách sản phẩm -->
        <?php  
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
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th  colspan="4" style="text-align: right">
                    Tổng Tiền : 
                </th>
                <!-- <th id="tt" style="text-align: left">
                   
                </th> -->
                <th style="text-align: center">
                    <!-- Show tổng tiền -->
                    <?=$tong?>
                </th>
                <th>
                    <button onclick="xoaAll()" style="text-align: left">Xóa Hết</button>
                </th>
            </tr>
        </tfoot>
    </table>
    <br>
    <a href="index.php" style="text-decoration:  none; cursor: pointer; " >
        <h2 style="padding: 5px; border: 1px solid rgb(0, 0, 0); width: 250px; color: black;">TIẾP TỤC MUA!</h2>
    </a>

        <div class="my-cart">
            <div class="chuy">
                <div class="chuy1">
                    <div id="note-left">
                        <h2>Ghi chú</h2><br>
                        <textarea name="note"></textarea>
                    </div>
                </div>
                <div class="chuy1">
                    <strong>NOTE:</strong>
                    <p>Vận chuyển và giảm giá được tính khi thanh toán. 
                        KHÔNG bao gồm thuế và phí vận chuyển khu vực xa xôi như đã nêu trên trang 
                        Chính sách vận chuyển của chúng tôi. Tất cả các đơn đặt hàng được xử lý bằng USD.
                    </p>
                    <br>
                    <a href="index.php?page=donhang">
                        <button onclick="dh()">ĐẶT HÀNG</button>
                    </a>
                </div>
            </div>
        </div><br>

 