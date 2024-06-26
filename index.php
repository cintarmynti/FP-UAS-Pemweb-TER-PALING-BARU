<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdmasPro - Portal Aduan Masyarakat Probolinggo</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
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
                <a href="./cekaduan.php">Cek Aduan</a>
            </div>
        </div>
    </header>

    <main>
        <section id="form-section">
            <section id="mode-selection" class="flex-container">
                <h2>Pilih Mode</h2>
                <div class="radio-container">
                    <input type="radio" id="mode-anonim" name="mode" value="anonim">
                    <label for="mode-anonim" class="radio-label">Anonim</label>
                    <input type="radio" id="mode-tidak-anonim" name="mode" value="tidak_anonim" checked>
                    <label for="mode-tidak-anonim" class="radio-label">Tidak Anonim</label>
                </div>
            </section>
            <h2>Kirim Ajuan</h2>
            <br>
            <form id="aduanForm1" action="./config/code.php" method="POST">
                <div class="form-group">
                    <label for="judul">Judul :</label>
                    <input type="text" id="judul" name="judul" placeholder="Judul Aduan" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama :</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Email Anda" >
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal :</label>
                    <input type="date" id="tanggal" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi :</label>
                    <select id="lokasi" name="lokasi" required>
                        <option value="kademangan">Kademangan</option>
                        <option value="kedopok">Kedopok</option>
                        <option value="kanigaran">Kanigaran</option>
                        <option value="wonoasih">Wonoasih</option>
                        <option value="mayangan">Mayangan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat Lengkap :</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori :</label>
                    <select id="kategori" name="kategori" required>
                        <option value="infrastruktur">Infrastruktur</option>
                        <option value="lingkungan">Lingkungan</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="pendidikan">Pendidikan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="aduan">Aduan :</label>
                    <textarea id="aduan" name="aduan" placeholder="Isi Aduan Anda" required></textarea>
                </div>

                <button type="submit" name="tambah_pengaduan_btn">Kirim</button>
            </form>
        </section>

        <section id="process-section">
            <h2>Proses Pengajuan Aduan</h2>
            <div class="card-container">
                <div class="process-card">
                    <img src="./Image/1.png" alt="Mengisi Form" class="nomor">
                    <h3>Mengisi Form</h3>
                    <p>Pengguna mengisi form dengan informasi lengkap dan mengirimkannya.</p>
                </div>
                <div class="process-card">
                    <img src="./Image/2.png" alt="Aduan Diterima">
                    <h3>Aduan Diterima</h3>
                    <p>Aduan diterima oleh sistem dan akan diverifikasi oleh petugas terkait.</p>
                </div>
                <div class="process-card">
                    <img src="./Image/3.png" alt="Aduan Ditindaklanjuti">
                    <h3>Aduan Ditindaklanjuti</h3>
                    <p>Aduan yang sudah diverifikasi akan ditindaklanjuti sesuai dengan kategori dan urgensinya.</p>
                </div>
                <div class="process-card">
                    <img src="./Image/4.png" alt="Selesai">
                    <h3>Selesai</h3>
                    <p>Setelah aduan ditindaklanjuti dan masalah terselesaikan, pengguna akan mendapatkan pemberitahuan
                        bahwa aduan telah selesai diproses.</p>
                </div>
            </div>
        </section>

        <br>
        <br>

        <hr>

        <br>
        <br>

        <section class="contact-section" id="contact">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <h2>HUBUNGI KAMI</h2>
                    <h5>Hubungi kami apabila Anda membutuhkan bantuan lebih lanjut</h5>
                    <br>
                    <div class="address">
                        <ul style="list-style-type: none; padding: 0;">
                            <li style="display: flex; align-items: center; margin-bottom: 20px;">
                                <div class="icon" style="margin-right: 10px;">
                                    <i>
                                        <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAASNJREFUWEftl+kNwjAMhd1NYBNGgUmASYBJYBPYBHhIrkwg+EgqFcn5Q4VzPH8+mg40szHMTA+lIC0iSShCaEtEayJaaIsb7bfnGUciOj3Pw/NrlCGDmF3jQd7lOG9fE3T37tZp/gimJCQFAeNUYbsQ0Uo4YxKESVPkE4dIOm8WBCfgyaEDLVBBruAXIyyIybbQekvcqCCUJDwaSzJAq6TCzp0jOYTFELMRmD20vlGphd+UQ7KiPbSsVOT+bkFWWh4qzYJ4gxot2LmCarlS66MhQnKzWm7xHG+raBb0i1ZZQZa3SzdBMrfwHG2gXQVZCGhzUlAS0gho9v/JoWuHe49Go7SjyS75z9lf8rm5ofVPdZ+WhD5exvnlqiVYEkpCGgHN/gCTgk0lSNWpzAAAAABJRU5ErkJggg==" />
                                    </i>
                                </div>
                                <div class="informasi">
                                    <h5>Email:</h5>
                                    <span>diskominfo@probolinggokota.go.id</span>
                                </div>
                            </li>
                            <li style="display: flex; align-items: center;">
                                <div class="icon" style="margin-right: 10px;">
                                    <i>
                                        <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAg1JREFUWEfdmP1NAzEMxd1JKJNAJwEmASYBJimdBNiEPuneyfXZjnPNH6dGQoI25/z8/BEfO9nY2m2MR24e6FVEnifVv0XkJCKfPVGoKrQ/H/RbMAygN7MPzwHuvWKjBfQoIsfJEDyF0Wx5QNwPsKaNDAjSf5jT4X0GBSWx4MjDGQB/43e9UhsRUORpyUsDAMdgj7D4Gkq9eFJ7QJ4y+llAwRjyoroA82Tyy1XKA8ryQOeDB0U1CGsTGSnAKnQdWwsEMBg8mMqxztgQQykUCcO3CN2akNnw3asPInWhJvsRK5dO6efdTq0fqOQIDOoeBe/xAzhWmFUTKvE7qDzno6cQjP1USCZDMOgt2EHO8GCdxFpJwMw2orLXHkRsF4aCTVptvT8MW28f4rkVGOzVaiNszJfo8/C2z/KoCkN4hAfrTyU2+xL3zN0/UsiWp47IRRIWc628rfcuS9t++dRkYwYUVVvP1VEdW2bE1vgR3Ws6QSN/WaleRw81agHZXqINhTf2dD3osaMM1QKypWs98w6Kelgp1BUgQGQjCUfUL3NdeGFpzlNVIBivjCWVQkuheoBGQsFWeUBreTlSqcWQ16sQYbNO3nJIf784fy0Qq8/OyT0w7hV0DZBWC2CoRP1mkcGF9+EIIA3GW9x7H+O+Ve9lPdJHeznKUrU7M4K4z41UaIQTt//vmKtV2lzI/gFsJIAljveaXwAAAABJRU5ErkJggg==" />
                                    </i>
                                </div>
                                <div class="informasi">
                                    <h5>Telp:</h5>
                                    <span>(033) 5429106</span>
                                </div>
                            </li>
                            <li style="display: flex; align-items: center; margin-top : 10px ">
                                <div class="icon" style="margin-right: 10px">
                                    <i>
                                        <img
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAUFJREFUWEftl+ERATEQhd91Qid0QiWoBJXQCZ3gGZlxmexmk5XMjbn9yZLPy7u3a8DEapgYD/4SaAHg+FF6C+DuUd2rEGFuXwCEWXugPEBBmVWkiAvKA3QBEMMEtiuAquurBdJgAtQewLn0+mqAaOCN0biEOhh7322lQLvXh3hISRVBlQBRlfB4lwCx1wxlBaJ56RtP0eSn3BdYgH4BEziWOZPngOLgy/1Ay/sqlAbUAobAanBKQFIKWxSw9IhQEpAl+CwHaz3JNE8B9YAR0zwGqgk+r1KjjIqBuErQPz2LfuKTlxwdVIiJ3BNqFJi5HGpxheoYmYFyg/bvFJJ2I21nauohSeGHkhszEMWZFZKSPrzeTCFtsR/NoMjE2kx0mZozjetIarZpS7s0E7kD8b+/WLlg7Dn1k9O+O0B84OQUegKXVk4l0CFUWwAAAABJRU5ErkJggg==" />
                                    </i>
                                </div>
                                <div class="informasi">
                                    <h5>Address:</h5>
                                    <span>Jl. Hayam Wuruk No.69, Mangunharjo, Kec. Mayangan, Kota Probolinggo,
                                        Jawa Timur 87217</span>
                                </div>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <br>
    </main>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script src="./assets/scripts/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    <?php
    // Periksa apakah ada pesan dalam URL
    if(isset($_GET['message'])) {
        ?>
        alertify.set('notifier','position', 'top-right');
        alertify.success('<?php echo htmlspecialchars($_GET['message']); ?>');
        <?php
    }
    ?>
});
    </script>

</body>

</html>