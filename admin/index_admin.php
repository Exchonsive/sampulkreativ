<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login_admin.php"); // Redirect ke halaman login
    exit();
}

// Ambil data user dari session
$user_id = $_SESSION['user_id']; // ID User
$username = $_SESSION['username']; // Username
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampul Kreativ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* SIDEBAR */
        .sidebar {
            width: 250px;
        }

        /* MAIN CONTENT */
        main {
            transition: margin-left 0.3s;
        }

        /* RESPONSIVE */
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

        /* Sidebar default di layar kecil (tersembunyi) */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -250px;
                transition: left 0.3s;
            }

            .sidebar.active {
                left: 0;
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
                    <li class="nav-item"><a href="index_admin.php?page=halaman_utama" class="nav-link text-white">Halaman Utama</a></li>
                    <li class="nav-item"><a href="index_admin.php?page=report" class="nav-link text-white">Report</a></li>
                    <li class="nav-item"><a href="index_admin.php?page=chat_agent" class="nav-link text-white">Chat Agent</a></li>
                    <li class="nav-item"><a href="logout_admin.php" class="nav-link text-white">Log Out</a></li>
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
