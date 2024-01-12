<?php

    class UserController
    {



        public function getAffichePageListeUser()
        {   
            require_once(MODEL_ROOT."UserModel.class.php");
            $objetUser = new UserModel($connexionBd);

            if(isset($_POST["envoyer"]))
            {
                $objetUser = new UserModel($connexionBd);

                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $age = (int)($_POST["age"]); 
                $fonction = $_POST["fonction"];
                // echo $nom,$prenom,$age,$fonction;
                // var_dump($nom);
                // var_dump($prenom);
                // var_dump($age);
                // var_dump($fonction);
                // die();
                $testInsertUser = $objetUser->setInsertUser($nom,$prenom,$age,$fonction);
                    if($testInsertUser === true)
                    {
                        ?><script>alert("utilisateur inserer avec succe");</script><?php
                    }
            }


            $liste = $objetUser->getListeNoms();
           
            include_once(VIEW_ROOT."listeUser.php");
        }




        public function getAffichePageTraitements()
        { 
            require_once(MODEL_ROOT."UserModel.class.php");
            
            include_once(VIEW_ROOT."traitements.php");  
        }
    }
?>