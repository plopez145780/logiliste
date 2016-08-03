<?php
require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurLogiciel.php';
require_once 'Controleur/ControleurCategorie.php';
require_once 'Controleur/ControleurErreur.php';
require_once 'Vue/Vue.php';

class Routeur{
    private $ctrlAccueil;
    private $ctrlLogiciel;
    private $ctrlCategorie;
    private $ctrlErreur;
    
    public function __construct(){
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlLogiciel = new ControleurLogiciel();
        $this->ctrlCategorie = new ControleurCategorie();
        $this->ctrlErreur = new ControleurErreur();
    }
    
    public function routerRequete(){
        try{
            $action = filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
            switch ($action) {
                case 'accueil':
                    $this->ctrlAccueil->index();
                    break;
                case 'logiciel':
                    $this->ctrlLogiciel->index();
                    break;
                case 'ajout_logiciel':
                    $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_STRING);
                    $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
                    $site = filter_input(INPUT_POST, "site", FILTER_SANITIZE_STRING);
                    $categorie = filter_input(INPUT_POST, "categorie", FILTER_SANITIZE_STRING);
                    $this->ctrlLogiciel->add();
                    break;
                case 'suppr_logiciel':
                    $this->ctrlLogiciel->delete();
                    break;
                case 'modif_logiciel':
                    $this->ctrlLogiciel->update();
                    break;
                case 'categorie':
                    $this->ctrlCategorie->index();
                    break;
                case 'ajout_categorie':
                    $this->ctrlCategorie->add();
                    break;
                case 'suppr_categorie':
                    $this->ctrlCategorie->delete();
                    break;
                case 'modif_categorie':
                    $this->ctrlCategorie->update();
                    break;
                default:
                    throw new Exception("404 - Page Inexistante");
            }
        }
        catch(Exception $e){
            $this->ctrlErreur->index($e->getMessage());
        }
    }
}