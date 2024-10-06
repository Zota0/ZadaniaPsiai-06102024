<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2.</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <?php
        $pseudonim = $_POST['pseudonim'] ?? "Anonim";
        $komentarz = $_POST['komentarz'] ?? "<b>Trochę</b> tu pusto...";
        $komentarz_ze_znacznikami = htmlspecialchars($komentarz);
    ?>

    <article>
        <header><?= $pseudonim ?></header>
        <p><?= $komentarz ?></p>
        <code>
            <?= $komentarz_ze_znacznikami; ?>
        </code>
    </article>

</body>
</html>
