<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Aduan</title>
    <link rel="stylesheet" href="detailaduan.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="header-left">
                <img src="Image/Logo Kota Probolinggo.png" class="header-img" alt="Logo Kota Probolinggo">
                <h1>AdMas-Pro</h1>
                <p>Portal Aduan Masyarakat Probolinggo</p>
            </div>
            <div class="header-right">
                <span class="admin-label">Administrator</span>
            </div>
        </div>
    </header>
    <div class="container">
        <h1>Detail Aduan</h1>
        <table class="aduan-details" id="aduanDetails">
            <!-- Detail aduan akan diisi di sini -->
        </table>
        <div class="admin-response">
            <h2>Tanggapan Petugas</h2>
            <form id="responseForm">
                <label for="status">Status:</label>
                <select id="status">
                    <option value="Belum Diproses">Belum Diproses</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
                <label for="response">Tanggapan:</label>
                <textarea id="response" rows="4" placeholder="Masukkan tanggapan..."></textarea>
                <button  type="submit" >Simpan Tanggapan</button>
                <div class="back-dashboard">
                    <a href="daftarAduan_admin.html">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            const aduanId = urlParams.get('id');
            fetch(`/getAduanDetail?id=${aduanId}`)
                .then(response => response.json())
                .then(aduan => {
                    const aduanDetails = document.getElementById('aduanDetails');
                    aduanDetails.innerHTML = `
                        <tr><th>ID</th><td>${aduan.id}</td></tr>
                        <tr><th>Nama</th><td>${aduan.nama}</td></tr>
                        <tr><th>Judul</th><td>${aduan.judul}</td></tr>
                        <tr><th>Email</th><td>${aduan.email}</td></tr>
                        <tr><th>Tanggal</th><td>${aduan.tanggal}</td></tr>
                        <tr><th>Lokasi</th><td>${aduan.lokasi}</td></tr>
                        <tr><th>Alamat Lengkap</th><td>${aduan.alamat}</td></tr>
                        <tr><th>Kategori</th><td>${aduan.kategori}</td></tr>
                        <tr><th>Isi Aduan</th><td>${aduan.isi}</td></tr>
                    `;
                    document.getElementById('status').value = aduan.status;
                    document.getElementById('response').value = aduan.tanggapan || '';
                })
                .catch(error => console.error('Error fetching aduan detail:', error));
        });

        document.getElementById('responseForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const urlParams = new URLSearchParams(window.location.search);
            const aduanId = urlParams.get('id');
            const status = document.getElementById('status').value;
            const response = document.getElementById('response').value;

            fetch('/updateAduanResponse', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: aduanId, status, response }),
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert('Tanggapan berhasil disimpan.');
                } else {
                    alert('Gagal menyimpan tanggapan.');
                }
            })
            .catch(error => console.error('Error updating aduan response:', error));
        });
    </script>
</body>
</html>
