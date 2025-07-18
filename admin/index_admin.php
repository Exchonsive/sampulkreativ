<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_admin.php"); 
    exit();
}

$username = $_SESSION['username']; 
$nama_lengkap = $_SESSION['nama']; 
$id_user_login = $_SESSION['id']; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampul Kreativ</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">


    <style>
        .sidebar {
            width: 250px;
        }

        main {
            transition: margin-left 0.3s;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -250px;
                transition: left 0.3s;
            }

            .sidebar.active {
                left: 0;
            }

            main {
                margin-left: 0 !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar vh-100 position-fixed">
                <button id="toggleSidebar" class="btn btn-dark d-md-none">
                    ☰
                </button>
                <div class="text-center mb-3 pt-3">
                    <img src="../img/sampulkreativ-logo-putih.png" alt="Logo" style="width: 150px;">
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="index_admin.php?page=halaman_utama" class="nav-link text-white">
                            <i class="fas fa-home me-2"></i> Halaman Utama
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index_admin.php?page=halaman_download" class="nav-link text-white">
                            <i class="fas fa-download me-2"></i> Download Data
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index_admin.php?page=chat_agent" class="nav-link text-white">
                            <i class="fas fa-headset me-2"></i> Kontak Agen
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="logout_admin.php" class="nav-link text-white">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="margin-left: 250px;">
                <?php include 'wrapper.php'; ?>
            </main>
        </div>
    </div>
</body>

<script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.querySelector(".sidebar").classList.toggle("active");
    });
</script>

</html>
