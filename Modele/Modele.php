<?php

abstract class Modele {
    private $fichier;
    
    protected function getFichier(){
        return $this->fichier;
    }
    protected function setFichier($fichier){
        $this->fichier = $fichier;
    }
    
    protected function readContenu($fichier){
        $this->setFichier($fichier);
        try{
            $json = file_get_contents("BD/$this->fichier.json");
            if($json){
                return json_decode($json);
            }
            else{
                throw new Exception("Le ficher json 'BD/$this->fichier.json' retourne une erreur", 1);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    
    protected function writeContenu($fichier, $contenu){
        $this->setFichier($fichier);
        try{
            if (file_put_contents("BD/$this->fichier.json", $contenu) === FALSE){
                throw new Exception("erreur : Lors de l'ecriture dans le ficher json 'BD/$this->fichier.json'", 1);
            }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}