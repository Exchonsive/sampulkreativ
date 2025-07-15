<?php
require '../koneksi.php';
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$type = $_GET['type'] ?? '';
$start = $_GET['start'] ?? '';
$end = $_GET['end'] ?? '';

if (!$type) {
    die('Jenis data tidak valid.');
}

$templatePath = __DIR__ . "/../format_data/{$type}.xlsx";

$spreadsheet = IOFactory::load($templatePath);
$sheet = $spreadsheet->getActiveSheet();
$rowNum = 4;

switch ($type) {
    case 'kontak_agen':
        $sql = "SELECT 
                    k.created_at AS tgl_masuk,
                    k.nama,
                    k.kontak,
                    k.pertanyaan,
                    k.status,
                    f.created_at AS tgl_fu,
                    u.nama AS nama_pic
                FROM kontak_agen k
                LEFT JOIN fu_kontak_agen f ON f.id_kontak_agen = k.id
                LEFT JOIN users u ON u.id = f.id_users";
        if ($start && $end) {
            $sql .= " WHERE k.created_at BETWEEN '$start 00:00:00' AND '$end 23:59:59'";
        }
        $sql .= " ORDER BY k.created_at DESC";
        $result = mysqli_query($conn, $sql);
        $no = 1;
        $sheet->setCellValue("A2", date('d-m-Y', strtotime($start))." - ".date('d-m-Y', strtotime($end)));
        while ($row = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue("A$rowNum", $no++);
            $sheet->setCellValue("B$rowNum", date('d-m-Y H:i', strtotime($row['tgl_masuk'])));
            $sheet->setCellValue("C$rowNum", $row['nama']);
            $sheet->setCellValue("D$rowNum", $row['kontak']);
            $sheet->setCellValue("E$rowNum", $row['status']);
            $sheet->setCellValue("F$rowNum", $row['tgl_fu'] ? date('d-m-Y H:i', strtotime($row['tgl_fu'])) : '-');
            $sheet->setCellValue("G$rowNum", $row['nama_pic'] ?? '-');
            $sheet->setCellValue("H$rowNum", $row['pertanyaan']);
            $rowNum++;
        }
        break;

    case 'chat_logs':
        $sql = "SELECT * FROM chat_logs";
        if ($start && $end) {
            $sql .= " WHERE created_at BETWEEN '$start 00:00:00' AND '$end 23:59:59'";
        }
        $sql .= " ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);
        $no = 1;
        $sheet->setCellValue("A2", date('d-m-Y', strtotime($start))." - ".date('d-m-Y', strtotime($end)));
        while ($row = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue("A$rowNum", $no++);
            $sheet->setCellValue("B$rowNum", date('d-m-Y H:i', strtotime($row['created_at'])));
            $sheet->setCellValue("C$rowNum", $row['pesan']);
            $rowNum++;
        }
        break;

    case 'user_rating':
        $sql = "SELECT * FROM user_rating";
        if ($start && $end) {
            $sql .= " WHERE created_at BETWEEN '$start 00:00:00' AND '$end 23:59:59'";
        }
        $sql .= " ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);
        $no = 1;
        $sheet->setCellValue("A2", date('d-m-Y', strtotime($start))." - ".date('d-m-Y', strtotime($end)));
        while ($row = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue("A$rowNum", $no++);
            $sheet->setCellValue("B$rowNum", date('d-m-Y H:i', strtotime($row['created_at'])));
            $sheet->setCellValue("C$rowNum", $row['nama']);
            $sheet->setCellValue("D$rowNum", $row['rating']);
            $rowNum++;
        }
        break;

    case 'server_issues':
        $sql = "SELECT * FROM chatbot_server_issue";
        if ($start && $end) {
            $sql .= " WHERE created_at BETWEEN '$start 00:00:00' AND '$end 23:59:59'";
        }
        $sql .= " ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);
        $no = 1;
        $sheet->setCellValue("A2", date('d-m-Y', strtotime($start))." - ".date('d-m-Y', strtotime($end)));
        while ($row = mysqli_fetch_assoc($result)) {
            $sheet->setCellValue("A$rowNum", $no++);
            $sheet->setCellValue("B$rowNum", date('d-m-Y H:i', strtotime($row['created_at'])));
            $sheet->setCellValue("C$rowNum", $row['issue']);
            $rowNum++;
        }
        break;

    default:
        die('Jenis data tidak dikenali.');
}

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment;filename=\"{$type}.xlsx\"");
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit();
