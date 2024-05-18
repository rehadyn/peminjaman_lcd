<?php

date_default_timezone_set('Asia/Makassar'); // Ganti dengan zona waktu lokal Anda

// Ambil tanggal dan waktu dari server
$date = date("Y-m-d");
$time = date("H:i");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Check OUT Peminjaman Proyektor</title>
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
        <h1 class="text-center">Check OUT Peminjaman Proyektor</h1>
        <form method="POST" action="prosesout.php">
            <h2 class="mt-4">Form Informasi Proyektor</h2>
            <!-- nama -->
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
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
                <label for="tanggal_out">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal_out" name="tanggal_out" value="<?php echo $date; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="jam_out">Jam:</label>
                <input type="time" class="form-control" id="jam_out" name="jam_out" value="<?php echo $time; ?>" disabled>
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