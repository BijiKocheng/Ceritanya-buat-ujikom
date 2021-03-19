<?php @session_start(); ?>
<?php include "../../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://<?= $server; ?>assets/bootstrap/css/bootstrap.css">


    <link rel="stylesheet" type="text/css" href="http://<?= $server; ?>assets/datatable/Buttons-1.6.5/css/buttons.bootstrap4.min.css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.css"/>

    <title>Document</title>
</head>
<body>

<div class="container py-3">
    <div class="row">
        <div class="col-md-3">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white">
                    Akses cepat
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="index.php">Halaman utama</a></li>
                    <li class="list-group-item"><a href="verifikasi_masyarakat.php">Verifikasi akun masyarakat</a></li>
                <?php if($_SESSION['level'] == "admin") : ?>
                    <li class="list-group-item"><a href="list_petugas.php">List petugas</a></li>
                <?php endif; ?>
                    <li class="list-group-item"><a href="list_pengaduan.php">List pengaduan</a></li>
                    <li class="list-group-item"><a href="list_tanggapan.php">Tanggapan</a></li>
                    <li class="list-group-item"><a href="http://<?= $server; ?>config/auth.php?logout=petugas" onclick="return confirm('Apa anda yakin ingin keluar?')">Logout</a></li>
                </ul>
            </div>
            <!-- end card -->
        </div>
        <!-- end col sidebar -->

