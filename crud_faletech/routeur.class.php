<?php

    include(CONTROLLER_ROOT."UserController.class.php");
    
    class Routeur 
    {
        private $requette;
        private $route = [
                          "listeUser.php" =>          ["controller" => "UserController", "method" => "getAffichePageListeUser"],
                          "traitements.php" =>          ["controller" => "UserController", "method" => "getAffichePageTraitements"],

                        ];
    
    
        public function __construct($requette)
        {
            
            $this->requette = $requette;
            
        }
    
    
        public function runderController()
        {
            $requette = $this->requette;
            
            if(key_exists($requette, $this->route))
            {
                $controller = $this->route[$requette]["controller"]; //on recupere la requette + le controller
                $method = $this->route[$requette]["method"]; // de meme on recupere la requette + la method adequoite
        
                $controllerDemander = new $controller();
                $controllerDemander->$method();
            }
            else{
                echo "ERREUR 404 PAGE NON TROUVER SUR NOTRE SITE";
            }
        }
    }

?>