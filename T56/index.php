<?php
if(isset($_POST['komentarz'])){
    $tekst= substr($_POST['komentarz'],0,255);
    $tekst= strip_tags($tekst)."\n";
        if (!$op = fopen('opinie.txt', 'a')) {
            echo "Błąd!.Nie można otworzyć pliku opinie.txt";
        } else {
            if (fwrite($op, $tekst) === false) {
                echo "Dodanie komentarza nie powiodło się";
            }
        }
    }
?>
    <html lang="pl">
    <head>
        <title>Opinie użytkowników</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <h3>Autor: Piotr Koszela 3p</h3>
    <form action="index.php" method="post">
    <div>

            <p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br>
                (Maksymalnie 255 znaków)</p>
            <textarea name="komentarz" rows="6" cols="50"
                      wrap="virtual"></textarea><br>
            <input type="submit" value="Wyślij">
    </div>
    </form>
    <b>Dodane opinie:</b>
    <div>
<?php
$opinie = '';
if(file_exists('./opinie.txt')) {
    $opinie = file_get_contents('./opinie.txt');
    $opinie = nl2br($opinie);
    }

    if($opinie !== ''){
        echo $opinie;

    } else {
    echo"Brak opinii natemat zmian klimatu.";
    }

?>
    </div>
    </body>
    </html>