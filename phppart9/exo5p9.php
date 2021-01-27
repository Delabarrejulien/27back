<?php
$date1 = "16-05-2016"; //date fr le 16 mai 2016
$date2 = date("d-m-Y"); // date du jour

// On transforme les 2 dates en timestamp
$date3 = strtotime($date1);
$date4 = strtotime($date2);
 
// On récupère la différence de timestamp entre les 2 précédents
$nbJoursTimestamp = $date4 - $date3;
 
// ** Pour convertir le timestamp (exprimé en secondes) en jours **
// On sait que 1 heure = 60 secondes * 60 minutes et que 1 jour = 24 heures donc :
$nbJours =round( $nbJoursTimestamp/86400); // 86 400 = 60*60*24
 
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5p9</title>
</head>
<body>

<?= "Nombre de jours : ".$nbJours;?>

   
</body>
</html>