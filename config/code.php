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

    $cate_query = "INSERT INTO pengaduan (nama, email, tanggal, lokasi, alamat, kategori, aduan) VALUES ('$nama', '$email', '$tanggal', '$lokasi', '$alamat', '$kategori', '$aduan')";

    $cate_query_run = mysqli_query($conn, $cate_query);

        if($cate_query_run){
            redirect("./../index.php", "Berhasil Menambahkan pengaduan");

        }else{
            redirect("./../index.php", "Something went wrong");
        }
}
