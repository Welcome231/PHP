<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $description = $_REQUEST["description"];
    $color = $_REQUEST["color"];
    $size = $_REQUEST["size"];
    $options = $_REQUEST["options"];


    echo "$name <br> $email <br> $phone <br> $description <br> $color <br> $size <br> ";
    foreach ($options as $option) {
        echo "$option <br>";
    }

}
?>

</body>
</html>