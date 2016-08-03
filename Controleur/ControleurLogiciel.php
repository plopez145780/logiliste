<?php
require_once 'Vue/Vue.php';
require_once 'Modele/Logiciel.php';
require_once 'Modele/Categorie.php';

class ControleurLogiciel{
    private $logiciel;
    private $categorie;
    
    public function __construct(){
        $this->logiciel = new Logiciel();
        $this->categorie = new Categorie();
    }
    
    public function index(){
        $contenuLogi = $this->logiciel->getLogiciels();
        $contenuCat = $this->categorie->getCategories();
        
        $vue = new Vue("Logiciel");
        $vue->generer(array('logiciels' => $contenuLogi, 'categories' => $contenuCat,));
    }
    
    public function add($form = null){
        if($form == null){
            $this->index();
        }
        else{
            $vue = new Vue("FormAddLogiciel");
            $vue->generer(array());
        }
    }
    
    
}