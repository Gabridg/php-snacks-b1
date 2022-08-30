<?php
/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”;
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$access= false;

if(strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') &&  is_numeric($age)){
    $access = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <label for="mail">Mail:</label>
        <input type="mail" id="mail" name="mail">
        <label for="age">Età:</label>
        <input type="text" id="age" name="age">
        
        <button type="submit">Accedi</button>
    </form>   

    <?php if($access === true) : ?>
        <p>Accesso Riuscito</p>
         <?php else : ?>
            <p>Accesso Negato</p>
        <?php endif; ?>
</body>
</html>