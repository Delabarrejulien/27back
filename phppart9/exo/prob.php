<?php

 echo str_repeat("**</br>", 3);

 echo str_repeat("****</br>", 3);

 
 $input = "**";
 
 echo str_pad($input, 12, "**", STR_PAD_LEFT);

//  ---------------------------------------

//  2 élèves obtiennent 7.5
// 1 élèves obtient 9
// 3 élèves 6
// 2 élèves 8
// 1 élève était absent
// 2 élèves obtiennent 6.5

 $note=[7.5,7.5,9,6,6,6,8,8,0,6.5,6.5];

 $moyenne = array_sum($note)/count($note);

 

 asort($note);
 var_dump($note);

 (array_slice($note, 0, 1));//affiche les 5 premiers
 (array_slice($note, -1));//affiche les 5 derniers

 
 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prob</title>
</head>
<body>
<?=var_dump($moyenne);?>
<br>

</body>
</html>