<?php
/*
function AumentoSalario($porcentagem, $cargo) {
    // Salario + ( (salario * porcentagem)/100)
    $salarios = [
        'desenvolvedor front end' => 3500.00,
        'desenvolvedor backend' => 6000.00,
        'gerenciador de projeto' => 10000.00,
        'ceo' => 15000.00,
        
    ];

    // Verifica se o tipo de cargo existe na lista
    if (array_key_exists($cargo, $salarios)) {
        $salarioAtual = $salarios[$cargo];
        $aumento = $salarioAtual * ($porcentagem / 100);
        $novoSalario = $salarioAtual + $aumento;
        return $novoSalario;
    } else {
        return "Tipo de cargo inválido";
    }
}

// Exemplo de uso da função
$porcentagem = 10;  // 10% de aumento
$cargo = 'ceo'; 

$novoSalario = AumentoSalario($porcentagem, $cargo);
echo "Novo salário: R$ $novoSalario";
*/
function AumentoSalario($porcentagem, $cargo) {
    if('desenvolvedor front end' == $cargo){
        $salario = 3500.00 + ($porcentagem * 3500.00)/100;
    }
    else if('desenvolvedor backend' == $cargo){
        $salario = 6000.00 + ($porcentagem * 6000.00)/100;
    }
    else if('gerenciador de projeto' == $cargo){
        $salario = 10000.00 + ($porcentagem * 10000.00)/100;
}
else if('ceo' == $cargo){
    $salario = 15000.00 + ($porcentagem * 15000.00)/100;
}else if('estagiario' == $cargo){
    $salario = 699.00 + ($porcentagem * 699.00);
}
}
// Exemplo de uso da função
$porcentagem = 10;  // 10% de aumento
$cargo = 'ceo'; 

$novoSalario = AumentoSalario($porcentagem, $cargo);
echo "Novo salário: R$ " . $novoSalario;
?>