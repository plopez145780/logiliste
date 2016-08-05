<?php

require_once 'Framework/Requete.php';
require_once 'Framework/Configuration.php';
require_once 'Framework/Vue.php';

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
        $controleur = Configuration::get("pageAccueil", "Accueil");
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
}