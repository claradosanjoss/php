<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="adm/css/estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
    //pega os arquivo na pasta
    $pasta = "adm/imagem/";
    $imagem = glob("$pasta{*.jpeg, *.png, *.gif}" , GLOB_BRACE);

    
    foreach( $imagem as $pos ){
        echo "<img src='".$pos ."' class='image' />";
    }
    ?>
</body>
</html>