<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    = igual
    != diferente
    <> = diferente
    < menor
    > maior
    <= menor igual
    >= maior igual
    === identico
    */
    $numero01 = 10;
    $numero02 = "10";
    $logico = null;

    // igual
    echo "Comp. Igual";
    $logico = $numero01 == $numero02;
    echo "<p>". (int)$logico."</p>";
    echo "**************";

    // diferente
    echo "Comp. Diferente";
    $logico = $numero01 != $numero02;
    echo "<p>". (int)$logico."</p>";
    echo "**************";

    // identico
    echo "Comp. Idêntico";
    $logico = $numero01 === $numero02;
    echo "<p>". (int)$logico."</p>";
    echo "**************";

    // maior igual
    echo "Comp. Maior Igual";
    $logico = $numero01 >= $numero02;
    echo "<p>". (int)$logico."</p>";
    echo "**************";
    ?>
</body>
</html>