<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 5.</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    
    <?php
    $koszt = (float)$_POST['koszt-benzyny'] ?? 6.75;
    $dystans = (float)$_POST['dystans'] ?? 100;
    $spalanie = (float)$_POST['spalanie-na-km'] ?? 7.5;

    $wynik = ($spalanie > 0) ? (($koszt / $spalanie) * $dystans) : 0;

    
    $wynik = number_format($wynik, 2);

?>

<pre>
    Koszt:    <?= $koszt ?> PLN
    Dystans:  <?= $dystans ?>  km
    Spalanie: <?= $spalanie ?>  l/km
</pre>
<br>
<br>
<p>
    Wynik: <?= ($spalanie > 0) ? $wynik . " PLN" : "Nie podano spalania" ?>
</p>

</body>
</html>
