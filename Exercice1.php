<?php
// Message de départ
echo "              *********************\n";
echo "              CALCUL SUR LE CERCLE\n";
echo "              *********************\n";
// ont défini $rayon qui va servire à garder notre valeur en mémoire
$rayon = readline('Quel est le rayon du cercle : ');
$circonference = 2 * M_PI * $rayon;
$surface = M_PI * pow($rayon, 2);
echo "Sa circonférence est de " . number_format($circonference,2) . "\n";
        echo "Sa surface est : " . number_format($surface,2) . "\n";
        $choix=readline('Voulez-vous faire un autre calcul (O/N) :');

// Ici on fais une boucle pour le repeat

while($choix == 'o'){
        // Définir la valeur du rayon du cercle
        $rayon = readline('Quel est le rayon du cercle : ');
        // Calculer la circonférence du cercle
        $circonference = 2 * M_PI * $rayon;
        // // Calculer la surface du cercle
        $surface = M_PI * pow($rayon, 2);
        // // Afficher les résultats
        echo "Sa circonférence est de " . number_format($circonference,2) . "\n";
        echo "Sa surface est : " . number_format($surface,2) . "\n";
        // ont demande à l'utilisateur si il souhaite refaire un calcul
        $choix=readline('Voulez-vous faire un autre calcul (O/N) :');

}
echo "Au revoir et à bientôt";

?>
