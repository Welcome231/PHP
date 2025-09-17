<?php
class Czolg{
    public $nazwa, $kolor, $iloscAmunicji;

    function __construct($nazwa, $kolor, $iloscAmunicji){
        $this->nazwa=$nazwa;
        $this->kolor=$kolor;
        $this->iloscAmunicji=$iloscAmunicji;
    }

    function info(){
    echo "nazwa: " . $this->nazwa . "<br>";
    echo "kolor: " . $this->kolor . "<br>";
    echo "iloscAmunicji: " . $this->iloscAmunicji . "<br>";
    }

    function pomaluj($kolor2){
        $this->kolor = $kolor2;
    }

    function zaladuj($ilosc){
        $this->iloscAmunicji += $ilosc;
    }

    function strzelaj(){
        if($this->iloscAmunicji > 0){
            $this->iloscAmunicji -= 1;
            echo "strzelono<br>";
        }
        else{
            echo "brak amunicji<br>";
        }
    }
}

$czolg1 = new Czolg("T51", "zielony", 15);

$czolg1->info();
$czolg1->pomaluj("czerwony");
$czolg1->strzelaj();
$czolg1->info();
$czolg1->zaladuj(16);
$czolg1->info();

?>