<?php
require_once 'Controleur/ControleurAccueil.php';
require_once 'Vue/Vue.php';

class Routeur{
    private $ctrlAccueil;

    public function __construct(){
        $this->ctrlAccueil = new ControleurAccueil();
    }

    public function routerRequete(){
        try{
            $action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
            switch ($action) {
                case 'accueil':
                    $this->ctrlAccueil->accueil();
                    break;
                default:
                    throw new Exception("404 - Page Inexistante");
                    break;
            }
        }
        catch(Exception $e){
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgErreur){
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}