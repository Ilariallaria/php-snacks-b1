<!-- Snack 2
Passare come parametri GET: name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
1- che name sia più lungo di 3 caratteri
2- che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<h2>Inserisci nell' url: ?name='tuo nome' && mail='tua mail? && ege='tua età', poi premi Invio</h2>

<?php
    // prendo i dati dall'url
   $userName = $_GET['name'];
   $userMail = $_GET['mail'];
   $userAge = $_GET['age'];
    // stampo i dati presi
   echo ( 'name:' . $userName . '<br>'. 'mail:' . $userMail . '<br>' . 'age:' . $userAge . '<br>');

//  variabile che conterrà il messaggio di esito del log-in
    $response;

    // controllo la presenza dei dati richiesti
   if( !$userName || !$userMail || !$userAge){
    // se non sono stati inserirti tutti i dati necessari, avviso l'utente
    echo 'NON HAI INSERITO TUTTI I DATI NECESSARI!';
    // altrimenti, controllo l'esattezza dei dati
   } else{
        if(
            // se i dati sono corretti stampo esito positivo
            strlen($userName < 3) && strpos($userMail, '.') !== false && 
            strpos($userMail, '@') !== false && is_numeric($userAge) !== false && $userAge > 0) {
            echo $response = 'Accesso riuscito';
        } else {
            // altrimenti, stampo esito negativo
            echo $response = 'Accesso negato';
        }
   }

    

?>


</body>
</html>