<?php
require 'koneksi.php';
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['status'])) {
    $id = intval($_POST['id']);
    $status = $_POST['status'];

    $update_query = "UPDATE kontak_agen SET status = ? WHERE id = ?";
    $update_stmt = mysqli_prepare($conn, $update_query);

    if ($update_stmt) {
        mysqli_stmt_bind_param($update_stmt, "si", $status, $id);
        mysqli_stmt_execute($update_stmt);
        mysqli_stmt_close($update_stmt);
    }

    $check_query = "SELECT id FROM fu_kontak_agen WHERE id_kontak_agen = ?";
    $check_stmt = mysqli_prepare($conn, $check_query);

    if ($check_stmt) {
        mysqli_stmt_bind_param($check_stmt, "i", $id);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) === 0) {
            $id_user_login = $_SESSION['id'] ?? 0;

            $insert_query = "INSERT INTO fu_kontak_agen (id_kontak_agen, id_users, created_at) VALUES (?, ?, NOW())";
            $insert_stmt = mysqli_prepare($conn, $insert_query);

            if ($insert_stmt) {
                mysqli_stmt_bind_param($insert_stmt, "ii", $id, $id_user_login);
                mysqli_stmt_execute($insert_stmt);
                mysqli_stmt_close($insert_stmt);
            }
        }

        mysqli_stmt_close($check_stmt);
    }

    header("Location:index_admin.php?page=chat_agent");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Agen - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
  .d-grid .btn {
    width: 100%;
    margin-bottom: 4px;
  }
</style>
</head>
<body>
<div class="container mt-5">
  <h2 class="mb-4">Daftar Kontak Agen</h2>
  <table id="kontakAgenTable" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Tanggal</th>
      <th>Nama</th>
      <th>Kontak</th>
      <th>Pertanyaan</th>
      <th>Status</th>
      <th style="width: 15%;">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = $conn->query("SELECT * FROM kontak_agen ORDER BY created_at ASC");
    while ($row = $result->fetch_assoc()):
      $kontak = htmlspecialchars($row['kontak']);
      $isEmail = strpos($kontak, '@') !== false;
      $status = $row['status'];
      $badge = $status === 'Pending' ? 'secondary' : ($status === 'Progress' ? 'warning' : 'success');
      $namaUser = htmlspecialchars($row['nama']);
      $pertanyaan = htmlspecialchars($row['pertanyaan']);

      $templatePesan = rawurlencode("Halo kak $namaUser, aku $nama_lengkap dari tim Sampul Kreativ ingin menjawab pertanyaan kakak tentang: '$pertanyaan'.");

      $fu_nama = '-';
      $fu_waktu = '-';
      $id_kontak = $row['id'];
      $sql_fu = "SELECT users.nama, fu_kontak_agen.created_at 
                  FROM fu_kontak_agen 
                  JOIN users ON users.id = fu_kontak_agen.id_users 
                  WHERE fu_kontak_agen.id_kontak_agen = $id_kontak 
                  LIMIT 1";
      $res_fu = mysqli_query($conn, $sql_fu);
      if ($res_fu && mysqli_num_rows($res_fu) > 0) {
          $data_fu = mysqli_fetch_assoc($res_fu);
          $fu_nama = $data_fu['nama'];
          $fu_waktu = date('d M Y H:i', strtotime($data_fu['created_at']));
      }

      $aksi = $isEmail
        ? "<a href='mailto:$kontak?subject=Pertanyaan dari SampulKreativ&body=Halo kak $namaUser, aku $nama_lengkap dari tim Sampul Kreativ ingin menjawab pertanyaan kakak tentang: $pertanyaan.' class='btn btn-sm btn-outline-primary'><i class='fas fa-envelope'></i> Email</a>"
        : "<a href='https://wa.me/" . preg_replace('/^0/', '62', $kontak) . "?text=$templatePesan' target='_blank' class='btn btn-sm btn-outline-success'><i class='fab fa-whatsapp'></i> WhatsApp</a>";

      $aksi .= " <button class='btn btn-sm btn-outline-dark' 
                    data-bs-toggle='modal' 
                    data-bs-target='#statusModal' 
                    data-id='{$row['id']}' 
                    data-status='{$status}' 
                    data-fu='{$fu_nama}' 
                    data-waktu='{$fu_waktu}'>
                    <i class='fas fa-edit'></i> Status</button>";
    ?>
    <tr>
      <td class="text-center align-middle"><?= date('d-M-Y', strtotime($row['created_at'])) ?></td>
      <td class="align-middle"><?= $namaUser ?></td>
      <td class="align-middle"><?= $kontak ?></td>
      <td class="align-middle"><?= $pertanyaan ?></td>
      <td class="text-center align-middle"><span class="badge bg-<?= $badge ?>"><?= $status ?></span></td>
      <td class="text-center align-middle">
        <div class="d-grid gap-1">
          <?= $aksi ?>
        </div>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</div>

<!-- Modal Update Status -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="statusModalLabel">Ubah Status Pertanyaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" id="modal-id">
          <div class="mt-3" id="fu-info">
            <span>Follow Up Oleh: </span><span id="fu-nama">-</span><br>
            <span>Tanggal: </span><span id="fu-waktu">-</span>
          </div><br>
          <label for="status" class="form-label">Status Pertanyaan:</label>
          <select name="status" id="modal-status" class="form-select" required>
            <option value="Pending">Pending</option>
            <option value="Progress">Progress</option>
            <option value="Closed">Closed</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#kontakAgenTable').DataTable();

    $('#statusModal').on('show.bs.modal', function (event) {
      const button = $(event.relatedTarget);
      const id = button.data('id');
      const status = button.data('status');
      const fu = button.data('fu') || '-';
      const waktu = button.data('waktu') || '-';

      const modal = $(this);
      modal.find('#modal-id').val(id);
      modal.find('#modal-status').val(status);
      modal.find('#fu-nama').text(fu);
      modal.find('#fu-waktu').text(waktu);
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
