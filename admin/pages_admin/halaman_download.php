<style>
.download-area {
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
}
.form-section {
  display: none;
  margin-top: 1rem;
}
</style>

<h2 class="mt-5 mb-3">Unduh Data</h2>

<div class="mb-3">
  <label for="dataType" class="form-label">Jenis Data</label>
  <select class="form-select" id="dataType">
    <option value="">-- Pilih Data --</option>
    <option value="chat_logs">Riwayat Chat Pengguna</option>
    <option value="kontak_agen">Kontak Agen</option>
    <option value="server_issues">Kendala Server</option>
    <option value="user_rating">Rating Pengguna</option>
  </select>
</div>

<div class="form-section" id="filter-section">
  <div class="row">
    <div class="col-6 mb-3">
      <label for="startDate" class="form-label">Dari Tanggal</label>
      <input type="date" class="form-control" id="startDate">
    </div>
    <div class="col-6 mb-3">
      <label for="endDate" class="form-label">Sampai Tanggal</label>
      <input type="date" class="form-control" id="endDate">
    </div>
  </div>
  <button id="downloadBtn" class="btn btn-success mt-2">
    <i class="fas fa-download"></i> Unduh
  </button>
</div>

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

    if (!type) return alert('Silakan pilih jenis data!');

    let url = `pages_admin/download_data.php?type=${type}`;
    if (start && end) {
      url += `&start=${start}&end=${end}`;
    }

    window.location.href = url;
  });
</script>
