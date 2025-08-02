<?php
$directory = isset($_GET['directory']) ? htmlspecialchars($_GET['directory']) : 'unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Not Found</title>
  <style>
    body {
      color: white;
      font-family: "Comic Neue", "Comic Sans MS", Arial, sans-serif;
      background-color: coral;
      text-align: center;
      padding: 40px;
    }
    .container {
      background-color: orange;
      padding: 30px;
      border-radius: 20px;
      display: inline-block;
      margin-top: 50px;
    }
    .home-btn {
      color: white;
      background-color: red;
      font-family: "Comic Neue", "Comic Sans MS", Arial, sans-serif;
      border: none;
      padding: 12px 24px;
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }
    .stick {
      position: sticky;
      top: 0;
      background-color: coral;
      padding: 10px 0;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <h1 class="stick"><b>Loaf's Site (≈^·-·^≈)</b></h1>
  <div class="container">
    <h1>Sorry!</h1>
    <p><b>Loaf couldn't find <code><?php echo $directory; ?></code>. Maybe a typo?</b></p>
    <button class="home-btn" onclick="window.location.href='/'"><b>Home</b></button>
  </div>
</body>
</html>
