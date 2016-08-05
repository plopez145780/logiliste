<?php

require_once 'Framework/Modele.php';
require_once 'Modele/Logiciel.php';

class Logitheque extends Modele {
    private $idMax = 0;
    private $logiciel;
    
    public function __construct(){
        $this->fichier = 'logiciels';
        $json = $this->getLogitheque();
        foreach ($json->{'logitheque'}->{'logiciel'} as $value) {
            if($value->{'id'} > $this->idMax){
                $this->idMax = $value->{'id'};
            }
           $this->logiciel[] = new Logiciel(
                $value->{'id'},
                $value->{'date'},
                $value->{'nom'},
                $value->{'site'},
                $value->{'description'},
                $value->{'categorie'}
            );
        }
        $this->idMax = count($this->logiciel);
    }

    public function getLogiciels(){
        return $this->logiciel;
    }



    public function add(Logiciel $logiciel){
        $this->logiciel[] = $logiciel;
    }

    public function tri(){

    }

    private function getLogitheque(){
        return $this->readContenu($this->fichier);
    }

    public function setLogitheque(){
        return $this->writeContenu($this->fichier, $this->logiciel);
    }
}