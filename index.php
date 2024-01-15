<?php

$paragraph = 'A questa domanda il frate Carmelo incontrato da Abba aveva già risposto:
la libertà non è pane, e la scuola nemmeno. Queste cose basteranno forse per voi Piemontesi: per noi qui no. 
La sinistra salita al potere (1876) interviene a favore dell 
istruzione obbligatoria e per l allargamento del diritto elettorale 
(fondato sul censo) dai seicentomila ai due milioni di cittadini (1882) ma Francesco Crispi prende 
il potere (involvendosi da garibaldino a monarchico e conservatore) per impedire i sommovimenti 
dei contadini che chiedevano la terra e per legarsi alle forze economiche settentrionali. 
Obiettivo di Crispi, ammiratore di Bismarck e fautore dello Stato forte e internazionalmente 
prestigioso —mentre milioni di contadini italiani analfabeti e senza terra erano costretti all 
emigrazione —, era il mantenimento dello Stato borghese egemone, conservatore sul piano sociale, 
opposto alle forze radicali borghesi e poi a quelle progressiste popolari. ';

$badword= $_GET ['badword'];

$safeParagraph = str_replace($badword, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<form action="./index.php" method="GET">

    <label for="badword">inserisci la parola da censurare</label>

    <input type="text" name="badword">

    <button type="submit">invia</button>

</form>


<p>

    <?php

    echo $paragraph;

    ?>

    <br>

    <strong>Il testo è composto da : <?php echo strlen($paragraph); ?> caratteri.</strong>

</p>

<hr>

<p>

    <?php

    echo $safeParagraph;

    ?>

    <br>

    <strong>Il testo è composto da : <?php echo strlen($safeParagraph); ?> caratteri.</strong>

</p>
</body>
</html>

