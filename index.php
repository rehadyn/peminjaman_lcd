<?php
// Include file koneksi.php dari folder root
include $_SERVER['DOCUMENT_ROOT'] . '/koneksi.php';

function getStatus($kode, $conn)
{
    // Query untuk mendapatkan data peminjaman proyektor dengan kode tertentu yang belum di-checkout
    $sql = "SELECT * FROM tb_peminjaman_prj WHERE kode = ? AND tanggal_out IS NULL AND jam_out IS NULL ORDER BY tanggal_in DESC, jam_in DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $kode);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();

    // Menentukan status berdasarkan data yang diambil
    if ($data) {
        return "Digunakan";
    } else {
        return "Tersedia";
    }
}

$proyektors = ['Proyektor 1', 'Proyektor 2', 'Proyektor 3'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Status Proyektor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .status-tersedia {
            background-color: #d4edda;
            color: #155724;
        }

        .status-digunakan {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
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
        <h1 class="text-center">Status Proyektor</h1>
        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-primary mr-2" onclick="window.location.href='checkin.php'">Check In</button>
            <button class="btn btn-warning " onclick="window.location.href='checkout.php'">Check Out</button>
        </div>
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Kode Proyektor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyektors as $proyektor) : ?>
                    <tr class="<?php echo getStatus($proyektor, $conn) == 'Tersedia' ? 'status-tersedia' : 'status-digunakan'; ?>">
                        <td><?php echo $proyektor; ?></td>
                        <td><?php echo getStatus($proyektor, $conn); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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

<?php
// Menutup koneksi
$conn->close();
?>