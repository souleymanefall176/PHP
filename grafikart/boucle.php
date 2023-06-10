<?php
$eleves = [
    'L1GL' => ['jules','cheikh'],
    'L2GL' =>['moussa' , 'ousseynou']
];
foreach ($eleves as $classe => $listeEleves){
    echo $classe . ' : ' . "\n";
    foreach ($listeEleves as $eleve){
        echo "- $eleve\n";
    }
    echo "\n";
}
?>