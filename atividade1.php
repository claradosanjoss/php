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
    $nmra = 10;
    $nmrb = 20;
    ?>
    <?php
    $nmra = $nmra + $nmrb;
    $nmrb = $nmra - $nmrb;
    $nmra = $nmra - $nmrb;
    ?>
    <?php
    print("<p> Número A: ".$nmra. "</p>");
    print("<p> Número B: ".$nmrb. "</p>");
    ?>
</body>
</html>