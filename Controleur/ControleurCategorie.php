<?php
require_once 'Vue/Vue.php';
require_once 'Modele/Categorie.php';

class ControleurCategorie{
    private $categorie;

    public function __construct(){
        $this->categorie = new Categorie();
    }

    public function index(){
        $contenuCat = $this->categorie->getCategories();
        $vue = new Vue("Categorie");
        $vue->generer(array('categories'=>$contenuCat));


    }
}