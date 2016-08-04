<?php
require_once 'Framework/Controleur.php';
require_once 'Framework/Vue.php';
require_once 'Modele/Categorie.php';

class ControleurCategorie extends Controleur{
    private $categorie;

    public function __construct(){
        $this->categorie = new Categorie();
    }

    public function index(){
        $contenuCat = $this->categorie->getCategories();
        $this->genererVue(array('categories'=>$contenuCat));
    }
}