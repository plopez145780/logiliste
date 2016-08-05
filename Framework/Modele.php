<?php

abstract class Modele {
    private $fichier;
    private $chemin;
    
    protected function getFichier(){
        return $this->fichier;
    }
    protected function setFichier($fichier){
        $this->fichier = $fichier;
        $this->chemin = "BD/$this->fichier.json";
    }
    
    protected function readContenu($fichier){
        try{
            $this->setFichier($fichier);
            $json = file_get_contents($this->chemin);
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
        try{
            $this->setFichier($fichier);
            $contenuEncode = json_encode($contenu);
            /*if (file_put_contents($this->chemin, $contenuEncode) === FALSE){
                throw new Exception("erreur : Lors de l'ecriture dans le ficher json 'BD/$this->fichier.json'", 1);
            }*/
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
}