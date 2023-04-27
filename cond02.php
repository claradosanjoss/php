<?php
$numero = 50;

if($numero < 10){
    echo "o número está na faixa de 0 a 10";
}else if($numero >= 10 && $numero <= 20 ){
    echo "o número está na faixa de 10 a 20";
}else if($numero >= 21 && $numero <= 30){
    echo "o número está na faixa de 21 a 30";
}else{
    echo "o número está na faixa acima de 30";
}
?>