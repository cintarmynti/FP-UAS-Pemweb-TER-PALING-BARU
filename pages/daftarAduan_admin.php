<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aduan</title>
    <link rel="stylesheet" href="../assets/css/admin_style.css">
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
            </div>
        </div>
    </header>

    <br>
    <br>
    
    <div class="container">
        <h1>Daftar Aduan</h1>
        <table class="aduan-table" id="aduanTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Judul</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody id="aduanBody">
                <!-- Data aduan akan diisi di sini -->
            </tbody>
        </table>
    </div>

    <div class="back-dashboard">
        <a href="./admin_dashboard.php">Kembali</a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dataAduan = [
                { id: '001', tanggal: '2024-06-01', judul: 'Jalan Rusak', status: 'Diproses' },
                { id: '002', tanggal: '2024-06-02', judul: 'Lampu Jalan Mati', status: 'Selesai' },
                { id: '003', tanggal: '2024-06-03', judul: 'Sampah Menumpuk', status: 'Belum Diproses' }
            ];

            const aduanBody = document.getElementById('aduanBody');
            dataAduan.forEach(aduan => {
                const row = document.createElement('tr');
                let statusClass = '';
                switch (aduan.status) {
                    case 'Diproses':
                        statusClass = 'status-diproses';
                        break;
                    case 'Belum Diproses':
                        statusClass = 'status-belum-diproses';
                        break;
                    case 'Selesai':
                        statusClass = 'status-selesai';
                        break;
                    default:
                        statusClass = '';
                        break;
                }

                row.innerHTML = `
                    <td>${aduan.id}</td>
                    <td>${aduan.tanggal}</td>
                    <td>${aduan.judul}</td>
                    <td class="${statusClass}">${aduan.status}</td>
                    <td><a href="detailAduan_admin.php?id=${aduan.id}">Lihat</a></td>
                `;
                aduanBody.appendChild(row);
            });
        });
    </script>
</body>
</html>
