<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz konkursu - Podrasuj swoje buty!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Formularz konkursu „Podrasuj swoje buty!”</h1>
<p>
    Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butów Forcefield?
    Napisz nam, dlaczego sądzisz, że powinieneś <em>pożegnać się</em> ze swoimi wysłużonymi butami,
    a być może zostaniesz jednym z laureatów konkursu!
</p>

<form method="post">
    <fieldset>
        <legend><strong>Podstawowe dane</strong></legend>

        <label for="name">Imię i nazwisko:</label>
        <input type="text" id="name" name="name">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email">

        <label for="phone">Telefon:</label>
        <input type="tel" id="phone" name="phone">

        <label for="description">Moje buty są TAKIE stare...</label>
        <textarea id="description" name="description" maxlength="300"></textarea>
        <small>Nie więcej niż 300 znaków</small>
    </fieldset>

    <fieldset>
        <legend><strong>Zaprojektuj własne trampki:</strong></legend>

        <fieldset>
            <legend>Kolor <em>(wybierz jeden)</em>:</legend>
            <input type="radio" id="red" name="color" value="czerwony">
            <label for="red">czerwony</label><br>

            <input type="radio" id="blue" name="color" value="niebieski">
            <label for="blue">niebieski</label><br>

            <input type="radio" id="black" name="color" value="czarny">
            <label for="black">czarny</label><br>

            <input type="radio" id="silver" name="color" value="srebrny">
            <label for="silver">srebrny</label>
        </fieldset>

        <fieldset>
            <legend>Opcje <em>(możesz wybrać kilka)</em>:</legend>
            <input type="checkbox" id="shiny-laces" name="options[]" value="błyszczące sznurówki">
            <label for="shiny-laces">Błyszczące sznurówki</label><br>

            <input type="checkbox" id="metal-logo" name="options[]" value="metalowe logo">
            <label for="metal-logo">Metalowe logo</label><br>

            <input type="checkbox" id="led-soles" name="options[]" value="świecące podeszwy">
            <label for="led-soles">Świecące podeszwy</label><br>

            <input type="checkbox" id="mp3" name="options[]" value="odtwarzanie MP3" checked>
            <label for="mp3">Odtwarzanie MP3</label>
        </fieldset>

        <label for="size">Rozmiar zgodny ze standardowymi numerami butów:</label>
        <select id="size" name="size">
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37" selected>37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
        </select>
    </fieldset>

    <input type="submit" value="Podrasuj swoje buty!">
    <input type="reset" value="Resetuj">
</form>

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
