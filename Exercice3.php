<?php

echo "Racine de l'équation du 2nd degré\n Y = ax² + bx + c\n\n";

// Ici ont fais définir à l'utilisateur les valeurs
$a = readline('Quelle est la valeur de a : ');
$b = readline('Quelle est la valeur de b : ');
$c = readline('Quelle est la valeur de c : ');

// Calcul du discriminant
$delta = $b*$b - 4*$a*$c;

// Si delta est positif, il y a deux racines réelles distinctes
if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2*$a);
    $x2 = (-$b - sqrt($delta)) / (2*$a);
    echo "L'équation possède 2 racines distinctes :\nDelta = ". $delta ."\nx1 = {$x1} \n x2 = {$x2}\n";
}

// Si delta est nul, il y a une racine double
elseif ($delta == 0) {
    $x = -$b / (2*$a);
    echo "L'équation possède une racine double :\nDelta = " .$delta. "\nX1 = X2 = {$x}\n";
}

// Si delta est négatif, il n'y a pas de racine réelle
else {
    echo "L'équation e possède pas de racine réelle.\nDelta = ". $delta ."\n";
}

$choix=readline('Voulez-vous continuer ?');

// Ici on fais une boucle pour le repeat

while($choix=='o'){
    // Coefficients de l'équation du deuxième degré
$a = readline('Quelle est la valeur de a : ');
$b = readline('Quelle est la valeur de b : ');
$c = readline('Quelle est la valeur de c : ');

// Calcul du discriminant
$delta = $b*$b - 4*$a*$c;

// Si delta est positif, il y a deux racines réelles distinctes
if ($delta > 0) {
    $x1 = (-$b + sqrt($delta)) / (2*$a);
    $x2 = (-$b - sqrt($delta)) / (2*$a);
    echo "L'équation possède 2 racines distinctes :\nDelta = ". $delta ."\nx1 = {$x1} \n x2 = {$x2}\n";
}

// Si delta est nul, il y a une racine double
elseif ($delta == 0) {
    $x = -$b / (2*$a);
    echo "L'équation possède une racine double :\nDelta = " .$delta. "\nX1 = X2 = {$x}\n";
}

// Si delta est négatif, il n'y a pas de racine réelle
else {
    echo "L'équation ne possède pas de racine réelle.\nDelta = ". $delta;
}
$choix=readline('Voulez-vous continuer ?');
}
echo "Au revoir et à bientôt";
?>
