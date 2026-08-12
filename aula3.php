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

$numero = 10; // ler numero do usuario (Fixo || mock)

/**
 * Utilizar o operador modulo %
 * para descobrir se o numero informado pelo usuario é par
 * se for par exibir é par e o numero lido. Senao, exibir é impar e o numero lido.
 */

