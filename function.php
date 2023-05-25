<?php
/*
Estaremos trabalhando com fumção
*/

//1° forma de declaração

$numero01 = 50;
$numero02 = 30;

function Adicao(){
    global $numero01, $numero02;
    $resultado = $numero01 + $numero02;
    echo "<p>Adição: " . $resultado;
}

//chamar a função
Adicao();

function Subtracao(){
    global $numero01, $numero02;
    $resultado = $numero01 - $numero02;
    echo "<p>Subtração: " . $resultado;
}
Subtracao();

$v =array(200,300,400,500);
$n1 = 200;
$n2 = 300;
$n3 = 100;
$n4 = 500;

function Subtracao_( $par01, $par2){
    $resultado = $par01 - $par2;
    echo "<p>Subtração: " . $resultado;
}

function Adicao_( $par01, $par2){
    $resultado = $par01 + $par2;
    echo "<p>Adição: " . $resultado;
}

Subtracao_($v[0],$v[1],$v[2],$v[3]);
Subtracao_($n1,$n2,$n3,$n4);
Adicao_(200, 1000);
Adicao_($numero01, $numero02);

//funcao com argumento e palavra reservada

//c = 2 x 3.14 x r

function Circunferencia($raio){
    $c = 2 * 3.14 * $raio;
    //variavel, array
    return $c;
}

$valor = Circunferencia(10);
echo"<p> O comprimento é de: " . $valor;
$valor = 40;
echo"<p> O comprimento é de: " . $valor;
echo $valor = Circunferencia(60);
?>