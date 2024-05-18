<?php
// Include file koneksi.php dari folder root
include $_SERVER['DOCUMENT_ROOT'] . '/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $angkatan = $_POST['angkatan'];
    $nim = $_POST['nim'];
    $wa = $_POST['wa'];
    $kelas = $_POST['kelas'];
    $matakuliah = $_POST['matakuliah'];
    $dosen = $_POST['dosen'];
    $merk = $_POST['merk'];
    $kode = $_POST['kode'];
    $kelengkapan = isset($_POST['kelengkapan']) ? implode(",", $_POST['kelengkapan']) : '';
    $tanggal_in = date("Y-m-d");
    $jam_in = date("H:i");

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("INSERT INTO tb_peminjaman_prj (nama, angkatan, nim, wa, kelas, matakuliah, dosen, merk, kode, kelengkapan, tanggal_in, jam_in) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $nama, $angkatan, $nim, $wa, $kelas, $matakuliah, $dosen, $merk, $kode, $kelengkapan, $tanggal_in, $jam_in);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
}

// Menutup koneksi
$conn->close();
