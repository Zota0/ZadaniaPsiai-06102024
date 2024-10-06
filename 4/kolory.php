<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 4.</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body>
    <?php
    $text = $_POST['kolor-tekstu']?? "#FFFFFF";
    $bg = $_POST['kolor-tla']?? "#000000";
    ?>

    <p style='height: 50%; width: 50%; margin: 50px auto 0px auto; outline: 2px red dashed; color: <?= $text?>; background-color: <?= $bg?>'>
        <span style='padding: 10px 18px; display:block;'>Bartosz Zakrzewski</span>
    </p>

</body>
</html>
