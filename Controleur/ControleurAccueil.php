<?php
require_once 'Vue/Vue.php';

class ControleurAccueil{
    public function __construct(){

    }

    public function index(){
        $vue = new Vue("Accueil");
        $contenu = "Ceci est le texte de l'accueil, Bienvenue !";
        $vue->generer(array('contenu'=>$contenu));
    }
}