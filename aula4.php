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

