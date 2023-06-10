<?php
    //pour avoir plus d'information sur un variable  on utilise print_r()
    /*$eleve = [
        'nom'=>'Fall',
        'prenom'=>'Thierno',
        'notes'=>[10,20,15]
    ];
    $eleve['prenom']='Souleymane';
    $eleve['notes'][] = 16; // si on ne mets pas d'indice le programme rajouterai la valeur à la fin du tableau
    $eleve[]='CM2-A'; 
    print_r($eleve);*/
    $classe=[
        [
            'nom'=>'Fall',
            'prenom'=>'Souleymane',
            'notes'=>[10,20,15]
        ],
        [
            'nom'=>'Lo',
            'prenom'=>'Thierno',
            'notes'=>[20,10,10]
        ]
        ];
        echo $classe[1]['notes'][1];
?>