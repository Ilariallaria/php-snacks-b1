<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array
non dovrà contenere lo stesso numero più di una volta -->



<?php
// array vuoto che conterrà i numeri random
$rundomArray = [];

// finchè l'array non raggiungerà i 15 elementi di lunghezza
while(count($rundomArray) < 15) {
    // generiamo un numero random e lo salviamo in una var flag
    $randomNumber = rand();
    // condizione che aggiunge numero all'array solo se il numero non è già presente
    if(!in_array($randomNumber, $rundomArray)) {
        $rundomArray[] = $randomNumber;
    }
}
// stampiamo array
var_dump($rundomArray);

?>