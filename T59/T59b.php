<?php
function dniDoUrodzin($data_urodzenia) {
    $dzisiaj = new DateTime();
    $urodziny = DateTime::createFromFormat('Y-m-d', $data_urodzenia);

    // Ustawiamy urodziny na bieżący rok
    $urodziny->setDate((int)$dzisiaj->format('Y'), (int)$urodziny->format('m'), (int)$urodziny->format('d'));

    // Jeśli urodziny w tym roku już były – przesuwamy na następny rok
    if ($urodziny < $dzisiaj) {
        $urodziny->modify('+1 year');
    }

    $roznica = $dzisiaj->diff($urodziny);
    return $roznica->days;
}

// Obsługa przesłania formularza
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imie = trim($_POST['imie'] ?? '');
    $nazwisko = trim($_POST['nazwisko'] ?? '');
    $urodziny = $_POST['urodziny'] ?? '';

    if ($imie && $nazwisko && $urodziny) {
        // Zapisz dane do ciasteczek na rok
        setcookie('imie', $imie, time() + 365 * 24 * 60 * 60);
        setcookie('nazwisko', $nazwisko, time() + 365 * 24 * 60 * 60);
        setcookie('urodziny', $urodziny, time() + 365 * 24 * 60 * 60);

        // Odśwież stronę, aby ciasteczka były dostępne
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $blad = "Wszystkie pola są wymagane!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dane użytkownika</title>
</head>
<body>

<?php if (isset($_COOKIE['imie'], $_COOKIE['nazwisko'], $_COOKIE['urodziny'])): ?>
    <p>Witaj, <strong><?= htmlspecialchars($_COOKIE['imie'] . ' ' . $_COOKIE['nazwisko']) ?></strong>!</p>
    <p>Twoje urodziny przypadają: <?= htmlspecialchars($_COOKIE['urodziny']) ?></p>
    <p>Do Twoich urodzin zostało: <strong><?= dniDoUrodzin($_COOKIE['urodziny']) ?></strong> dni.</p>


<?php elseif (isset($_POST['reset'])): ?>
    <?php
    // Usuwanie ciasteczek
    setcookie('imie', '', time() - 3600);
    setcookie('nazwisko', '', time() - 3600);
    setcookie('urodziny', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
    ?>

<?php else: ?>
    <h2>Podaj swoje dane</h2>
    <?php if (!empty($blad)) echo "<p style='color:red;'>$blad</p>"; ?>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        Imię: <br><input type="text" name="imie" required><br><br>
        Nazwisko: <br><input type="text" name="nazwisko" required><br><br>
        Data urodzenia: <br><input type="date" name="urodziny" required><br><br>
        <input type="submit" value="Zapisz">
    </form>
<?php endif; ?>

</body>
</html>
