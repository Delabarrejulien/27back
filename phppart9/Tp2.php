<?php


$first = getdate(mktime(0,0,0, $month, 1, $years));//la date du premier jour du mois

// $indexDays = ($first['wday']==0?6:['wday']-1); //numero d'ordre du 1er jour du mois ['wday']

// $daysNumber = date("t",mktime(0,0,0,$month,1,$years));//nombre de jour du mois "t"





// tableau vide

// for ($i = 0; $i <= 7; $i++)
// {
//     for ($j = 0; $j <= 7; $j++)
//     {
//         $array_month[$i][$j]=" ";
//     }
// }

// //remplir avec les valeurs mois et jours

// $array_month[0] = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');

// $week = 1 ;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendar</title>
</head>
<body>
<form action="" method="get">

    <select name="month">
        <option value="1" selected="selected">Janvier</option>
        <option value="2">Février</option>
        <option value="3">Mars</option>
        <option value="4">Avril</option>
        <option value="5">Mai</option>
        <option value="6">Juin</option>
        <option value="7">Juillet</option>
        <option value="8">Août</option>
        <option value="9">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">décembre</option>
    </select>
    <select name="Years">
        <option value="1981">1981</option>
        <option value="2020">2020</option>
    </select>

    <input type="submit" value="Valider" />

<?= $first ; ?>

</form>
   
</body>
</html>