<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampul Kreativ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Dashboard Admin</h2>

        <div class="row">
            <!-- Grafik 1: Total Interaksi Chatbot -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Total Interaksi Chatbot</div>
                    <div class="card-body">
                        <canvas id="chartTotalInteraksi"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik 2: Penggunaan Fitur Kontak Agen -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Penggunaan Fitur Kontak Agen</div>
                    <div class="card-body">
                        <canvas id="chartKontakAgen"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Grafik 3: Intent yang Paling Sering Digunakan -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Intent yang Paling Sering Digunakan</div>
                    <div class="card-body">
                        <canvas id="chartIntentTeratas"></canvas>
                    </div>
                </div>
            </div>

            <!-- Grafik 4: Respons Tidak Terjawab -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Respons Tidak Terjawab</div>
                    <div class="card-body">
                        <canvas id="chartResponsTidakTerjawab"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        // Grafik 1: Total Interaksi Chatbot (Line Chart)
        new Chart(document.getElementById('chartTotalInteraksi').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Total Percakapan',
                    data: [120, 150, 180, 170, 200, 220, 190],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            }
        });

        // Grafik 2: Penggunaan Fitur Kontak Agen (Bar Chart)
        new Chart(document.getElementById('chartKontakAgen').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Permintaan Agen',
                    data: [10, 15, 8, 20, 12, 18, 14],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 2
                }]
            }
        });

        // Grafik 3: Intent yang Paling Sering Digunakan (Pie Chart)
        new Chart(document.getElementById('chartIntentTeratas').getContext('2d'), {
            type: 'pie',
            data: {
                labels: ['Salam', 'Bantuan', 'Promo', 'Order', 'Lainnya'],
                datasets: [{
                    data: [40, 25, 15, 10, 10],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF']
                }]
            }
        });

        // Grafik 4: Respons Tidak Terjawab (Doughnut Chart)
        new Chart(document.getElementById('chartResponsTidakTerjawab').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: ['Tidak Terjawab', 'Terjawab'],
                datasets: [{
                    data: [30, 120],
                    backgroundColor: ['#FF5733', '#33FF57']
                }]
            }
        });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
