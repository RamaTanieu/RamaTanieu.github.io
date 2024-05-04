<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles/default.css" type="text/css" rel="stylesheet">

<title>Business Card</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 20px;
  }
  .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    margin: auto;
  }
  .logo {
    width: 100px;
    height: auto;
    margin-bottom: 20px;
  }
  .name {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
  }
  .title {
    font-size: 16px;
    margin-bottom: 10px;
  }
  .contact {
    font-size: 14px;
    margin-bottom: 10px;
  }
</style>
</head>
<body>

<?php
// Define variables with your information
$name = "Rama Tanieu";
$title = "Database Management Student";
$phone = "980-456-7890";
$email = "fouatta0@email.cpcc.edu";
$website = "www.example.com";
?>

<div class="card">
  <div class="name"><?php echo $name; ?></div>
  <div class="title"><?php echo $title; ?></div>
  <div class="contact">
    Phone: <?php echo $phone; ?><br>
    Email: <?php echo $email; ?><br>
    Website: <?php echo $website; ?>
  </div>
</div>

</body>
</html>

