<?php
setlocale(LC_TIME, 'fra_fra.UTF8');

$datetime=strftime("%A %d %B %Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo3p9</title>
</head>
<body>

<p> Nous sommes le: </p>
<br>
<?= $datetime;?>



   
</body>
</html>