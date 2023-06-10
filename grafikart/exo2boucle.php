<?php
$creneaux = [];

while(true){
    $debut = (int)readline("Saisir l'heure d'ouverture : ");
    $fin = (int)readline("Saisir l'heure de fermeture : ");
    if($debut >= $fin){
        echo("L'heure d'ouverture ($debut) ne doit pas etre superieure ou egale à l'heure de fermeture ($fin).\n");
    }else{
        $creneaux[] = [$debut,$fin];
        $action = readline("Voulez vous saisir un nouveau creneau (o\\n) : ");
        if($action === 'n'){
            break;
        }

    }
}
echo "Le magasin sera ouvert de : ";
foreach($creneaux as $k => $creneau){
    if($k > 0){
        echo " et de ";
    }
    echo "{$creneau[0]}h à {$creneau[1]}h";
    
   
}
// $heureVisite = (int)readline("Saisire l\'heure de visite : ");
// $creneauTrouve = false;
// foreach($creneaux as $creneau){
    
//     if($heureVisite >=$creneau[0] && $heureVisite < $creneau[1]){
//         $creneauTrouve = true;
//         break;
//     }
   
// }
// if($creneauTrouve === true){
//     echo "Le magasin sera ouvert.\n";
// }else {
//     echo "Le magasin sera ferme.\n";
// }


?>