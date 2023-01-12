<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SisFo PonPes</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">





    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SISFO Sekolah</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../login/logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../admin/jadwal.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../program/data_program.php">
                                <span data-feather="file"></span>
                                Data program
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../mahasiswa/data_siswa.php">
                                <span data-feather="shopping-cart"></span>
                                Data Mahasiswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../dosen/data_dosen.php">
                                <span data-feather="shopping-cart"></span>
                                Data Dosen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../identitas/data_identitas.php">
                                <span data-feather="shopping-cart"></span>
                                Data Identitas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../jadwal/data_jadwal.php">
                                <span data-feather="file-text"></span>
                                Data Jadwal
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Jurusan/data_jurusan.php">
                                <span data-feather="file-text"></span>
                                Data Jurusan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kalender/data_kalender.php">
                                <span data-feather="file-text"></span>
                                Data Kalender
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../krs/data_krs.php">
                                <span data-feather="file-text"></span>
                                Data Krs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kurikulum/data_kurikulum.php">
                                <span data-feather="file-text"></span>
                                Data Kurikulum
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../matakuliah/data_matakuliah.php">
                                <span data-feather="file-text"></span>
                                Data Matakuliah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../nilai/data_nilai.php">
                                <span data-feather="file-text"></span>
                                Data Nilai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../registrasi/data_registrasi.php">
                                <span data-feather="file-text"></span>
                                Data Registrasi
                            </a>
                        </li>
                       
                    </ul>

                    </ul>
                </div>
            </nav>