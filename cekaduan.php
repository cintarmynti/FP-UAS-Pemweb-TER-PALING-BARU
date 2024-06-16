<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="./assets/css/cekaduan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
            <button type="submit">Cek Detail Pengaduan</button>
        </form>
    </div>
    </section>
</body>
    
</html>
