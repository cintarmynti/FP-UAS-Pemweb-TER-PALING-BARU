<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmasPro - Admin Dashboard</title>
    <link rel="stylesheet" href="./../assets/css/admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-left">
                <img src="./../Image/Logo Kota Probolinggo.png" class="header-img" alt="Logo Kota Probolinggo">
                <h1>AdMas-Pro</h1>
                <p>Portal Aduan Masyarakat Probolinggo</p>
            </div>
            <div class="header-right">
                <span class="admin-label">Administrator</span>
                <button class="logout-button"><a href="../pages/loginadmin.php">Logout</a></button>
            </div>
        </div>
    </header>
    
    <main>
        <section class="dashboard">
            <div class="dashboard-box" onclick="location.href='../pages/daftarAduan_admin.php';">
                <img src="./../assets/img/aduan_masuk.png" alt="Logo" class="box-logo">
                <img src="./../assets/img/aduan_masuk_hover.png" alt="Logo Hover" class="box-logo-hover">
                <h2>Aduan Masuk</h2>
            </div>
            <div class="dashboard-box" onclick="location.href='../pages/history_aduan.php';">
                <img src="./../assets/img/history_aduan.png" alt="Logo" class="box-logo">
                <img src="./../assets/img/history_aduan_hover.png" alt="Logo Hover" class="box-logo-hover">
                <h2>History Aduan</h2>
            </div>
        </section>
    </main>
    
    <script src="./../assets/scripts/Dahhboardadmin.js"></script>
</body>
</html>
