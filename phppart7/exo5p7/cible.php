<p>Bonjour !</p>

<p>vous vous appellez </p>

    <?php
       if (isset($_GET['choix'])&& ($_GET['name']) && isset($_GET['surname'])){

            echo $_GET['choix'].' '. $_GET['name'].' '.$_GET['surname']; 
            }
        else{
            echo 'error';
        }

    ?>

<p><a href="exo5p7.php">clique ici</a></p>