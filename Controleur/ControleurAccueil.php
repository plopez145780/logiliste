<?php
require_once 'Vue/Vue.php';
require_once 'Controleur.php';

class ControleurAccueil extends Controleur{
    public function __construct(){

    }

    public function index(){
        $contenu = "Ceci est le texte de l'accueil, Bienvenue !";
        $this->genererVue(array('contenu'=>$contenu));
    }
}