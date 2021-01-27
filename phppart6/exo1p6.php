<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) // On a le nom et le prénom
{
	echo 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo1p6</title>
</head>
<body>

<?=var_dump($_GET);



    
</body>
</html>