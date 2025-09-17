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

?>