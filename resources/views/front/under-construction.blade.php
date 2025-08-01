<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Britannica Bots | Under Construction</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Raleway', sans-serif;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color: #fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      flex-direction: column;
      padding: 20px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 20px;
      font-weight: 700;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .countdown {
      display: flex;
      gap: 20px;
      font-size: 2rem;
      font-weight: 700;
    }

    .countdown div {
      background: rgba(255, 255, 255, 0.1);
      padding: 20px;
      border-radius: 10px;
      min-width: 80px;
    }

    .footer {
      position: absolute;
      bottom: 20px;
      font-size: 0.9rem;
      color: #ccc;
    }
  </style>
</head>

<body>

  <h1>Britannica Bots</h1>
  <p>We're building something amazing. Stay tuned!</p>

  <div class="countdown" id="countdown">
    <div><span id="days">00</span><br>Days</div>
    <div><span id="hours">00</span><br>Hours</div>
    <div><span id="minutes">00</span><br>Minutes</div>
    <div><span id="seconds">00</span><br>Seconds</div>
  </div>

  <div class="footer">© 2025 Britannica Bots. All rights reserved.</div>

  <script>
    const launchDate = new Date("2025-12-31T00:00:00").getTime();

    const timer = setInterval(() => {
      const now = new Date().getTime();
      const distance = launchDate - now;

      const days = Math.floor(distance / (10000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
      document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
      document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
      document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

      if (distance < 0) {
        clearInterval(timer);
        document.getElementById("countdown").innerHTML = "We're Live!";
      }
    }, 1000);
  </script>

</body>

</html>
