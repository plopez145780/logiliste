<?php
class Vue{
    private $fichier;
    private $titre;

    public function __construct($action){
        $this->setFichier("Vue/vue" . $action . ".php");
    }

    public function getfichier(){
        return $this->fichier;
    }
    public function setFichier($fichier){
        $this->fichier = $fichier;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function generer($donnees){
        $contenu = $this->genererFichier($this->getfichier(), $donnees);
        $vue = $this->genererFichier('Vue/gabarit.php', array('titre' => $this->getTitre(), 'contenu' => $contenu));
        echo $vue;
    }

    private function genererFichier($fichier, $donnees){
        if(file_exists($fichier)){
            extract($donnees);
            ob_start();
            require $fichier;
            return ob_get_clean();
        }
        else{
            echo "Fichier '$fichier' introuvable";
            return 'erreur';
            //throw new Exception("Fichier '$fichier' introuvable");
        }
    }
}