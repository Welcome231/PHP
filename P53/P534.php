<?php
$nrLini = 0;
$a = fopen("napisy.txt", "r");

while (!feof($a)) {
    $nrLini++;
    $linia = fgets($a);
    $liniaa = bindec($linia);
    echo "$liniaa <br>";
}
?>