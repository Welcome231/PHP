<?php
class osoba
{
    public $id, $nazwisko, $imie, $wiek;
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko=$arg1;
    }
    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
    function wpiszImie($arg2)
    {
        $this->imie=$arg2;
    }
    function pobierzImie()
    {
        return $this ->imie;
    }
    function wpiszId($arg3)
    {
        $this->id=$arg3;
    }
    function pobierzId()
    {
        return $this->id;
    }

    function wpiszWiek($arg4)
    {
        $this->wiek=$arg4;
    }

    function pobierzWiek(){
        return $this ->wiek;
    }

}

$osoba = new Osoba();
$osoba -> wpiszImie("Jarek");
$imie = $osoba -> pobierzImie();
$osoba -> wpiszNazwisko("Gliwicki");
$nazwisko = $osoba -> pobierzNazwisko();
$osoba -> wpiszId(3);
$ID = $osoba -> pobierzId();
$osoba -> wpiszWiek(23);
$wiek = $osoba -> pobierzWiek();

echo "imie: $imie <br>";
echo "nazwisko: $nazwisko <br>";
echo "wiek: $wiek <br>";
echo "ID: $ID <br>";

?>