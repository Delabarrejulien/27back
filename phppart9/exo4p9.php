<?php

$datetime = time();
$datetime2 = mktime(15,00,00,8,2,2016);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4p9</title>
</head>
<body>

<p> timestamp actuel : </p>
<br>
<?= $datetime;?>
<br>
<p> timestamp du 2 Août 2016</p>
<br>
<?= $datetime2;?>

   
</body>
</html>