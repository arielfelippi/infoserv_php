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
    $fatorial *= $numero;
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

echo "<br>";

/**
 * Calcular e exibir todos os numeros pares de 2 até 50.
 * Sem pular de 2 em 2 no FOR;
 * 
 * Dica: utilizar formula do numeros pares.
 */

echo "<br>";

/**
 * Calcular e exibir os 5 primeiros numeros primos.
 * 
 * Dica: utilizar formula do numeros pares.
 */

echo "<br>";
