<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="./assets/css/cekaduan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .button-status{
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-left">
             <img src="./Image/Logo Kota Probolinggo.png" class="header-img" alt="">
                <h1>AdMas-Pro</h1>
                <p>Portal Aduan Masyarakat Probolinggo</p>
            </div>
            <div class="header-right">
                <a href="./beranda.php">Beranda</a>
                <a href="./index.php">Buat Aduan</a>
            </div>
        </div>
    </header>
    
    <section>
        <div class="form-container">
        <h2>Cek Aduan Anda</h2>
        <form>
            <div class="form-group">
                <label for="nomorAduan">Nomor Aduan</label>
                <input type="text" id="nomorAduan" name="nomorAduan" placeholder="Nomor Aduan">
            </div>
            
            <button type="button"><a class="button-status" id="linkPreview" href="cekaduan_preview.php?nomorAduan=">Cek Detail Pengaduan</a></button>

        </form>
    </div>
    </section>
</body>
    
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var nomorAduanInput = document.getElementById('nomorAduan');
        var linkPreview = document.getElementById('linkPreview');

        nomorAduanInput.addEventListener('input', function() {
            var nomorAduanValue = nomorAduanInput.value;
            console.log(nomorAduanValue);
            linkPreview.href = 'cekaduan_preview.php?nomorAduan=' + nomorAduanValue;
        });
    });
</script>

