<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
        }
        p {
            font-size: 18px;
        }
        .date {
            margin-top: 20px;
            font-weight: bold;
        }
        .greeting {
            margin-top: 20px;
            padding: 10px;
            background: #e7f5e9;
            border-left: 5px solid #4CAF50;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hallo!</h1>
        <p>Nama saya <strong>Yeremia Ginting</strong> dari <strong>Universitas Pendidikan Ganesha</strong></p>
        <div class="date">
            <?php
                echo "Sekarang tanggal " . date('d F Y');
            ?>
        </div>
        <div class="greeting">
            <?php
                // Menampilkan ucapan selamat berdasarkan waktu
                date_default_timezone_set('Asia/Makassar'); // Set timezone sesuai kebutuhan
                $jam = date('H');
                
                if ($jam >= 5 && $jam < 11) {
                    echo "Selamat Pagi!";
                } elseif ($jam >= 11 && $jam < 15) {
                    echo "Selamat Siang!";
                } elseif ($jam >= 15 && $jam < 18) {
                    echo "Selamat Sore!";
                } else {
                    echo "Selamat Malam!";
                }
            ?>
        </div>
    </div>
</body>
</html>
