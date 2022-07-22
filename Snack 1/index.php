<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<?php

$matches = [
    [
    'teamHost' => 'Milano',
    'teamGuest' => 'Kinder',
    'score' => '70 - 93',
    ],
    [
    'teamHost' => 'Cetarra',
    'teamGuest' => 'Vercelli',
    'score' => '72 - 90',
    ],
    [
    'teamHost' => 'Barilla',
    'teamGuest' => 'Cuneo',
    'score' => '120 - 102',
    ],
];

// var_dump($teams);

for($i=0; $i<count($matches); $i++){
    $thisMatch = $matches[$i];
    echo $thisMatch['teamHost'] . " - " . $thisMatch['teamGuest'] . " | " . $thisMatch['score'] . '<br>' ;
}

?>



</body>
</html>