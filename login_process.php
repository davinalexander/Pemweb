<?php
$emailPhone =  $_GET['user'];
$password = $_GET['pass'];


if ($emailPhone == 'user@gmail.com' && $password == 'user') {
    echo '<h1> Login Berhasil </h1>';
} else {
    echo '<h1> Login Gagal</h1>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'login.css' ?>
    </style>
</head>

<body>

</body>

</html>