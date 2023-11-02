


<!DOCTYPE html>
<html>
<head>
    <title>Đơn Đặt Hàng</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .form {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .left-column {
        width: 48%;
    }

    .right-column {
        width: 48%;
        background-color: #f0f0f0;
        padding: 10px;
        border-radius: 5px;
    }

    h2 {
        font-size: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }


    .tong-tien {
        font-size: 24px;
        margin-top: 20px;
    }

    .don-hang-button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .don-hang-button:hover {
        background-color: #0056b3;
    }
    .dathang {
    width: 95%;
    background-color: #28a745; 
    color: white;
    margin: 10px;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .dathang:hover {
        background-color: #218838; /* Màu xanh lá cây đậm khi hover */
    }
</style>

</head>
<body>
    <form class="form" action="index.php?page=donhang" id="orderForm">
        <div class="container">
            <div class="left-column">
                <h2>Thông Tin Người Đặt Hàng</h2>
                <label for="username">Họ và Tên:</label>
                <input type="text" id="username" name="name" required><br>
                <label for="dienthoai">Số Điện Thoại:</label>
                <input type="text" id="dienthoai" name="dienthoai" required><br>
                <label for="diachi">Địa Chỉ</label>
                <input type="text" id="diachi" name="diachi" required><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required><br>
            </div>
            <div class="right-column">
                    <h2>Chọn Phương Thức Thanh Toán:</h2>
                    <input type="radio"  id="pttt" name="pttt" value="Tiền Mặt">Tiền Mặt <br>
                    <input type="radio"  id="pttt" name="pttt" value="Chuyển Khoản Ngân Hàng">Chuyển Khoản Ngân Hàng <br>
                    <input type="radio"  id="pttt" name="pttt" value="Thẻ Tín Dụng">Thẻ Tín Dụng<br><br>
                    <input  class="dathang"   type="submit" name="donhang" id="submitOrder" value="Đặt Hàng">
            </div>
        </div>
    </form>

    <script>
    document.getElementById("orderForm").addEventListener("submit", function (e) {
        e.preventDefault(); 
        var name = document.getElementById("username").value;
        var phone = document.getElementById("dienthoai").value;
        var address = document.getElementById("diachi").value;
        var email = document.getElementById("email").value;
        var pttt = document.querySelector('input[name="pttt"]:checked').value;
        var isSuccess = true; 
        if (isSuccess) {
            Swal.fire({
                icon: 'success',
                title: 'Đặt hàng thành công!',
                html: `
                    <p>Cảm ơn bạn đã đặt hàng.</p>
                    <p>Thông tin của bạn:</p>
                    <ul>
                        Họ và Tên: ${name}<br>
                        Số Điện Thoại: ${phone}<br>
                        Địa Chỉ: ${address}<br>
                        Email: ${email}<br>
                        Phương Thức Thanh Toán: ${pttt}<br>
                    </ul>
                `,
                confirmButtonText: 'OK'
            }).then(function() {
                window.location.href = 'index.php';
            });
        }
    });
</script>


</body>
</html>
