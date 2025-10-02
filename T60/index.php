<?php
$db =  mysqli_connect("localhost", "root", "", "3p_1_baza1");
$q = "SELECT pracownicy.imie, pracownicy.nazwisko, pracownicy.stanowisko, pracownicy.dzial, pracownicy.sekcja FROM pracownicy WHERE sekcja='drukarki'";
$result = mysqli_query($db, $q);
while ($x = mysqli_fetch_row($result)) {
    echo "$x[0] $x[1] $x[2] $x[3] $x[4]<br>";
}
mysqli_close($db);
?>