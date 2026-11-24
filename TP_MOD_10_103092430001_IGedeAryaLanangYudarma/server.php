<?php
header("Content-Type: text/plain; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo "Metode tidak diizinkan.";
    exit;
}

$nama = isset($_POST["nama"]) ? trim($_POST["nama"]) : "";

if ($nama === "") {
    http_response_code(400);
    echo "Input nama tidak boleh kosong!";
    exit;
}

echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "! Selamat datang di AJAX!";