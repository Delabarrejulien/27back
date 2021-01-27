<body id="inscription">
    

<h1 class="col-8 md-5 mb-3  mx-auto">Bienvenue sur la page d'inscription de Plat d 'Picardie !</h1>

        <form method="POST">
            <!-- nom -->
            <div class="col-md-4 mb-3 mt-5 mx-auto ">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z-éèêëàâäôöûüç' ]+"
                    required value="<?= $name ?? ''?>">
                <div id="name_error" class="form-text"><?= $errorsArray['name_error'] ?? ''?></div>
            </div>


            <!-- prénom -->
            <div class="col-md-4 mb-3  mx-auto">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                    pattern="[A-Za-z-éèêëàâäôöûüç' ]+" required value="<?= $firstname ?? ''?>">
                <div id="firstname_error" class="form-text"><?= $errorsArray['firstname_error'] ?? ''?></div>
            </div>

            <!-- date de naissance -->
            <div class="col-md-4 mb-3  mx-auto">
                <label for="birthDate" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" id="birthDate" name="birthDate" pattern="" required
                    value="<?= $birthDate ?? ''?>">
                <div id="birthDate_error" class="form-text"><?= $errorsArray['birthDate_error'] ?? ''?></div>
            </div>

            <!-- Adresse -->
            <div class="col-md-4 mb-3  mx-auto">
                <label for="adress">Adresse.</label>
                <textarea class="form-control" placeholder="Indiquez votre adresse" id="adress" name="adress"
                    style="height: 100px"><?= $adress ?? ''?></textarea>
            </div>

            <!-- Adresse mail -->
            <div class="col-md-4 mb-3  mx-auto">
                <label for="email" class="form-label">email.</label>
                <input type="email" class="form-control" id="email" name="email"
                    pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.[a-zA-Z.]{2,15}+" required value="<?= $email ?? ''?>">
                <div id="email_error" class="form-text"><?= $errorsArray['email_error'] ?? ''?></div>
            </div>

            <!-- psuedo -->
            <div class="col-md-4 mb-3 mx-auto">
                    <label for="pseudo">Pseudo.</label>
                    <input type="text" class="form-control" id="pseudo" placeholder="Psuedo" required value="<?= $pseudo ?? ''?>">
                    
                </div>

                <!-- mot de passe -->
                <div class="col-md-4 mb-3 mx-auto">
                    <label for="mdp">Mot de passe.</label>
                    <input type="text" class="form-control" id="mdp" placeholder=" 8 caractère dont 1 majuscule, 1 chiffre, 1 spécial"  required value="<?= $mdp ?? ''?>">

                </div>
            <!-- Confirmer mot de passe -->
                <div class="col-md-4 mb-3 mx-auto">
                    <label for="confirmMdp">Confirmer mot de passe.</label>
                    <input type="text" class="form-control" id="confirmMdp"  required value="<?= $confirmMdp ?? ''?>">

                </div>

            <div class="col-md-4 mb-3 mx-auto" >
            <button type="submit" class="btn btn-primary">s'inscrire !</button>
            </div>
        </form>
    </div>
    </body>