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
    iremos trabalhar com operadores aritméticos
    + adiçao
    - subtraçao
    *multiplicacao
    / divisao
    %módulo
    **expoente
    */
    $numero_1 = 100;
    $numero_2 = 4;
    $resultado = $numero_1 + $numero_2;
    $resultado01 = $numero_1 - $numero_2;
    $resultado02 = $numero_1 * $numero_2;
    $resultado03 = $numero_1 / $numero_2;

    ?>
       <p>
           <?php echo $numero_1. " + " .$numero_2 . " = " .$resultado ?>
       </p>

        <p>
           <?php echo $numero_1. " - " .$numero_2 . " = " .$resultado01 ?>
        </p>
        <p>
           <?php echo $numero_1. " * " .$numero_2 . " = " .$resultado02 ?>
        </p>
</body>
</html>