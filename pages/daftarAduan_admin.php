<?php include('../functions/myFunctions.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aduan</title>
    <link rel="stylesheet" href="../assets/css/admin_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* CSS untuk Tombol Sukses */
.btn-success {
    color: #fff; 
    background-color: #28a745; 
    border-color: #28a745; 
}

.btn-success:hover {
    color: #fff;
    background-color: #218838; 
    border-color: #1e7e34; 
}

/* CSS untuk Tombol Peringatan */
.btn-warning {
    color: #212529; 
    background-color: #ffc107; 
    border-color: #ffc107; 
}

.btn-warning:hover {
    color: #212529;
    background-color: #e0a800; 
    border-color: #d39e00; 
}

/* CSS untuk Tombol Bahaya */
.btn-danger {
    color: #fff; 
    background-color: #dc3545; 
    border-color: #dc3545; 
}

.btn-danger:hover {
    color: #fff;
    background-color: #c82333; 
    border-color: #bd2130; 
}

/* CSS Umum untuk Semua Tombol */
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

    </style>
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
            <tbody >
                     <?php
                        $aduan = getAll("pengaduan");
                        if (mysqli_num_rows($aduan) > 0) {
                            foreach ($aduan as $item) {
                        ?>

                        <tr>
                                    <td><?= $item['id']; ?></td>
                                    <td><?= $item['tanggal']; ?></td>
                                    <td><?= $item['aduan']; ?></td>
                                    
                                    <td>
                                        <?php
                                        if ($item['status'] == 1) {
                                            echo '<p class="status-belum-diproses">pending</p>';
                                        } else if ($item['status'] == 2) {
                                            echo '<p class="status-diproses">diproses</p>';
                                        } else {
                                            echo '<p class="status-selesai">selesai</p>';
                                        }
                                        ?>
                                    </td>

                                    <td>
                                        <form method="POST" action="./../config/code.php">
                                            <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                            <button type="submit" name="update_status_pending" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button>
                                            <button type="submit" name="update_status_proses" class="btn btn-warning"><i class="fa-solid fa-spinner"></i></button>
                                            <button type="submit" name="update_status_done" class="btn btn-success"><i class="fa-solid fa-check"></i></button>
                                        </form>
                                    </td>
                                    

                                </tr>

                                <?php
                            }
                        } else {
                            echo "No records Found";
                        }
                        ?>
            </tbody>
        </table>
    </div>

    <div class="back-dashboard">
        <a href="./admin_dashboard.php">Kembali</a>
    </div>

    <script>
      
    </script>
</body>
</html>
