<?php
touch("imie_i_nazwisko.txt");
touch("doSkasowania.txt");
unlink("doSkasowania.txt");
mkdir("Koszela");
touch("Koszela/plik.txt");
?>