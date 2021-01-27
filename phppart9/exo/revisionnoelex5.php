<?php
$message =  "Bonjour tous le monde";

$monTableau = ["Marc", "Sophie", "Maguy", "Jonathan", "Jennifer","jujul","jacob"];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p> Hello E2N !!! </p>

    <?= $message ?>
    <br>
    <br>


    <?php
        foreach($monTableau as $element)
        {
            echo  $element.' '. strlen($element).' '; 


            if (strlen($element)%2==1){
                
                echo 'impair '. '<br />';
            }
            else{

                echo 'pair '. '<br />';
            }
        }
    ?>
    <br>
    <br>

    <?='le tableau contient '.count ($monTableau).' lignes.';?>
    <br>
    <br>

    <?php
        foreach($monTableau as $element)
        {
            echo strrev($element).'<br/>'; 
        }

    ?>

    <form action="" method='get'></form>



</body>

</html>