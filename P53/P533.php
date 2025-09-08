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
$x =fopen("imiona.txt", "r");
$a = fread($x, filesize("imiona.txt"));

echo "$a <br>";

$filename = "imiona.txt";
$lines = file($filename);
$lines = array_reverse($lines);
foreach ($lines as $line) {
        echo $line . "\n";
}



?>
</body>
</html>