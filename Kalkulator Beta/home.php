<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHOSE CALCULATOR</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      justify-content: center;
      margin-top: 100px;
      background-color: #f0f0f0;
      display: flex;
      /* aktifkan flexbox */
      flex-direction: column;
      /* susun anak (h1 + .button-container) secara vertikal */
      justify-content: center;
      /* pusat secara vertikal */
      align-items: center;
      /* pusat secara horizontal */
      min-height: 100vh;
      /* tingginya 100% viewport */
      margin: 0;
    }

    h1 {
      margin-bottom: 50px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      display: flex;
      margin-top: 20px;
    }

    .calc-btn {
      padding: 20px 30px;
      font-size: 18px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .calc-btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>

  <h2><strong>CHOSE CALCULATOR</strong></h2>
  <div class="button-container">
    <button class="calc-btn" onclick="window.location.href='kalkulator1/index.php'">Twoside</button>
    <button class="calc-btn" onclick="window.location.href='kalkulator2/index.php'">Simple</button>
    <button class="calc-btn" onclick="window.location.href='kalkulator3/index.php'">Elegant</button>
  </div>

</body>

</html>