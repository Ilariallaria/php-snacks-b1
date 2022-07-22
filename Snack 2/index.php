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
 
 <?php
   $userName = $_GET['name'];
   $userMail = $_GET['mail'];
   $userAge = $_GET['age'];
   echo ($userName . '<br>'. $userMail . '<br>' . $userAge . '<br>');

   $response;
   if(
    strlen($userName < 3) && strpos($userMail, '.') !== false && 
    strpos($userMail, '@') !== false && is_numeric($userAge) !== false && $userAge != 0) {
    echo $response = 'Accesso riuscito';
   } else {
    echo $response = 'Accesso negato';
   }
 
 ?>


</body>
</html>