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
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                
    ?>



<p><a href="exo7p7.php">clique ici</a></p>