<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE['wizyta'])) {
    $ostatnia = $_COOKIE['wizyta'];
    echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas " . $ostatnia;
} else {
    echo "Witamy na naszej stronie!";
}
$mies = 2592000 + time();
setcookie("wizyta", date("F jS - g:ia"), $mies);
?>
</body>
</html>