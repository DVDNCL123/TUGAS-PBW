<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .box {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 20px;
        }
        .code-box {
            background-color: #000;
            color: #fff;
            padding: 10px;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
    <div class="box">
        <form method="post" action="">
            Nama: <input type="text" name="nama"><br>
            Nilai: <input type="number" name="nilai"><br>
            <input type="submit" value="Proses">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

        // Validasi nilai
        if ($nilai < 0 || $nilai > 100) {
            $predikat = "Tidak valid";
            $status = "Tidak Lulus";
        } else {
            // Tentukan predikat berdasarkan rentang nilai
            if ($nilai >= 85) {
                $predikat = "A";
                $status = "Lulus";
            } elseif ($nilai >= 75) {
                $predikat = "B";
                $status = "Lulus";
            } elseif ($nilai >= 65) {
                $predikat = "C";
                $status = "Lulus";
            } elseif ($nilai >= 50) {
                $predikat = "D";
                $status = "Tidak Lulus";
            } else {
                $predikat = "E";
                $status = "Tidak Lulus";
            }
        }

        // Tampilkan hasil
        echo '<div class="box">';
        echo '<h3>Luaran yang diharapkan</h3>';
        echo "Nama: $nama<br>";
        echo "Nilai: $nilai<br>";
        echo "Predikat: $predikat<br>";
        echo "Status: $status";
        echo '</div>';
    }
    ?>
</body>
</html>
