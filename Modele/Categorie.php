<?php
class Categorie{
    private $id;
    private $nom;
    private $description;
    
    public function __construct($nom, $description, $id){
        setNom($nom);
        setDescription($description);
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
}