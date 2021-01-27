<?php
if (isset($_GET['startDate']) && isset($_GET['endDate']))
{
	echo 'Début ' . $_GET['startDate'] . 'fin ' . $_GET['endDate'] . ' !';
}
else
{
	echo 'Il faut un début et une fin ... ';
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



    
</body>
</html>