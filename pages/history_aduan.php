<?php include('../functions/myFunctions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Aduan - AdmasPro</title>
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>

<body>
    <header>
        <div class="header-container">
            <div class="header-left">
                <h1>History Aduan</h1>
                <p>Riwayat semua aduan yang telah diajukan.</p>
            </div>
            <div class="header-right">
                <a href="./admin_dashboard.php">Kembali ke Dashboard</a>
            </div>
        </div>
    </header>

    <main>
        <section id="history-aduan-section" class="content-section">
            <h2>Riwayat Aduan</h2>
            <br>

            <div class="history-container">
                <?php
                $aduan = getAll("pengaduan");
                if (mysqli_num_rows($aduan) > 0) {
                    foreach ($aduan as $item) {
                        $class = "";
                        if ($item['status'] == 1) {
                            $class = "history-item-1";
                        } elseif ($item['status'] == 2) {
                            $class = "history-item-2";
                        } elseif ($item['status'] == 3) {
                            $class = "history-item-3";
                        }
                ?>
                        <div class="<?= $class; ?>">
                            <h3><?= $item['aduan']; ?></h3>
                            <p>Tanggal: <?= $item['tanggal']; ?></p>
                            <p>Status: 
                            <?php
                                if ($item['status'] == 1) {
                                    echo "Pending";
                                } elseif ($item['status'] == 2) {
                                    echo "Proses";
                                } elseif ($item['status'] == 3) {
                                    echo "Selesai";
                                } else {
                                    echo "Undefined";
                                }
                                ?>
                            </p>
                        </div>
                <?php
                    }
                } else {
                    echo "No records Found";
                }
                ?>
            </div>


        </section>
    </main>
</body>

</html>