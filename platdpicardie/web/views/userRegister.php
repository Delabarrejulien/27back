<?php
var_dump($errorsArray);

?>

<h1 class="col-8 md-5 mb-3  mx-auto">Bienvenue sur la page d'inscription de Plat d'Picardie !</h1>

<form method="POST">
    <!-- nom -->
    <div class="col-md-4 mb-3 mt-5 mx-auto color primary ">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z-éèêëàâäôöûüç' ]+" required
            value="<?= $name ?? ''?>">
        <div id="name_error" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
    </div>


    <!-- prénom -->
    <div class="col-md-4 mb-3  mx-auto">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname" pattern="[A-Za-z-éèêëàâäôöûüç' ]+"
            required value="<?= $firstname ?? ''?>">
        <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
    </div>

    <!-- date de naissance -->
    <div class="col-md-4 mb-3  mx-auto">
        <label for="birthDate" class="form-label">Date de naissance</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" required
            value="<?= $birthDate ?? ''?>">
        <div id="birthDate_error" class="form-text"><?= $errorsArray['birthDate_error'] ?? ''?></div>
    </div>

    <!-- code postal -->
    <div class="col-md-4 mb-3  mx-auto">
        <label for="postal" class="form-label">code postal.</label>
        <input type="text" class="form-control"  id="postal" name="postal" required value=" <?= $postal ?? ''?>"></div>
    <div id="postal_error" class="form-text"><?= $errorsArray['postal_error'] ?? ''?></div>
    

    <!-- Adresse mail -->
    <div class="col-md-4 mb-3  mx-auto">
        <label for="email" class="form-label">email.</label>
        <input type="email" class="form-control" id="email" name="email"
            pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}+" required value="<?= $email ?? ''?>">
        <div id="email_error" class="form-text"><?= $errorsArray['email_error'] ?? ''?></div>
    </div>

    <!-- pseudo -->
    <div class="col-md-4 mb-3 mx-auto">
        <label for="pseudo">Pseudo.</label>
        <input type="text" class="form-control" id="pseudo" placeholder="surnom" name="pseudo" required value="<?= $pseudo ?? ''?>">

    </div>

    <!-- mot de passe -->
    <div class="col-md-4 mb-3 mx-auto">
        <label for="mdp">Un mot de passe contenant au moins 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial et une longueur d'au moins 10 caractéres</label>
        <input type="text" class="form-control" id="mdp"
             name="mdp" required value="<?= $mdp ?? ''?>">

    </div>
    
    <!-- Confirmer mot de passe -->
    <div class="col-md-4 mb-3 mx-auto">
        <label for="confirmMdp">Confirmer mot de passe.</label>
        <input type="text" class="form-control" id="confirmMdp" name="confirmMdp"required value="<?= $confirmMdp ?? ''?>">

    </div>

    <div class="col-md-4 mb-3 mx-auto">
        <button type="submit" class="btn btn-primary">s'inscrire !</button>
    </div>
</form>
