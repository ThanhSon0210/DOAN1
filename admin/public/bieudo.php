<style>
    .center{
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="center">
    <canvas id="myChart" style="width:100%;max-width:550px;"></canvas>
    <script>
        const xValues = ["Bàn Phím Không Dây", "Bàn Phím Có Dây", "Chuột"];
        const yValues = [40, 40, 20];
        const barColors = ["#b91d47", "#00aba9", "#2b5797"];

        <?php
        $i = 1;
        $tongdm = count($list_thongke);
        echo 'const dynamicXValues = [';
        foreach ($list_thongke as $tk) {
            extract($tk);
            $dauphay = ($i == $tongdm) ? "" : ",";
            echo '"' . $tendm . '"' . $dauphay;
            $i += 1;
        }
        echo '];';

        echo 'const dynamicYValues = [';
        $i = 1;
        foreach ($list_thongke as $tk) {
            extract($tk);
            $dauphay = ($i == $tongdm) ? "" : ",";
            echo $countsp . $dauphay;
            $i += 1;
        }
        echo '];';
        ?>

        new Chart("myChart", {
            type: "doughnut",
            data: {
                labels: dynamicXValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: dynamicYValues
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "HTPS Cung Cấp Các Sản Phẩm Công Nghệ Chất Lượng"
                }
            }
        });
    </script>
</div>