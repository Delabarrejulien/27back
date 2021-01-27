<?php
$message =  "Bonjour tous le monde";

$monTableau = ["Marc", "Sophie", "Maguy", "Jonathan", "Jennifer"];


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
    echo 'Bonjour '. $element . '<br />'; 
}    
?>


</body>
</html>