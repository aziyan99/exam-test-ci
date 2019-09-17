<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/DataTables/datatables.min.css'); ?>">
    <script src="<?= base_url('assets/jquery/jquery.js'); ?>"></script>
    <script defer src="<?= base_url('assets/icon/friconix.js'); ?>"></script>
    <script src="<?= base_url('assets/DataTables/datatables.min.js') ?>"></script>
    <title>Mlima</title>
</head>

<body class="bg-light">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="#">MLIMA</a>
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= base_url('adm/keluar'); ?>">Keluar</a>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="row mt-5">
            <div class="col-lg-3 col-md-3 col-xs-3 mt-5">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <i class="fi-cnsux4-home-small-solid"></i><br>
                        <a class="text-dark" href="<?= base_url('dashboard'); ?>">Dashboard</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3 mt-5">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <i class="fi-cnsux4-team-solid"></i><br>
                        <a class="text-dark" href=" <?= base_url('peserta') ?>">Peserta</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3 mt-5">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <i class="fi-cnsux4-pen"></i><br>
                        <a class="text-dark" id="soal" href="<?= base_url('soal') ?>">Soal</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-3 mt-5">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <i class="fi-xwsux4-envelope-solid"></i><br>
                        <a class="text-dark" href="<?= base_url('dashboard/hasil'); ?>">Hasil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div class="container mt-3">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-body" id="main">