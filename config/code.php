<?php
session_start();
include('../config/dbcon.php');
include('../functions/myfunctions.php');
if (isset($_POST['tambah_pengaduan_btn'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamat'];
    $kategori = $_POST['kategori'];
    $aduan = $_POST['aduan'];
    $random_number = rand(10000, 99999);
    $no_aduan = "ADN".$random_number;

    $cate_query = "INSERT INTO pengaduan (no_aduan, nama, email, tanggal, lokasi, alamat, kategori, aduan) VALUES ('$no_aduan', '$nama', '$email', '$tanggal', '$lokasi', '$alamat', '$kategori', '$aduan')";

    $cate_query_run = mysqli_query($conn, $cate_query);

        if($cate_query_run){
            redirect("./../index.php", "Berhasil Menambahkan pengaduan");

        }else{
            redirect("./../index.php", "Something went wrong");
        }
}else if (isset($_POST['update_status_proses'])) {
    $id = $_POST['id'];
    global $conn;
    $query = "UPDATE pengaduan SET status = 2 WHERE id = $id";
    $query_run = mysqli_query($conn, $query);

    if (!$query_run) {
        die("Query error: " . mysqli_error($conn));
    }

    redirect("./../pages/daftarAduan_admin.php", "Berhasil Mengubah status");

} else if (isset($_POST['update_status_done'])) {
    $id = $_POST['id'];
    global $conn;
    $query = "UPDATE pengaduan SET status = 3 WHERE id = $id";
    $query_run = mysqli_query($conn, $query);

    if (!$query_run) {
        die("Query error: " . mysqli_error($conn));
    }

    redirect("./../pages/daftarAduan_admin.php", "Berhasil Mengubah status");

} else if (isset($_POST['update_status_pending'])) {
    $id = $_POST['id'];
    global $conn;
    $query = "UPDATE pengaduan SET status = 1 WHERE id = $id";
    $query_run = mysqli_query($conn, $query);

    if (!$query_run) {
        die("Query error: " . mysqli_error($conn));
    }

    redirect("./../pages/daftarAduan_admin.php", "Berhasil Mengubah status");
    
}