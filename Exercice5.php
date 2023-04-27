<?php
// Ici ont défini le tableau
$tab = array();
for ($i = 0; $i < 10; $i++) {
    $tab[] = rand(20, 100);
}
// Ici ont affiche le tableau
echo "Tableau : ";
print_r($tab);
// Ici ont défini le menu ainsi que les cas en fonction du switch
do {
    echo "\nMenu : \n";
    echo "0. Quitter\n";
    echo "1. Trier le tableau en ordre croissant\n";
    echo "2. Trier le tableau en ordre décroissant\n";
    $choix = readline("Entrez votre choix : ");

    switch ($choix){
        case 1:
            sort($tab);
            echo "Tableau trié en ordre croissant : ";
            print_r($tab);
            break;
        case 2:
            rsort($tab);
            echo "Tableau trié en ordre décroissant : ";
            print_r($tab);
            break;
        case 0:
            echo "Au revoir !\n";
            break;
        default:
            echo "Choix invalide.\n";
            break;
    }
// Ici on fais une boucle pour le repeat

} while ($choix != 0);
