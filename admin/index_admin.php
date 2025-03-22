<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampul Kreativ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh; position: fixed;">
            <div class="mb-3">
                <img src="../img/sampulkreativ-logo-putih.png" alt="Logo" style="width: 150px;">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="index_admin.php?page=halaman_utama" class="nav-link text-white">Halaman Utama</a></li>
                <li class="nav-item"><a href="index_admin.php?page=report" class="nav-link text-white">Report</a></li>
                <li class="nav-item"><a href="index_admin.php?page=chat_agent" class="nav-link text-white">Chat Agent</a></li>
                <li class="nav-item"><a href="index_admin.php?page=logout" class="nav-link text-white">Log Out</a></li>
            </ul>
        </nav>
        
        <!-- Main Content -->
        <div class="container mt-4" style="margin-left: 270px;">
            <?php include 'wrapper.php'; ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
