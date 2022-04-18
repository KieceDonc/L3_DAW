<?php
  class Voiture {
    public $marque = '';
    public $couleur = '';
    public $immatriculation = '';
    
    function __construct($marque,$couleur,$immatriculation) {
      $this->marque = $marque;
      $this->couleur = $couleur;
      $this->immatriculation = $immatriculation;
    }

    function setMarque($marque) {
      $this->marque=$marque;
    }

    function getMarque(){
      return $this->marque;
    }

    function getCouleur(){
      return $this->couleur;
    }

    function setCouleur($couleur){
      $this->couleur = $couleur;
    }

    function getImmatriculation(){
      return $this->immatriculation;
    }

    function setImmatriculation($immatriculation){
      $this->immatriculation = $immatriculation;
    }

    function affiche(){
      echo "Marque : ". $this->getMarque() ."\nCouleur : ". $this->getCouleur() ."\nImmatriculation : ".$this->getImmatriculation();
    }
  }
?>