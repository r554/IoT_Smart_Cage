<?php
$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

//Baca informasi tanggal untuk semua data suhu di grafik sumbu X
$tanggal = mysqli_query($konek, "SELECT tanggal FROM tb_sensor ORDER BY id ASC");
//Baca informasi suhu untuk semua data suhu di grafik sumbu Y
$suhu = mysqli_query($konek, "SELECT suhu FROM tb_sensor ORDER BY id ASC");
//Baca informasi suhu untuk semua data suhu di grafik sumbu Y
$kelembaban = mysqli_query($konek, "SELECT kelembaban FROM tb_sensor ORDER BY id ASC");
//Baca informasi amoniak untuk semua data amoniak di grafik sumbu Y
$amoniak = mysqli_query($konek, "SELECT amoniak FROM tb_sensor ORDER BY id ASC");
?>

<!-- Untuk Tampilan Grafik -->
<div class="panel panel-primary">

    <div class="panel-body">
        <!-- Sisipkan Canvas Untuk Grafik -->
        <canvas id="lineChartAmoniak"></canvas>

        <!-- Gambar Grafik -->
        <script type="text/javascript">
            // Baca ID canvas untuk tempat grafik ditempatkan
            var canvas = document.getElementById('lineChartAmoniak');

            // Data tanggal dan Amoniak pada grafik
            var data = {
                labels: [
                    <?php
                    while ($data_tanggal = mysqli_fetch_array($tanggal)) {
                        echo '"' . $data_tanggal['tanggal'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: "Amoniak",
                    fill: !0,
                    lineTension: .5,
                    backgroundColor: "rgba(85, 110, 230, 0.2)",
                    borderColor: "#0f9cf3",
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0,
                    borderJoinStyle: "miter",
                    pointBorderColor: "#0f9cf3",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#0f9cf3",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80],
                    data: [
                        <?php
                        while ($data_amoniak = mysqli_fetch_array($amoniak)) {
                            echo $data_amoniak['amoniak'] . ',';
                        }
                        ?>
                    ]
                }]
            };

            //option grafik
            var option = {
                showLines: true,
                animation: {
                    duration: 0
                }
            };

            //cetak grafik di dalam canvas
            var myLineChart = Chart.Line(canvas, {
                data: data,
                options: option
            });

            this.respChart(l("#lineChartAmoniak"), "Line", {
                scales: {
                    yAxes: [{
                        ticks: {
                            max: 100,
                            min: 20,
                            stepSize: 10
                        }
                    }]
                }
            });
        </script>
    </div>
</div>