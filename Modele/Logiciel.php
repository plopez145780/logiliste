<?php
class Logiciel{
    private $id;
    private $nom;
    private $siteWeb;
    private $description;
    private $idCategorie;

    public function __construct($nom, $description, $idCategorie, $siteWeb = "", $id = null){
        setNom($nom);
        setDescription($description);
        setIdCategorie($idCategorie);
        setSiteWeb($siteWeb);
        setId($id);
    }
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
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
    public function getSiteWeb(){
        return $this->siteWeb;
    }
    public function setSiteWeb($siteWeb){
        $this->siteWeb = $siteWeb;
    }
}