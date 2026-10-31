<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jam Digital Casual</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .clock-card {
            background: rgba(255, 255, 255, 0.85);
            padding: 40px 60px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        .date {
            font-size: 1rem;
            color: #718096;
            font-weight: 400;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }
        .time {
            font-size: 3.5rem;
            font-weight: 600;
            color: #2d3748;
            letter-spacing: 2px;
            font-variant-numeric: tabular-nums;
        }
        .greeting {
            margin-top: 15px;
            font-size: 0.9rem;
            color: #4a5568;
            font-weight: 300;
        }
    </style>
</head>
<body>

    <div class="clock-card">
        <div class="date" id="date-box">Memuat tanggal...</div>
        <div class="time" id="time-box">00:00:00</div>
        <div class="greeting" id="greeting-box">Semoga harimu menyenangkan ✨</div>
    </div>

    <script>
        function updateClock() {
            const now = new Date();
            
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            document.getElementById('time-box').innerText = hours + ":" + minutes + ":" + seconds;

            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('date-box').innerText = now.toLocaleDateString('id-ID', options);

            let greetingText = "Semoga harimu menyenangkan ✨";
            const h = now.getHours();
            if (h >= 4 && h < 11) {
                greetingText = "Selamat pagi, tetap semangat! ☕";
            } else if (h >= 11 && h < 15) {
                greetingText = "Selamat siang, jangan lupa istirahat sejenak ☀️";
            } else if (h >= 15 && h < 18) {
                greetingText = "Selamat sore, hampir selesai! 🌇";
            } else {
                greetingText = "Selamat malam, waktunya bersantai 🌙";
            }

            document.getElementById('greeting-box').innerText = greetingText;
        }

        // Jalankan langsung pertama kali
        updateClock();
        
        // Jalankan setiap 1 detik
        setInterval(updateClock, 1000);
    </script>
</body>
</html>