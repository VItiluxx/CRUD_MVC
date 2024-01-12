<!---------------debut: CORPS DE LA PAGE  --------------------------> 

<h1>Liste des utilisateurs</h1>

<form action="" method="get">
    <table border="2px solide black">
        <tr><th>NOM</th><th>PRENOM</th><th>AGE</th><th>FONCTION</th></tr>

    <?php foreach($liste as $user): ?>
        <tr>
        <input type="hidden" name="id" value="<?=$user->id_use;?>">
        <td><?=$user->nom_use;?></td>
        <td><?=$user->prenom_use;?></td>
        <td><?=$user->age_use;?></td>
        <td><?=$user->fonction_use;?></td>
        <td><a href="<?=HOST;?>traitements.php?id=<?=$user->id_use;?>&&action=modif"><input type="button" name="traitements" value="MODIFIER"/></a></td>
        <td><a href="<?=HOST;?>traitements.php?id=<?=$user->id_use;?>&&action=supp"><input type="button" name="traitementss" value="SUPPRIMER"/></a></td>
        </tr>    
    <?php endforeach; ?>

    </table>
</form>
  
<h1>Ajouter un utilisateur</h1>

<form action="" method="post">

    <div>
        <label for="nom">NOM : </label>
        <input type="text" name="nom" id="nom">
    </div>

    <div>
        <label for="prenom">PRENOM : </label>
        <input type="text" name="prenom" id="prenom">
    </div>

    <div>
        <label for="age">AGE : </label>
        <input type="number" name="age" id="age">
    </div>

    <div>
        <label for="fonction">FONCTION : </label>
        <input type="text" name="fonction" id="fonction">
    </div>

    <div>
        <input type="submit" name="envoyer" id="envoyer" value="Envoyer">
    </div>

</form>

<!----------------fin: CORPS DE LA PAGE ----------------------------------------->
