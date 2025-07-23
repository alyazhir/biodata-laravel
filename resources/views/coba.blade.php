<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biodata Alya</title>
    <style>
        body {
            background-color: #d7ccc8; /* coklat muda Spotify */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #bcaaa4; /* coklat pastel */
            border-radius: 20px;
            padding: 30px;
            width: 380px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .top {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .top img {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            object-fit: cover;
        }

        .top .info h4 {
            margin: 0;
            font-size: 16px;
            color: #3e2723;
        }

        .top .info p {
            margin: 0;
            font-size: 13px;
            color: #5d4037;
        }

        .content {
            font-size: 20px;
            color: #3e2723;
            margin-top: 10px;
            line-height: 1.5;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #4e342e;
            text-align: center;
        }

        .footer img {
            height: 18px;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="top">
            <!-- Gambar dari folder public/img -->
            <img src="{{ asset('img/alya.jpg') }}" alt="Foto Alya">
            <div class="info">
                <h4>Biodata</h4>
                <p>Alya Zahirah</p>
            </div>
        </div>

        <div class="content">
            Hello, my name is <strong>Alya</strong>.<br>
            I'm <strong>17 years old</strong>, currently in <strong>class XII RPL</strong>.<br>
            I love <strong>sports</strong> and <strong>adventure</strong>.
        </div>

        <div class="footer">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="Spotify Logo" style="filter: brightness(0.1);">
            <span>&nbsp;Inspired by Spotify style</span>
        </div>
    </div>
</body>
</html>