<?php
require_once 'Controleur.php';
require_once 'Vue/Vue.php';
require_once 'Modele/Logiciel.php';
require_once 'Modele/Categorie.php';

class ControleurLogiciel extends Controleur {
    private $logiciel;
    private $categorie;
    
    public function __construct(){
        $this->logiciel = new Logiciel();
        $this->categorie = new Categorie();
    }
    
    public function index(){
        $contenuLogi = $this->logiciel->getLogiciels();
        $contenuCat = $this->categorie->getCategories();
        $this->genererVue(array('logiciels' => $contenuLogi, 'categories' => $contenuCat,));
    }
    
    public function add($form = null){
        if($form == null){
            $this->index();
        }
        else{
            $this->genererVue(array());

        }
    }
    
    
}