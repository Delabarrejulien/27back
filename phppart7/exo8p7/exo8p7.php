<p>
    Veuillez remplir les champs :
</p>

<form action="cible.php" method="post" enctype="multipart/form-data">
<p>
    <select name="choix">
        <option value="Mr" selected="selected">Monsieur</option>
        <option value="Md">Madame</option>
    </select>
    <input type="text" name="name" />
    <br>
    <input type="text" name="surname" />
    <br>
    <input type="file" name="fichier"/>
    <br>
    <input type="submit" value="Valider" />
</p>
</form>