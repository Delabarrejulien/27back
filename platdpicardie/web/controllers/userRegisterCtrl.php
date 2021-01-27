<?php

$errorsArray = array();


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //name

    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));


        if(!empty($name)){
 
            $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç\' ]+$/',$name);

            if($testRegex == false){
                $errorsArray['name_error'] = 'Le nom n\'est pas valide';
            }
        }
    else{
        $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
    }

    //firstname

    $firstname = trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    if(!empty($firstname)){
        
        $testRegex = preg_match('/^[A-Za-z-éèêëàâäôöûüç\' ]+$/',$firstname);

        if($testRegex == false){
            $errorsArray['firstname_error'] = 'Le prénom n\'est pas valide';
        }
    }
    else{
        $errorsArray['firstname_error'] = 'Le champ n\'est pas rempli';
    }

     // adresse
    
    $postal = trim(filter_input(INPUT_POST, 'postal', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

    if(!empty($postal)){
        
        $testRegex = preg_match('/^[0-9]{5}$/',$postal);

        if($testRegex == false){
            $errorsArray['postal_error'] = 'Le champ n\'est pas valide';
        }
    }else{
        $errorsArray['postal_error'] = 'Le champ n\'est pas rempli';
    }


      //email


    $email = trim(filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL));

    if(!empty($email)){
        
        $testRegex = filter_var($email,FILTER_VALIDATE_EMAIL);


        if($testRegex == false){
            $errorsArray['email_error'] = 'Le date n\'est pas valide, le format attendu est YYYY-MM-JJ';
    }
    }
    else{
        $errorsArray['email_error'] = 'Le champ n\'est pas rempli';
    }

      //pseudo

    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

 
    if(!empty($pseudo)){
   
     $testRegex = preg_match('/^[A-Za-z0-9_-]{3,15}$/',$pseudo);

    

     if($testRegex == false){
        $errorsArray['pseudo_error'] = 'Le champ n\'est pas valide';
    }
    }
    else{
    $errorsArray['pseudo_error'] = 'Le champ n\'est pas rempli';
    }

      //mdp/confirmMdp


    $mdp = trim(filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
    $confirmMdp = trim(filter_input(INPUT_POST, 'confirmMdp', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));

  if(!empty($mdp) && !empty($confirmMdp)){

    $testRegex = preg_match('/^^(?=.{10,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$/',$mdp);
    if($testRegex == false){
        $errorsArray['mdp'] = 'Le mdp n\'est pas valide, le format est erroné';
    }
    
    if($mdp != $confirmMdp){
        $errorsArray['confirmMdp'] = 'Les mots de passe ne correspondent pas';
    }
    }
    else{
    $errorsArray['mdp_error'] = 'Les champs password sont vides';
    }



        //Enregistrement en BDD
        if(empty($errorsArray)){
        //OK, j'enregistre
    
         // header('location: /index.php');
    }
}




include("../views/templates/header.php");

include("../views/userRegister.php");

include("../views/templates/footer.php");

?>