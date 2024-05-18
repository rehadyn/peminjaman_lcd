<?php
// Include file koneksi.php dari folder root
include $_SERVER['DOCUMENT_ROOT'] . '/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama']; // Nama baru, tidak digunakan dalam query
    $kode = $_POST['kode'];
    $kelengkapan = isset($_POST['kelengkapan']) ? implode(",", $_POST['kelengkapan']) : '';
    $tanggal_out = date("Y-m-d");
    $jam_out = date("H:i");

    // Menggunakan prepared statement untuk update record di database
    $stmt = $conn->prepare("UPDATE tb_peminjaman_prj SET tanggal_out = ?, jam_out = ?, kelengkapan = ? WHERE kode = ? AND tanggal_out IS NULL AND jam_out IS NULL");
    $stmt->bind_param("ssss", $tanggal_out, $jam_out, $kelengkapan, $kode);

    if ($stmt->execute()) {
        echo "Data check-out berhasil diperbarui";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
