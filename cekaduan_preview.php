<?php 
    include('functions/myFunctions.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aduan</title>
    <link rel="stylesheet" href="./assets/css/cekaduan_preview.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-left">
             <img src="Image/Logo Kota Probolinggo.png" class="header-img" alt="">
                <h1>AdMas-Pro</h1>
                <p>Portal Aduan Masyarakat Probolinggo</p>
            </div>
            <div class="header-right">
                <a href="beranda.html">Beranda</a>
                <a href="index.html">Buat Aduan</a>
            </div>
        </div>
    </header>

    <br>
    <br>
    <?php

    if (isset($_GET['nomorAduan'])) {
        $nomorAduan = $_GET['nomorAduan'];
        $aduan = getByAduan("pengaduan", $nomorAduan);
        if (mysqli_num_rows($aduan) > 0) {
            $data = mysqli_fetch_array($aduan);
    ?>
    <div class="container">
        <div class="aduan-detail-box">
            <h2>Detail Aduan</h2>
            <div class="detail-row">
                <div class="detail-item"><strong>ID / Nomor Aduan:</strong></div>
                <div class="detail-content"><?= $data['no_aduan']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Status Aduan:</strong></div>
                <div class="detail-content"> <?php
                                if ($data['status'] == 1) {
                                    echo "Pending";
                                } elseif ($data['status'] == 2) {
                                    echo "Proses";
                                } elseif ($data['status'] == 3) {
                                    echo "Selesai";
                                } else {
                                    echo "Undefined";
                                }
                                ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Judul Aduan:</strong></div>
                <div class="detail-content"><?= $data['judul']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Nama Pengadu:</strong></div>
                <div class="detail-content"><?= $data['nama']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Email:</strong></div>
                <div class="detail-content"><?= $data['email']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Tanggal Aduan:</strong></div>
                <div class="detail-content"><?= $data['tanggal']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Lokasi:</strong></div>
                <div class="detail-content"><?= $data['lokasi']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Alamat Lengkap:</strong></div>
                <div class="detail-content"><?= $data['alamat']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Kategori:</strong></div>
                <div class="detail-content"><?= $data['kategori']; ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-item"><strong>Isi / Deskripsi Aduan:</strong></div>
                <div class="detail-content"><?= $data['aduan']; ?></div>
            </div>
        </div>
    </div>
    
    <?php
                    } else {
                        echo "detail not found";
                    }
                } else {
                    echo "id missing from ur url";
                }

                ?>
    <div class="back-dashboard">
        <a href="./cekaduan.php">Kembali</a>
    </div>
</body>
</html>
