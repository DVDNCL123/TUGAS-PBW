    <!DOCTYPE html>
    <html>
    <head>
        <title>Latihan Soal</title>
    </head>
    <body>
        <h1>Latihan Soal PHP</h1>
        <nav>
            <a href="?page=T7_no1">Soal 1</a> |
            <a href="?page=T7_no2">Soal 2</a> |
            <a href="?page=T7_no3">Soal 3</a> |
            <a href="?page=T7_no4">Soal 4</a>
        </nav>
        <hr>
        <div>
            <?php
            if (isset($_GET['page'])) {
                $file = $_GET['page'] . '.php';
                if (file_exists($file)) {
                    include $file;
                } else {
                    echo "<p>File tidak ditemukan.</p>";
                }
            } else {
                echo "<p>Silakan pilih soal dari menu di atas.</p>";
            }
            ?>
        </div>
    </body>
    </html>