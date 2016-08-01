<?php
require_once 'Vue/Vue.php';
require_once 'Modele/Logiciel.php';
require_once 'Modele/Categorie.php';

class ControleurAccueil{
    public function __construct(){

    }

    public function accueil(){
        $logiciels = new Logiciel();
        $contenu = $logiciels->getLogiciels();

        $categories = new Categorie();
        $contenu2 = $categories->getCategories();

        $vue = new Vue("Accueil");
        $vue->generer(array('logiciels' => $contenu, 'categories' => $contenu2,));


    }
}