<?php

require(__DIR__.'/user.php');


$utenti = [
    [
        'nome' => 'Leo',
        'cognome' => 'Messi',
        'email' => 'lapulce@inda.com',
    ],
    [
        'nome' => 'Andonio',
        'cognome' => 'Conte',
        'email' => 'parrucchino@inda.com',
    ],
    [
        'nome' => 'Ziang',
        'cognome' => 'Ming',
        'email' => 'chinatown@inda.com',
    ],
];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Dati Inda</title>
</head>

<body>
    <h1>Dati dei lavoratori del circo : </h1>
    <ul>
        <?php foreach ($utenti as $utente) { ?>
            <?php $singoloUtente = new User($utente['nome'], $utente['cognome'], $utente['email']); ?>
            <li> <?php echo $singoloUtente->userData() . '<br>'; ?> </li>
        <?php } ?>
    </ul>
</body>

</html>