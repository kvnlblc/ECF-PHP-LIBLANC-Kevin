<?php

echo "              ********************* Table de Multiplication********************* \n\n";

// ont défini $nombre qui va servire à garder notre valeur en mémoire

$nombre = readline('Enter le nombre pour lequel vous voulez la table de multiplication : ');
for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat\n";
}

$choix=readline('Voulez-vous continuer ?');

// Ici on fais une boucle pour le repeat

while($choix == 'o'){
    $nombre = readline('Enter le nombre pour lequel vous voulez la table de multiplication : ');
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
        
            echo "$nombre x $i = $resultat\n";
        }
        
        // ont demande à l'utilisateur si il souhaite refaire un calcul
        $choix=readline('Voulez-vous continuer ?');

    }


?>