<?php
//readline permet de saisir
//le (int) permet de convertir la valeur à saisir en entier
$note = (int)readline('Entrez votre note : ');
if ($note > 10) {
    echo 'Bravo vous avez eu la moyenne';
}elseif ($note === 10){
    echo 'Vous avez juste la moyenne';
} else {
    echo 'Dommage vous n\'avez pas eu la moyenne';
}
echo "\n";
//switch case
$action = (int)readline('Entrer un action (1 : j\'attaque, 2 : je defends, 3 : passer mon tour) : ');
switch($action){
    case 1:
        echo 'Vous avez choisi d\'attaquer';
        break;
    case 2:
        echo 'Vous avez choisi de defendre';
        break;
    case 3:
        echo 'Vous avez choisi de passer votre tour';
        break;
    default :
        echo 'Action indisponible';
}
echo "\n";
$heure = (int)readline('Entrez une heure : ');
if(($heure>=9 && $heure<=12) || ($heure>=14 && $heure<=17)){
    echo 'Le magasin sera ouvert';
}else{
    echo 'Le magasin sera fermé';
}
?>