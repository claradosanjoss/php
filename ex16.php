<?php
$qtdmaca = 11;
$resultado = 0;

if($qtdmaca < 12){
    $resultado = 1.30 * $qtdmaca;
}else{
    $resultado = 1.00 * $qtdmaca;
}

echo "Valor da compra ". number_format( $resultado,2,",",".");
?>