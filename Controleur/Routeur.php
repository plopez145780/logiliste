<?php

require_once 'Requete.php';
require_once 'Vue/Vue.php';

class Routeur {
    public function routerRequete() {
        try{
            $requete = new Requete(array_merge($_GET, $_POST));
            
            $controleur = $this->creerControleur($requete);
            $action = $this->creerAction($requete);
            
            $controleur->executerAction($action);
        }
        catch (Exception $e) {
            $this->gererErreur($e);
        }
    }
    
    private function creerControleur(Requete $requete) {
        $controleur = "Accueil";
        if($requete->existeParametre('controleur')) {
            $controleur = $requete->getParametre('controleur');
            $controleur = ucfirst(strtolower($controleur));
        }
        
        $classControleur = "Controleur".$controleur;
        $fichierControleur = "Controleur/".$classControleur.".php";
        
        if(file_exists($fichierControleur)) {
            require($fichierControleur);
            $controleur = new $classControleur();
            $controleur->setRequete($requete);
            return $controleur;
        }
        else {
            throw new Exception("Fichier '$fichierControleur' introuvable");
        }
    }
    
    private function creerAction(Requete $requete) {
        $action = "index";
        if($requete->existeParametre('action')) {
            $action = $requete->getParametre('action');
        }
        return $action;
    }

    private function gererErreur(Exception $exception) {
        $vue = new Vue('erreur');
        $vue->generer(array('msgErreur' => $exception->getMessage()));
    }
    
    /*switch ($action) {
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
    }*/
    
}