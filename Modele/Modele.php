<?php
abstract class Modele {
    public $fichier;

    public function getFichier(){
        return $this->fichier;
    }
    public function setFichier($fichier){
        $this->fichier = $fichier;
    }

    public function getContenu($fichier){
        $this->setFichier($fichier);
        $json = file_get_contents("BD/$this->fichier.json");
        if($json){
            return json_decode($json);
        }
        else{
            echo "Le ficher json 'BD/$this->fichier.json' retourne une erreur";
        }
    }

    public function updateContenu(){

    }

    public function deleteContenu(){

    }

    
}