<?php
$notes = [];
$action = null;
while($action !== 'fin'){
    $action = readline('Saisir une nouvelle note (ou taper \'fin\' pour terminer) : ');
    if($action !== 'fin'){
        $notes[] = (int)$action;
    }
    
}
echo 'La liste des notes : ' . "\n";
foreach($notes as $note){
    
    echo '-' . $note . "\n";
}



?>