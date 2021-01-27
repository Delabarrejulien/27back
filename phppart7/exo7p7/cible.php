<p>Bonjour !</p>

<p>vous vous appellez </p>

    <?php
       if (isset($_POST['choix'])&& ($_POST['name']) && isset($_POST['surname'])){

            echo $_POST['choix'].' '. $_POST['name'].' '.$_POST['surname']; 
            }
        else{
            echo 'error';
        }



        if (isset($_FILES['fichier']['name']) && isset ($_FILES['fichier']['type']))
        {
            echo '<br/><br/> '. $_FILES['fichier']['name'] .' est un fichier '. $_FILES['fichier']['type'];
 
        }
    ?>



<p><a href="exo7p7.php">clique ici</a></p>