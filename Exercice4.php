<?php
$tableau = array("H" => "Hydrogène",
  "He" => "Hélium",
  "P" => "Phosphore",
  "V" => "Vanadium",
  "Pb" => "Plomb",
  "I" => "Iode",
  "Kr" => "Krypton",
  "X" => "Xénon",
  "Rn" => "Radon",
  "Zr" => "Zirconium"
);

echo "******** Tableau périodique des éléments chimiques ********\n\n";

$choix = readline('Quel est votre choix (1= Trier en ordre croissant | 2= Tréer en ordre décroissant) : ');
while($choix == '1'){
    asort($tableau);
    foreach($tableau as $cle => $valeur) {
        print_r($tableau);
    }
    $choix = readline('Quel est votre choix (1= Trier en ordre croissant | 2= Tréer en ordre décroissant) : ');
}

while($choix == '2'){
    arsort($tableau);
    foreach($tableau as $cle => $valeur) {
        print_r($tableau);
    }
    $choix = readline('Quel est votre choix (1= Trier en ordre croissant | 2= Tréer en ordre décroissant) : ');
}

?>
