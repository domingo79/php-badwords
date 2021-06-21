<?php
$testo = 'Sei carino
Sei simpatico
Se vuoi vieni a casa ti presento i miei
Tu mi presenti i tuoi, non fare la puttana
Canti alle jam? Non fare la puttana
Fuggi da me? Non fare la puttana
Ancora mi cerchi? Non fare la puttana
Tu speri ci sia? Non fare la puttana
Di meglio non hai, non fare la puttana
Chi ti ascolta mai? Non fare la puttana
Ti guardi alle spalle? Non fare la puttana
Ti sparano alle palle, non fare la puttana
Io me ne sbatto della tua recensione
Intorno al mio disco monti una recinzione
Io faccio sci nautico sulla tua pozione
Vorresti vedermi in ebollizione
Ogni volta che c\'è qualcuno che fa il rap
Io prendo una fionda e mi lancio a lezioni di step
Almeno guardo un po\' di culo in vista con paillettes
Al posto di \'sti culi ciccioni come una crêpe
Non c\'è…';

$name = $_GET["name"];
$censura = str_replace($name, '***', $testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<h2>Testo originale</h2>
<p> <?php var_dump($testo); ?></p>

<p>Censuro subito la parola: <?php echo $name ;?></p>

<h2>Testo censurato</h2>
<p> <?php var_dump($censura); ?></p>


</body>
</html>