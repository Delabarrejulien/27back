<?php

$errorsArray = array();

//On ne controle que s'il y a des données envoyées 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));


if(!empty($name)){
    // On test la valeur
    $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç\' ]+$/',$name);

    if($testRegex == false){
        $errorsArray['name_error'] = 'Le nom n\'est pas valide';
    }
}else{
    $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
}

     $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));



    //On test si le champ n'est pas vide
    if(!empty($firstname)){
        // On test la valeur
        $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç\' ]+$/',$firstname);

        if($testRegex == false){
            $errorsArray['firstname_error'] = 'Le prénom n\'est pas valide';
        }
    }else{
        $errorsArray['firstname_error'] = 'Le champ n\'est pas rempli';
    }



    $birthDate = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    //On test si le champ n'est pas vide
    if(!empty($birthDate)){
        // On test la valeur
        $testRegex = preg_match("/^\d{4}-\d{2}-\d{1,2}$/",$birthDate);

        // On peut aller plus loin sur le test de la date à cet endroit

        if($testRegex == false){
            $errorsArray['birthDate_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['birthDate_error'] = 'Le champ n\'est pas rempli';
    }



    $email = trim(filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL));

    //On test si le champ n'est pas vide
    if(!empty($email)){
        // On test la valeur
        $testRegex = filter_var($email,FILTER_VALIDATE_EMAIL);


        if($testRegex == false){
            $errorsArray['email_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
        }
    }else{
        $errorsArray['email_error'] = 'Le champ n\'est pas rempli';
    }

}


$psuedo = trim(filter_input(INPUT_POST, 'psuedo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

 //On test si le champ n'est pas vide
 if(!empty($psuedo)){
    // On test la valeur
    $testRegex = preg_match('/^[a-zA-ZÀ-ÿ ]{2,20}$/',$psuedo);

    // On peut aller plus loin sur le test de la date à cet endroit

    if($testRegex == false){
        $errorsArray['psuedo_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
    }
}else{
    $errorsArray['psuedo_error'] = 'Le champ n\'est pas rempli';
}


$mdp = trim(filter_input(INPUT_POST, 'psuedo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    $confirmMdp = trim(filter_input(INPUT_POST, 'confirmpsuedo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

  //On test si le champ n'est pas vide
  if(!empty($password) && !empty($passwordCheck)){

    $testRegex = preg_match('/^[a-zA-ZÀ-ÿ ]{2,20}$/',$psuedo);

    if($testRegex == false){
        $errorsArray['psuedo_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
    }
      
    // On test la valeur
    if($password != $passwordCheck){
        $errorsArray['password_error'] = 'Les mots de passe ne correspondent pas';
    }
}else{
    $errorsArray['password_error'] = 'Les champs password sont vides';
}


 //Enregistrement en BDD
 if(empty($errorsArray)){
    //OK, j'enregistre
    header('location: /index.php');
}

?>