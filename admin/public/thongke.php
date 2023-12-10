<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container_right {
            margin-left: 20%;
            width: 80%;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        strong {
            display: block;
            text-align: center;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="container_right">
        <strong>Bảng Thống Kê Danh Mục</strong>
        <table class="tab">
            <thead>
                <tr>
                    <th>Mã Danh Mục</th>
                    <th>Tên Danh Mục</th>
                    <th>Số Lượng</th>
                    <th>Giá Thấp Nhất</th>
                    <th>Giá Cao Nhất</th>
                    <th>Giá Trung Bình</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_thongke as $tk) {
                    extract($tk);
                    echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$minprice.' VND</td>
                            <td>'.$maxprice.' VND</td>
                            <td>'.$avgprice.'</td>
                        </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
