<?php
require_once 'Framework/Vue.php';

class ControleurErreur{
    public function __construct(){
        
    }

    public function index($msgErreur){
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }
}