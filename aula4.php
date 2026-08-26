<?php

/**
 * $contador = $contador + 1; 0 + 1
 * $contador += 1; 0 + 1
 * $contador++; 0 + 1
 */

for($contador = 0; $contador <=5; $contador++) {
    echo $contador . "<br>"; // 5
}

echo "<br>while:<br>";

$contador = 0;

while($contador <= 5) {
    echo $contador . "<br>";
    $contador++;
}


echo "<br>";

for($contador = 5; $contador >=0; $contador--) {
    echo $contador . "<br>"; // 0
}

echo "<br>while Desc:<br>";

$contador = 5;

while($contador >= 0) {
    echo $contador . "<br>";
    $contador--;
}

echo "<br>";

/**
 *  Calcular o fatorial de 5 (5!)
 * 5 * 4 * 3 * 2 * 1 = 120;
 * utilizar laço de repetição
 */

$numeroEscolhido = 5;
$fatorial = 1; // vai ser alterado o valor dentro do laço(120)

for($numero = $numeroEscolhido; $numero > 0; $numero--) {
    // $fatorial = $fatorial * $numero;
    $fatorial *= $numero; // 5 * 4 * 3 ...
}

echo "o fatorial de $numeroEscolhido é: $fatorial"; 

echo "<br>";

/**
 * Calcular e exibir a tabuada do 5 utilizando laço FOR.
 * Resultado esperado:
 * 5 x 1 = 5
 * 5 x 2 = 10
 * ...
 * 5 x 10 = 50
 * 
 */

$numero = 5;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero X $i = $resultado <br>"; 
}

echo "<br>";

/**
 * Calcular e exibir todos os numeros pares de 2 até 50.
 * Sem pular de 2 em 2 no FOR;
 * 
 * Dica: utilizar formula do numeros pares.
 */

for ($numero = 2; $numero <= 50; $numero++) {
    $resto = $numero % 2;
    $ehPar = $resto == 0;

    if ($ehPar) {
        echo "O $numero é par. <br>";
    }

}

echo "<br>";

/**
 * Calcular e exibir os 5 primeiros numeros primos.
 * Os 5 primeiros primos sao: 2, 3, 5, 7, 11.
 * 
 * Dica: utilizar formula do numeros pares.
 * e uma vairavel $limitePrimos = 5.
 * Serão 2 FOR um dentro do outro FOR
 */

$limitePrimos = 5;
$contadorLimitePrimos = 0;

for ($numeroAvaliado = 2; $contadorLimitePrimos < $limitePrimos; $numeroAvaliado++) {

    $ehPrimo = true;
    $penultimoNumero = $numeroAvaliado - 1;

    for ($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {
        
        $resto = $numeroAvaliado % $divisor;
        $naoEhPrimo = $resto == 0; // divisão exata

        if ($naoEhPrimo) {
            $ehPrimo = false;

            break;
        }

    }

    if ($ehPrimo) {
        $contadorLimitePrimos++;
        echo "O número $numeroAvaliado é primo.<br>";
    }
}

echo "<br>";

$funcionarios = []; // array vazio === 0(size | lenght)
$funcionarios = array(); // array vazio === 0
$numeros = [123, 25]; // tamanho 2 === 2
                // 0, 1 
$funcionarios = ["Ariel", "Maria", "Joao"]; // 3 === 3
//                0,      1,       2

foreach($funcionarios as $funcionario) {
    echo $funcionario . "<br>";
}

echo "<br>FOR<br>";
$tamanhoArray = count($funcionarios); //3

for($i = 0; $i < $tamanhoArray; $i++) {
    // echo $funcionarios[0] . "<br>"; Ariel
    // echo $funcionarios[1] . "<br>"; Maria
    // echo $funcionarios[2] . "<br>"; Joao
    echo $funcionarios[$i] . "<br>";
}

echo "<br>";

$funcionariosArrayAssociativo = [
    "nome" => "Ariel", 
    "cargo" => "Professor",
    "salario" => "5000"
];

foreach($funcionariosArrayAssociativo as $chave => $funcionario) {
    echo "$chave: $funcionario <br>";
}


$funcionariosArrayAssociativo = [
    "nome" => "Ariel", 
    "cargo" => "Professor",
    "salario" => "5000"
];

echo "<br>";

/**
 * Utilizar o array anterior e aplicar os itens abaixo:
 * 
 * Conceder 10 % de aumento para cada funcinario.
 * Adicionar setor do funcionario.
 * Adicionar desconto do INSS do funcionario.
 */

$funcionariosArrayAssociativo = [
    "nome" => "Ariel", 
    "cargo" => "Professor",
    "salario" => "5000",
    "setor" => "educação",
    "descontoINSS" => "230",
];


$percentual = 10;
$percentualAumento = $percentual / 100;
$salario = $funcionariosArrayAssociativo["salario"];
$aumento = $salario * $percentualAumento;
$aumentoFormat = formatarParaReal($aumento);
$novoSalario = formatarParaReal($salario + $aumento);
$salarioAntigo = formatarParaReal($salario);

echo "R$ ". formatarParaReal(10.49);
echo "<br>";

echo "O salário era de: $salarioAntigo o aumento foi de $aumentoFormat e seu novo salário é: $novoSalario";

function formatarParaReal(float $valor): string {
    $valorFormatado = number_format($valor, 2, ',', '.');

    return $valorFormatado;
}

echo "<br>";
