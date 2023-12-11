

<?php
        // API Đăng Nhập Bằng Google
        define('GOOGLE_CLIENT_ID', '225723382941-1h185hsco4up6h4p8uvph26q40bio5db.apps.googleusercontent.com');
        define('GOOGLE_CLIENT_SECRET', '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');
        define('GOOGLE_REDIRECT_URL', 'http://localhost/doan1/DOAN1/');
        define('LOCALHOST','localhost');
        define('USERNAME','root');
        define('PASSWORD','');
        define('DATABASE','sonnu');

        //include dến thư viện google client  
        require_once 'google/archive_230617_061823/vendor/autoload.php';

        // Tạo đối tượng cho google api client để gọi hàm google api
        $google_client = new Google_Client();

        //Lấy google client id
        $google_client->setClientId(GOOGLE_CLIENT_ID);

        //Lấy google client secret
        $google_client->setClientSecret(GOOGLE_CLIENT_SECRET);

        //Lấy google client đường dẫn đến trang
        $google_client->setRedirectUri(GOOGLE_REDIRECT_URL);

        // đăng nhập bằng gmail hay email trên google
        $google_client->addScope('email');

        // cho phép truy cập thông tin như ảnh tên gmail
        $google_client->addScope('profile');


?>