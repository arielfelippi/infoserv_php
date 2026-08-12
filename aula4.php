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
$numero = 5;
$fatorial = 0; // vai ser alterado o valor dentro do laço(120)

for($numero = 5; $numero > 0; $numero--) {
    $fatorial = $numero * 5;
}

echo "o fatorial de $numero é: $fatorial"; 
