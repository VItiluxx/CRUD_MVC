<?php
    include("connexionBd.php");
    class UserModel
    {
        private $connexion;

        public function __construct($connexionBd) {
            $this->connexion = $connexionBd;
        }



        public function supprimeUser($id)
        {
            $req = $this->connexion->prepare("DELETE FROM user WHERE id_use =:id");
            $req->bindParam(":id", $id, PDO::PARAM_INT);
            $req->execute();
            return true;
        }

    /*=========================================== 
                        GETTERS
    ============================================*/
    public function getListeNoms()
    {
        $req = $this->connexion->query("SELECT * FROM user");
        $donnees = $req->fetchAll(PDO::FETCH_OBJ);

        return $donnees;
    }
        public function getOneUser($id)
        {
            $req = $this->connexion->prepare(" SELECT * FROM user WHERE id_use=:id ");
            $req->bindParam(":id", $id, PDO::PARAM_INT);
            $req->execute();
            $donnees = $req->fetchAll(PDO::FETCH_OBJ);

            return $donnees;
        }
            public function getNom($id)
            {
                $req = $this->connexion->prepare("SELECT nom_use FROM user WHERE id_use=:id");
                $req->bindParam(":id", $id, PDO::PARAM_INT);
                $req->execute();
                $donnees = $req->fetch(PDO::FETCH_OBJ);
                return $donnees;

            }

            public function getPrenom()
            {
                $req = $this->connexion->query("SELECT nom_use FROM user");
                $donnees = $req->fetchAll(PDO::FETCH_OBJ);
                return $donnees;
            }

            public function getAge()
            {
                $req = $this->connexion->query("SELECT nom_use FROM user");
                $donnees = $req->fetchAll(PDO::FETCH_OBJ);
                return $donnees;
            }

            public function getFonction()
            {
                $req = $this->connexion->query("SELECT nom_use FROM user");
                $donnees = $req->fetchAll(PDO::FETCH_OBJ);
                return $donnees;
            }


    /*=========================================== 
                        SETTERS 
    ============================================*/
    public function setInsertUser($nom,$prenom,$age,$fonction)
    {
        $req = $this->connexion->prepare("INSERT INTO user(nom_use,prenom_use,age_use,fonction_use) VALUE(:newNom,:newPrenom,:newAge,:newFonction)");
        $req->bindParam(":newNom", $nom, PDO::PARAM_STR);
        $req->bindParam(":newPrenom", $prenom, PDO::PARAM_STR);
        $req->bindParam(":newAge", $age, PDO::PARAM_INT);
        $req->bindParam(":newFonction", $fonction, PDO::PARAM_STR);
        $req->execute();

        return true;
    }

    public function setUpdateUser($newNom,$newPrenom,$newAge,$newFonction,$id)
    {
        $req = $this->connexion->prepare("UPDATE user SET nom_use =:nom, prenom_use =:prenom, age_use =:age, fonction_use =:fonction WHERE id_use = :id ");
        $req->bindParam(":nom", $newNom, PDO::PARAM_STR);
        $req->bindParam(":prenom", $newPrenom, PDO::PARAM_STR);
        $req->bindParam(":age", $newAge, PDO::PARAM_INT);
        $req->bindParam(":fonction", $newFonction, PDO::PARAM_STR);
        $req->bindParam(":id", $id, PDO::PARAM_INT);
        $req->execute();

        return true;
    }

          




    }

