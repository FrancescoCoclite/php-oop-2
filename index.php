<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito... $c = new CreditCard..; $user->insertCreditCard($c);
BONUS: Gestite eventuali eccezioni che si possono verificare es: carta di credito scaduta. -->


<?php

// require_once 'User.php';
require_once 'Prime.php';

$pippo = new Prime('pippo','rossi');
$pippo->setStatus('prime');
$pippo->setSpedizione($pippo->getStatus());




$pluto = new Prime('pluto','verdi');
$pluto->setStatus('');
$pluto->setSpedizione($pluto->getStatus());

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

    <h2><?php echo $pippo->getFullName();?></h2>
    <p><?php echo 'Status: ' .$pippo->getStatus(); ?></p>
    <p><?php echo 'Spedizione: ' .$pippo->setSpedizione($pippo->getStatus()); ?></p>

    <h2><?php echo $pluto->getFullName();?></h2>
    <p> Status: <?php echo $pluto->getStatus();?></p>
    <p> Spedizione: <?php echo $pluto->getSpedizione($pluto->getStatus()); ?></p>
    
</body>
</html>