<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 6.</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    
    <?php
        $koszt_na_km = 0.50;
        $dystans = (float)$_POST['odleglosc'] ?? 0.0;
        $ciepla = (boolean)$_POST['ciepla'] ?? false;
        (float)$wynik = $koszt_na_km * $dystans;
        $wynik += ($ciepla) ? (0.15 * $wynik) : 0;
    ?>

    <pre>
        Koszt:     <?= $koszt_na_km ?> PLN/km
        Odległosc: <?= $dystans ?>  km
        Ciepła?:   <?= ($ciepla) ? "Tak" : "Nie" ?>
    </pre>
    <br><br>
    <p>
        Wynik: <?= ($dystans > 0) ? number_format($wynik, 2, '. ', ' ') . " PLN" : "Nie podano dystansu" ?>
    </p>

</body>
</html>
