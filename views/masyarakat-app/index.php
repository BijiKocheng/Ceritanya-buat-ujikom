<?php include "templates/dashboard/header.php"; ?>
<?php include "../../config/auth.php"; ?>
<?php include "../../config/status_laporan.php"; ?>

<?php 

    if (!isset($_SESSION['username'])) {
        header("location: login.php");
    }

    if ($_SESSION['status'] == "tidak") {
        header("location: login.php?pesan=aktif");
        session_destroy();
    }

    $nik = $_SESSION['nik'];

?>

<div class="col">

    <!-- Start div Jumbotron -->
    <div class="jumbotron bg-success text-white">
        <div class="container">
            <h1 class="display-4">Selamat datang <?= $_SESSION['username']; ?></h1>
            <p class="lead">Selamat datang <?= $_SESSION['nama']; ?>, Ini adalah halaman utama dari website pengaduan masyarakat.</p>
        </div>
    </div>
    <!-- End div jumbotron -->
    <!-- Start div info card -->
    <div class="row">
        <div class="col-md-6">
            <div class="card border-info">
                <div class="card-header bg-info text-white">
                    Status laporan
                </div>
                <div class="card-body">
                    <p class="card-text">Belum di proses : <?= belumProses($nik); ?></p>
                    <p class="card-text">Sedang di proses : <?= sedangProses($nik); ?></p>
                    <p class="card-text">Sudah di proses : <?= sudahProses($nik); ?></p>
                    <p class="card-text">Total Laporan : <?= totalProses($nik); ?></p>
                </div>
            </div>
        </div>
    </div> 
    <!-- End div info card -->
</div>


<?php include "templates/dashboard/footer.php"; ?>