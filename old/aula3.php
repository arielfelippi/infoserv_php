<?php

$mediaFinal = 0;
$notaRecuperacao = 4;
$nota = 7; // 7.0

if ($nota >= 7) {
    echo "Aprovado";
    $mediaFinal += $nota; // 0 + 7 = 7
}
else if ($nota >= 5) {
    echo "Recuperação";
    $mediaFinal += $notaRecuperacao; // 0 + 4 = 4
}
else {
    echo "Reprovado";
}

echo "<br>";

$perfil = "admin";

if ($perfil == "admin") {
    echo "É administrador!";
}
else if ($perfil == "usuario") {
    echo "É usuario comum!";
}
else {
    echo "É desconhecido!";
}

echo "<br>";

$nome = "";

if ( empty($nome) ) {
    echo "Esta vazio.";
} else {
    echo "O conteudo da variavel nome é:    $nome";
}

echo "<br>";

$valor = "";

if ( isset($valor) ) {
    echo "[isset] O conteudo da variavel nome é: $valor";
} else {
    echo "[isset] Esta vazio.";
}

echo "<br>";

/**
 * Utilizar o operador modulo %
 * para descobrir se o numero informado pelo usuario é par
 * se for par exibir é par e o numero lido. Senao, exibir é impar e o numero lido.
 */

$numero = 10; // ler numero do usuario (Fixo || mock)

$resto = $numero % 2;// 0
$resultado = $numero / 2;// 5
$ehPar = $resto == 0; // true || false

if ($ehPar) {
    echo "O numero $numero informado é par.";
} else {
    echo "O numero $numero informado é impar.";
}

echo "<br>";

/**
 * Calcular o IMC de uma Pessoa
 * informar se ela esta acima do peso, peso ideal ou abaixo do peso.
 */
$altura = 1.88;
$peso = 70;
$imc = $peso / ($altura * $altura);

if ($imc >= 25) {
    echo "Voce esta com sobrepeso(acima do peso).";
} else if ($imc >= 18.5 && $imc < 25 ) {
    echo "Voce esta no peso ideal(normal).";
} else {
    echo "Voce esta abaixo do peso(magreza).";
}


echo "<br>";

/**
 * Criar um algoritmo que vai simular o funcionamento de uma calculadora.
 * Utilizar somente os operadores aritmeticos basicos sendo eles:
 * Operadores: + - * /
 * 
 * Após o calculo exibir o resultado da operação/calculo.
 * 
 * Dica: Utilizar IF ELSE ou Switch Case.
 * O simulador irá possuir 4 variáveis: $operador, $resultado, $valorA e $valorB.
 */

$valorA = 10;
$operador = "+";
$valorB = 10;
$resultado = 0;

if ($operador == "+") {
    $resultado = $valorA + $valorB;
    echo "O resultado da operação de $operador é: $resultado";
}
else if ($operador == "-") {
    $resultado = $valorA - $valorB;
    echo "O resultado da operação de $operador é: $resultado";
}
else if ($operador == "*") {
    $resultado = $valorA * $valorB;
    echo "O resultado da operação de $operador é: $resultado";
}
else if ($operador == "/") {
    $resultado = $valorA / $valorB;
    echo "O resultado da operação de $operador é: $resultado";
}
else {
    echo "Operador inválido. Digite operador novamente";
}


echo "<br>";


/**
 * Calcular a area de um quadrado. E exibir o resultado.
 * Com a mensagem: A area do quadrado é: 
 */

$ladoA = 4;
$ladoB = 4;
$area = $ladoA * $ladoB;
echo "A area do quadrado é $area";

echo "<br>";


/**
 * Calcular a area de um triangulo equilatero. E exibir o resultado.
 * Com a mensagem: A area do triangulo equilatero é: 
 */

$base = 3;
$altura = 3;
$area = ($base * $altura) / 2;
echo "A area do triangulo equilatero é $area";

echo "<br>";

/**
 * Calcular a media aritmética, harmonica e ponderada de um aluno.
 * Avaliar se este aluno Passou, esta em Recuperação ou foi Reprovado.
 * 
 * A média para passar é 7. Recuperação é 5. Reprovar abaixo de 5.
 */

$valor1 = 10;
$valor2 = 10;
$valor3 = 10;

$mediaAritmetica = ($valor1 + $valor2 + $valor3) / 3;

if ($mediaAritmetica >= 7) {
    echo "O aluno foi Aprovado com a média aritmetica: $mediaAritmetica";
}
else if ($mediaAritmetica >= 5) {
    echo "O aluno está em Recuperação com a média aritmetica: $mediaAritmetica";
}
else {
   echo "O aluno está em Reprovado com a média aritmetica: $mediaAritmetica";
}

echo "<br>";

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;

$peso1 = 2;
$peso2 = 4;
$peso3 = 6;

$numerador = ($prova1 * $peso1) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = $peso1 + $peso2 + $peso3;
$mediaPonderada = $numerador / $denominador;

if ($mediaPonderada >= 7) {
    echo "O aluno foi Aprovado com a média ponderada: $mediaPonderada";
}
else if ($mediaPonderada >= 5) {
    echo "O aluno está em Recuperação com a média ponderada: $mediaPonderada";
}
else {
   echo "O aluno está em Reprovado com a média ponderada: $mediaPonderada";
}

echo "<br>";

$prova1 = 10;
$prova2 = 10;
$prova3 = 10;

$numerador = 3; // quantidade de provas
$denominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3);
$mediaHarmonica = $numerador / $denominador;

if ($mediaHarmonica >= 7) {
    echo "O aluno foi Aprovado com a média harmonica: $mediaHarmonica";
}
else if ($mediaHarmonica >= 5) {
    echo "O aluno está em Recuperação com a média harmonica: $mediaHarmonica";
}
else {
   echo "O aluno está em Reprovado com a média harmonica: $mediaHarmonica";
}

echo "<br>";
