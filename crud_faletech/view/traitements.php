<?php

    if(isset($_GET))
    {
        require_once(MODEL_ROOT."UserModel.class.php");

        if( isset($_GET["id"]) && isset(($_GET["action"])) && $_GET["action"]==="modif" )
        {
            $id_int = (int)$_GET["id"];
            $objetUser = new UserModel($connexionBd);
            $users = $objetUser->getOneUser($id_int);
            foreach($users AS $user)
            {
                $prenom = $user->prenom_use;
                $nom = $user->nom_use;
                $age = $user->age_use;
                $fonction = $user->fonction_use;
                // echo $nom;
                // var_dump($nom);
                // die();
            }

            ?>
           
                <form action="" method="post">
                    <div>
                        <label for="nom">NOM : </label>
                        <input type="text" name="upNom" id="nom" value="<?=$nom;?>" >
                    </div>
                    <div>
                        <label for="prenom">PRENOM : </label>
                        <input type="text" name="upPrenom" id="prenom" value="<?=$prenom;?>">
                    </div>
                    <div>
                        <label for="age">AGE : </label>
                        <input type="number" name="upAge" id="age" value="<?=$age;?>">
                    </div>
                    <div>
                        <label for="fonction">FONCTION : </label>
                        <input type="text" name="upFonction" id="fonction" value="<?=$fonction;?>">
                    </div>
                    <div>
                        <input type="submit" name="upEnvoyer" id="envoyer" value="Mettre a jour">
                    </div>
                </form>
             <?php

             if(isset($_POST["upEnvoyer"]))
             {
                $upNom = $_POST["upNom"];
                $upPrenom = $_POST["upPrenom"];
                $upAge = (int)$_POST["upAge"];
                $upFonction = $_POST["upFonction"];
                
                $testInsertUser = $objetUser->setUpdateUser($upNom,$upPrenom,$upAge,$upFonction,$id_int);

                if($testInsertUser === true)
                {
                    ?><script>alert("DONNEES MISES A JOUR AVEC SUCCES");</script><?php
                    header("Location: ".HOST."listeUser.php");
                    exit;
                }
             }   
        }



        if( isset($_GET["id"]) && isset(($_GET["action"])) && $_GET["action"]==="supp" )
        {
            $id_int = (int)$_GET["id"];
            $objetUser = new UserModel($connexionBd);
            $testSuppUser = $objetUser->supprimeUser($id_int);
 
               if($testSuppUser === true)
               {
                    ?><script>alert("DONNEES MISES A JOUR AVEC SUCCES");</script><?php
                    header("Location: ".HOST."listeUser.php");
                    exit;
               }
        }
    }

?>