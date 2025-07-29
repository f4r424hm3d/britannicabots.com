<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Britannica Bots | Under Construction</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(-45deg, #1a2a6c, #b21f1f, #fdbb2d);
      background-size: 600% 600%;
      animation: gradientBG 15s ease infinite;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100vh;
      padding: 20px;
    }

    @keyframes gradientBG {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .container {
      max-width: 600px;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      font-weight: 600;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .btn {
      background: white;
      color: #1a2a6c;
      border: none;
      padding: 12px 25px;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 30px;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background: #f1f1f1;
    }

    .footer {
      position: absolute;
      bottom: 20px;
      width: 100%;
      text-align: center;
      font-size: 0.9rem;
      color: #eee;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Britannica Bots</h1>
    <p>We’re working hard to launch our website.<br />
      It’s going to be something amazing — stay tuned!</p>
    <a href="mailto:info@britannicabots.com" class="btn">Notify Me</a>
  </div>

  <div class="footer">© 2025 Britannica Bots. All rights reserved.</div>

</body>

</html>
