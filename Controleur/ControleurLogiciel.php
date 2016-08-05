<?php
require_once 'Framework/Controleur.php';
require_once 'Framework/Vue.php';
require_once 'Modele/Logitheque.php';
require_once 'Modele/Logiciel.php';
require_once 'Modele/Categorie.php';

class ControleurLogiciel extends Controleur {
    private $logitheque;
    private $categorie;
    
    public function __construct(){
        $this->logitheque = new Logitheque();
        $this->categorie = new Categorie();
    }
    
    public function index(){
        $contenuLogi = $this->logitheque->getLogiciels();
        $contenuCat = $this->categorie->getCategories();
        $this->genererVue(array('logiciels' => $contenuLogi, 'categories' => $contenuCat,));
    }
    
    public function add(){
        if($this->requete->existeParametre('nom')){
            $logiciel = new Logiciel();
            $this->logitheque->add($logiciel);

            $this->logitheque->setLogitheque();
            //header("Location: ../../logiciel/index");
        }
        else {
            $this->genererVue(array());
        }
    }
    
    
}