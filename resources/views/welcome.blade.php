<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: 'Wix Madefor Display', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }

        .welcome-container {
            text-align: center;
        }

        .welcome-animation {
            font-size: 3em;
            color: red;
            animation: welcomeAnimation 2s infinite alternate;
            margin-bottom: 20px;
        }

        @keyframes welcomeAnimation {
            from { transform: scale(0.9); opacity: 0.8; }
            to { transform: scale(1.1); opacity: 1; }
        }

        h1 {
            font-size: 1.7em;
            color: #333;
            margin-bottom: 20px;
        }

        .masuk-button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .masuk-button:hover {
            background-color: darkred;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-animation">Selamat Datang!</div>
        <h1>Klik tombol ini untuk melanjutkan ke beranda Satpol PP Kota Semarang</h1>
        <button class="masuk-button" onclick="window.location.href='/home'">Masuk</button>
    </div>
</body>
</html>