<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Unduh Data - Sampul Kreativ</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css">

  <style>
    .download-area {
      max-width: 80%;
      margin: 2rem auto;
      text-align: center;
    }
    .form-section {
      display: none;
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <div class="container download-area">
    <h2 class="mb-4"><i class="fas fa-file-download"></i> Unduh Data</h2>

    <div class="mb-3 text-start">
      <label for="dataType" class="form-label"><i class="fas fa-database me-1"></i> Jenis Data</label>
      <select class="form-select" id="dataType">
        <option value="">-- Pilih Data --</option>
        <option value="chat_logs">Riwayat Chat Pengguna</option>
        <option value="kontak_agen">Kontak Agen</option>
        <option value="server_issues">Kendala Server</option>
        <option value="user_rating">Rating Pengguna</option>
      </select>
    </div>

    <div class="form-section text-start" id="filter-section">
      <div class="row">
        <div class="col-6 mb-3">
          <label for="startDate" class="form-label"><i class="fas fa-calendar-day me-1"></i> Dari Tanggal</label>
          <input type="date" class="form-control" id="startDate">
        </div>
        <div class="col-6 mb-3">
          <label for="endDate" class="form-label"><i class="fas fa-calendar-day me-1"></i> Sampai Tanggal</label>
          <input type="date" class="form-control" id="endDate">
        </div>
      </div>
      <div class="text-end">
        <button id="downloadBtn" class="btn btn-success mt-2">
          <i class="fas fa-cloud-download-alt me-1"></i> Unduh
        </button>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Format tanggal ke yyyy-mm-dd
    const getToday = () => {
      const today = new Date();
      const yyyy = today.getFullYear();
      const mm = String(today.getMonth() + 1).padStart(2, '0');
      const dd = String(today.getDate()).padStart(2, '0');
      return `${yyyy}-${mm}-${dd}`;
    };

    // Set default date saat halaman load
    window.addEventListener('DOMContentLoaded', () => {
      const today = getToday();
      document.getElementById('startDate').value = today;
      document.getElementById('endDate').value = today;
    });

    // Tampilkan form tanggal kalau tipe data dipilih
    document.getElementById('dataType').addEventListener('change', function () {
      document.getElementById('filter-section').style.display = this.value ? 'block' : 'none';
    });

    // Handle tombol download
    document.getElementById('downloadBtn').addEventListener('click', function () {
      const type = document.getElementById('dataType').value;
      const start = document.getElementById('startDate').value;
      const end = document.getElementById('endDate').value;

      if (!type) {
        alert('Silakan pilih jenis data!');
        return;
      }

      let url = `pages_admin/download_data.php?type=${type}`;
      if (start && end) {
        url += `&start=${start}&end=${end}`;
      }

      window.location.href = url;
    });
  </script>

</body>
</html>
