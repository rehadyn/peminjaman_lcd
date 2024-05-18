<?php

date_default_timezone_set('Asia/Makassar'); // Ganti dengan zona waktu lokal Anda

// Ambil tanggal dan waktu dari server
$date = date("Y-m-d");
$time = date("H:i");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Check IN Peminjaman Proyektor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="https://ipkh.rehad.id/tamu/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- End of Navbar -->
</header>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Check IN Peminjaman Proyektor</h1>
        <form method="POST" action="prosesin.php">
            <h2 class="mt-4">Form Data Peminjam</h2>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="angkatan">Angkatan:</label>
                <!-- <input type="text" class="form-control" id="angkatan" name="angkatan" required> -->
                <!-- dropdown -->
                <select class="form-control" id="angkatan" name="angkatan" required>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="form-group">
                <label for="wa">Nomor Whatsapp:</label>
                <input type="text" class="form-control" id="wa" name="wa" required>
            </div>

            <h2 class="mt-4">Form Informasi Kelas</h2>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <!-- <input type="text" class="form-control" id="kelas" name="kelas" required> -->
                <!-- dropdown -->
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="Kelas A">Kelas A</option>
                    <option value="Kelas B">Kelas B</option>
                    <option value="Kelas C">Kelas C</option>
                    <option value="Kelas D">Spesialis</option>
                </select>
            </div>
            <div class="form-group">
                <label for="matakuliah">Mata Kuliah:</label>
                <input type="text" class="form-control" id="matakuliah" name="matakuliah" required>
            </div>
            <div class="form-group">
                <label for="dosen">Dosen:</label>
                <!-- <input type="text" class="form-control" id="dosen" name="dosen" required> -->
                <!-- dropdown -->
                <select class="form-control" id="dosen" name="dosen" required>
                    <option value="Pak A">Pak A</option>
                    <option value="Pak B">Pak B</option>
                    <option value="Pak C">Pak C</option>
                    <option value="Pak D">Pak D</option>
                    <option value="Pak E">Pak E</option>
                </select>
            </div>
            <h2 class="mt-4">Form Informasi Proyektor</h2>
            <div class="form-group">
                <label for="merk">Merk:</label>
                <input type="text" class="form-control" id="merk" name="merk" required>
            </div>
            <div class="form-group">
                <label for="kode">Kode:</label>
                <!-- <input type="text" class="form-control" id="kode" name="kode" required> -->
                <!-- dropdown -->
                <select class="form-control" id="kode" name="kode" required>
                    <option value="Proyektor 1">Proyektor 1</option>
                    <option value="Proyektor 2">Proyektor 2</option>
                    <option value="Proyektor 3">Proyektor 3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelengkapan">Kelengkapan:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="hdmi" name="kelengkapan" value="HDMI">
                    <label class="form-check-label" for="hdmi">HDMI</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="kabelListrik" name="kelengkapan" value="Kabel Listrik">
                    <label class="form-check-label" for="kabelListrik">Kabel Listrik</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="converter" name="kelengkapan" value="converter">
                    <label class="form-check-label" for="converter">Converter</label>
                </div>
            </div>
            <div class="form-group">
                <label for="tanggal_in">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal_in" name="tanggal_in" value="<?php echo $date; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="jam_in">Jam:</label>
                <input type="time" class="form-control" id="jam_in" name="jam_in" value="<?php echo $time; ?>" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <br><br>


    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
<footer>
    <!-- with love -->
    <div class="text-center mt-5">
        <p>Created with <span style="color: #e25555;">&hearts;</span> by <a href="https://rehad.id/">Reza Hadiwijaya Dynasti</a></p>
</footer>

</html>