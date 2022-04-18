<?php
  class User {
    public $login;
    public $nom;
    public $prenom;
    
    function __construct($login,$nom,$prenom) {
      $this->login = $login;
      $this->nom = $nom;
      $this->prenom = $prenom;
    }
  }

  class Trajet{
    public $id;
    public $depart;
    public $arrivee;
    public $dateDepart;
    public $dateArrivee;
    public $nbPlaces;
    public $prix;
    public $conducteurLogin;
    
    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }
  
    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
  
      return $this;
    }

    function __construct($data){
      $this->id = $data[0];
      $this->depart = $data[1];
      $this->arrivee = $data[2];
      $this->dateDepart = $data[3];
      $this->dateArrivee = $data[4];
      $this->nbPlaces = $data[5];
      $this->prix = $data[6];
      $this->conducteurLogin = $data[7];
    }
  }
?>