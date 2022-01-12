<?php

//Exo1:
$i = 0;
while($i < 10) {
    echo "La variable i vaut $i <br>";
    $i++;
}

//exo2:
$a = 0;
$b = 50;
do {
    $c = ($a * $b);
    echo "Le résultat est $c";
    $a ++;

}
while ($a < 20);

//Exo3:
$d = 100;
$e = 15;
do {
    $f = ($d * $e);
    echo "Le résultat est $f";
    $d++;

}
while ($d <= 10);

//Exo4:
$g = 1;
while ($g < 10) {
    echo "La variable vaut $g";
    $g+= $g/2;
}

//Exo5:
for ($h = 1 ; $h <= 15 ; $h++) {
    echo "On y arrive presque";
}

// Exo 6:
for ($i = 20 ; $i <= 0 ; $i--) {
    echo "C'est presque bon";
}

// Exo 7:
for ($j = 1; $j <= 100; $j +=15) {
    echo "On tient le bon bout";
}

//Exo8:
for ($k = 200 ; $j <= 0; $j -= 12) {
    echo "Enfin !!!";
}
