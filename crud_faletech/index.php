<?php
include_once("_config.php");
include("routeur.class.php");
//------------------debut: ENTETE DE LA PAGE ---------------------------------------
 require_once(VIEW_ROOT."entetePage.php");
//----------------fin: ENTETE DE LA PAGE ----------------------------------------- 

//======================================================================================

    $requette = @$_GET['r'];

    if(empty($requette))  
    {
        $requette = "listeUser.php";

        $runderController = new Routeur($requette);
        $runderController->runderController();
    }

    else 
    {
        $runderController = new Routeur($requette);
        $runderController->runderController();
    } 

//======================================================================================


//----------------DEBUT: PIED DE LA PAGE --------------------------
 require_once(VIEW_ROOT."piedPage.php");
//----------------fin: PIED DE LA PAGE ----------------------------

?>