<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1.</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <?php $haslo = $_POST['haslo'] ?>

    <p class='login'>
        <span><span>Login:</span> <?= $_POST['login'] ?? "Nie podano"; ?></span>
        <span><span>Hasło(sha1):</span> <?= $haslo ? sha1($haslo) : "Nie podano hasła"; ?>
        <span><span>Zapamiętane?</span> <?= (isset($_POST['zapamietaj']) && $_POST['zapamietaj']) ? "Tak" : "Nie" ?>
    </p>

</body>
</html>