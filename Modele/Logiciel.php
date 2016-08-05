<?php
require_once 'Framework/Modele.php';

class Logiciel extends Modele{
    public $id;
    public $date;
    public $nom;
    public $siteWeb;
    public $description;
    public $idCategorie;
    
    public function __construct($id = 0, $date = "", $nom = "", $siteWeb = "", $description = "", $categorie = array()){
        $this->id = $id;
        if($date != ""){
            $this->date = $date;
        }
        else {
            $this->date = date('Y-m-d');
        }
        $this->nom = $nom;
        $this->siteWeb = $siteWeb;
        $this->description = $description;
        $this->idCategorie = $categorie;
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function getSiteWeb(){
        return $this->siteWeb;
    }
    public function setSiteWeb($siteWeb){
        $this->siteWeb = $siteWeb;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($description){
        $this->description = $description;
    }
    public function getIdCategorie(){
        return $this->idCategorie;
    }
    public function setIdCategorie($idCategorie){
        $this->idCategorie = $idCategorie;
    }
}