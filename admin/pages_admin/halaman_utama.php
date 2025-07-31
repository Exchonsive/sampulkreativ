<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampul Kreativ - Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #ratingpengguna {
            max-width: 250px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Halaman Utama Admin</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Penggunaan Chatbot per Hari</div>
                    <div class="card-body">
                        <canvas id="pengunaanchatbot"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Rating Pengguna</div>
                    <div class="card-body text-center">
                        <canvas id="ratingpengguna"></canvas>
                        <h6 class="mt-3">Rata-rata Rating: <span id="average-rating">-</span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Penggunaan Kontak Agen per Hari</div>
                    <div class="card-body">
                        <canvas id="penggunaankontakagen"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        fetch('pages_admin/dashboard_data.php')
            .then(res => res.json())
            .then(data => {
                // Chatbot
                new Chart(document.getElementById('pengunaanchatbot').getContext('2d'), {
                    type: 'line',
                    data: {
                        labels: data.chatbot.labels,
                        datasets: [{
                            label: 'Total Percakapan',
                            data: data.chatbot.data,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 2
                        }]
                    }
                });

                // Hitung rata-rata rating
                let totalRating = 0;
                let totalVotes = 0;
                data.rating.labels.forEach((label, idx) => {
                    const ratingValue = parseInt(label.replace('⭐ ', ''));
                    const count = data.rating.data[idx];
                    totalRating += ratingValue * count;
                    totalVotes += count;
                });
                const avg = totalVotes ? (totalRating / totalVotes).toFixed(2) : 0;
                document.getElementById('average-rating').textContent = data.rating.average ?? '-';


                // Rating
                new Chart(document.getElementById('ratingpengguna').getContext('2d'), {
                    type: 'doughnut',
                    data: {
                        labels: data.rating.labels,
                        datasets: [{
                            data: data.rating.data,
                            backgroundColor: ['#ff9999', '#ffcc99', '#ffff99', '#ccff99', '#99ff99']
                        }]
                    },
                    options: {
                        cutout: '60%',
                        plugins: {
                            legend: { position: 'bottom' },
                            title: { display: true, text: 'Distribusi Rating Pengguna' }
                        }
                    }
                });

                // Kontak Agen
                new Chart(document.getElementById('penggunaankontakagen').getContext('2d'), {
                    type: 'bar',
                    data: {
                        labels: data.kontak.labels,
                        datasets: [{
                            label: 'Permintaan Kontak Agen',
                            data: data.kontak.data,
                            backgroundColor: 'rgba(255, 99, 132, 0.5)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 2
                        }]
                    }
                });
            });
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>