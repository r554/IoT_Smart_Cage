<?php
$konek = mysqli_connect("localhost", "root", "", "iot_smart_cage");

//Baca informasi tanggal untuk semua data suhu di grafik sumbu X
$tanggal = mysqli_query($konek, "SELECT tanggal FROM tb_sensor ORDER BY id ASC");
//Baca informasi suhu untuk semua data suhu di grafik sumbu Y
$suhu = mysqli_query($konek, "SELECT suhu FROM tb_sensor ORDER BY id ASC");
//Baca informasi suhu untuk semua data suhu di grafik sumbu Y
$kelembaban = mysqli_query($konek, "SELECT kelembaban FROM tb_sensor ORDER BY id ASC");
?>

<!-- Untuk Tampilan Grafik -->
<div class="panel panel-primary">
    <div class="panel-heading">
        Grafik Sensor
    </div>

    <div class="panel-body">
        <!-- Sisipkan Canvas Untuk Grafik -->
        <canvas id="mychart"></canvas>

        <!-- Gambar Grafik -->
        <script type="text/javascript">
            // Baca ID canvas untuk tempat grafik ditempatkan
            var canvas = document.getElementById('mychart');

            // Data tanggal dan suhu pada grafik
            var data = {
                labels: [
                    <?php
                    while ($data_tanggal = mysqli_fetch_array($tanggal)) {
                        echo '"' . $data_tanggal['tanggal'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                        label: "Suhu",
                        fill: true,
                        backgroundColor: "rgba(52, 231, 43, 0.2)",
                        borderColor: "rgba(52, 231, 43, 1)",
                        lineTension: 0.5,
                        pointRadius: 5,
                        data: [
                            <?php
                            while ($data_suhu = mysqli_fetch_array($suhu)) {
                                echo $data_suhu['suhu'] . ',';
                            }
                            ?>
                        ]
                    },
                    {
                        label: "Kelembaban",
                        fill: true,
                        backgroundColor: "rgba(239, 82, 93, 0.2)",
                        borderColor: "rgba(239, 82, 93, 1)",
                        lineTension: 0.5,
                        pointRadius: 5,
                        data: [
                            <?php
                            while ($data_kelembaban = mysqli_fetch_array($kelembaban)) {
                                echo $data_kelembaban['kelembaban'] . ',';
                            }
                            ?>
                        ]
                    }
                ]
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
        </script>
    </div>
</div>