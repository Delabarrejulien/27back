<?php

$week=['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

// $month=['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'décembre'];


if (isset($_GET['month'])&&(isset($_GET['year']))){
    $month=$_GET['month'];
    $year=$_GET['year'];
} else{

    $month=1;
    $year=1981;
}




//jours de dédut du mois

$dateStart = date("N", mktime(0, 0, 0, $month, 1 ,$year));


//nombre de jours du mois

$nbdays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

//jours de fin de moi 
setlocale(LC_TIME, 'fra_fra.UTF8');

// $dateEnd = strftime("%A %d %B %Y", mktime(0, 0, 0, $month ,$nbdays, $year));
$dateEnd = date("N", mktime(0, 0, 0, $month, $nbdays ,$year));

var_dump($dateEnd);

//boucle

$calendar = [];

for ( $i=0;$i<$dateStart -1;$i++)
{
    $calendar[]=null;
}
for ( $j=0; $j<$nbdays; $j++)
{
    $calendar[]=$j+1;

}
for ( $k=$dateEnd; $k<7; $k++)
{
    $calendar[]=null;
}



var_dump($calendar);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>calendar</title>
</head>

<body>

    <form action="" method="get">

        <select name="month">
            <option value="1">Janvier</option>
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
        <select name="year">
            <option value="1981">1981</option>
            <option value="2020">2020</option>
        </select>

        <input type="submit" value="Valider" />

        <br>


        <table>



            </th> calendrier</th>

            <tr>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </tr>
            <tr>
                <?php

                foreach( $calendar as $key => $value )

                {
                    echo '<td>'.$value.'</td>';
                }

               
               ?>

            </tr>
            <tr>
                <?php


                for($datecalendar= 0 ;$)


                for($colums= 0 ;$colums < 7;$colums++)
                {
                    
                echo '<td>00</td>';
                }
                ?>
            
        </table>

        <br>
        <br>

        <?php
    
             

        ?>




    </form>



</body>

</html>