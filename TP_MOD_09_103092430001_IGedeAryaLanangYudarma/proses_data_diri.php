<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_tp_mod_09';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Koneksi MySQL gagal: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS `$db`");
$conn->select_db($db);

$conn->query("CREATE TABLE IF NOT EXISTS data_diri (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    hobi VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)");

$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
$tanggal_lahir_input = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '';
$hobi_input = isset($_POST['hobi']) ? $_POST['hobi'] : [];

$tanggal_lahir_format = '';
if (!empty($tanggal_lahir_input)) {
    $bulan_indo = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];

    $pecah = explode('-', $tanggal_lahir_input);
    if (count($pecah) === 3) {
        $tahun   = $pecah[0];
        $bulan   = (int)$pecah[1];
        $tanggal = (int)$pecah[2];

        $tanggal_lahir_format = $tanggal . ' ' . $bulan_indo[$bulan] . ' ' . $tahun;
    }
}

if (!empty($hobi_input) && is_array($hobi_input)) {
    $hobi_tampil = implode(', ', array_map('htmlspecialchars', $hobi_input));
} else {
    $hobi_tampil = 'Tidak ada hobi yang dipilih';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($nama) && !empty($tanggal_lahir_input)) {
    $stmt = $conn->prepare("INSERT INTO data_diri (nama_lengkap, tanggal_lahir, hobi) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nama, $tanggal_lahir_input, $hobi_tampil);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            padding-top: 50px;
            margin: 0;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            padding: 24px 28px;
            width: 420px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        h2 {
            margin-top: 0;
            margin-bottom: 14px;
            padding-bottom: 12px;
            border-bottom: 1px solid #eee;
            font-size: 22px;
            color: #111;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        td {
            padding: 8px 0;
            vertical-align: middle;
            font-size: 14px;
            color: #222;
        }
        td.label {
            font-weight: bold;
            width: 125px;
            padding-right: 10px;
        }
        .back-link {
            display: inline-block;
            color: #0d6efd;
            text-decoration: none;
            font-size: 13px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Tampilan Data Anda</h2>
    <table>
        <tr>
            <td class="label">Nama<br>Lengkap:</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir:</td>
            <td><?= $tanggal_lahir_format; ?></td>
        </tr>
        <tr>
            <td class="label">Hobi:</td>
            <td><?= $hobi_tampil; ?></td>
        </tr>
    </table>

    <a href="form_data_diri.html" class="back-link">« Kembali ke Form</a>
</div>

</body>
</html>